<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller 
{
	public function __construct( )
	{
		parent::__construct();
		
		$this->is_logged_in();
	}
	function is_logged_in( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
		if ( $is_logged_in !== 'true' || !isset( $is_logged_in ) ) {
			redirect( base_url() . 'index.php/login', 'refresh' );
		} //$is_logged_in !== 'true' || !isset( $is_logged_in )
	}
	function checkaccess($access)
	{
		$accesslevel=$this->session->userdata('accesslevel');
		if(!in_array($accesslevel,$access))
			redirect( base_url() . 'index.php/site?alerterror=You do not have access to this page. ', 'refresh' );
	}
	public function index()
	{
		$access = array("1","2");
		$this->checkaccess($access);
		$data[ 'page' ] = 'dashboard';
		$data[ 'title' ] = 'Welcome';
		$this->load->view( 'template', $data );	
	}
	public function createuser()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data['accesslevel']=$this->user_model->getaccesslevels();
		$data[ 'status' ] =$this->user_model->getstatusdropdown();
		$data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
//        $data['category']=$this->category_model->getcategorydropdown();
		$data[ 'page' ] = 'createuser';
		$data[ 'title' ] = 'Create User';
		$this->load->view( 'template', $data );	
	}
	function createusersubmit()
	{
		$access = array("1");
		$this->checkaccess($access);
		$this->form_validation->set_rules('name','Name','trim|required|max_length[30]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required|matches[password]');
		$this->form_validation->set_rules('accessslevel','Accessslevel','trim');
		$this->form_validation->set_rules('status','status','trim|');
		$this->form_validation->set_rules('socialid','Socialid','trim');
		$this->form_validation->set_rules('logintype','logintype','trim');
		$this->form_validation->set_rules('json','json','trim');
		if($this->form_validation->run() == FALSE)	
		{
			$data['alerterror'] = validation_errors();
			$data['accesslevel']=$this->user_model->getaccesslevels();
            $data[ 'status' ] =$this->user_model->getstatusdropdown();
            $data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
            $data['category']=$this->category_model->getcategorydropdown();
            $data[ 'page' ] = 'createuser';
            $data[ 'title' ] = 'Create User';
            $this->load->view( 'template', $data );	
		}
		else
		{
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $accesslevel=$this->input->post('accesslevel');
            $status=$this->input->post('status');
            $socialid=$this->input->post('socialid');
            $logintype=$this->input->post('logintype');
            $json=$this->input->post('json');
//            $category=$this->input->post('category');
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $image=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
			if($this->user_model->create($name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json)==0)
			$data['alerterror']="New user could not be created.";
			else
			$data['alertsuccess']="User created Successfully.";
			$data['redirect']="site/viewusers";
			$this->load->view("redirect",$data);
		}
	}
    function viewusers()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data['page']='viewusers';
        $data['base_url'] = site_url("site/viewusersjson");
        
		$data['title']='View Users';
		$this->load->view('template',$data);
	} 
    function viewusersjson()
	{
		$access = array("1");
		$this->checkaccess($access);
        
        
        $elements=array();
        $elements[0]=new stdClass();
        $elements[0]->field="`user`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";
        
        
        $elements[1]=new stdClass();
        $elements[1]->field="`user`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";
        
        $elements[2]=new stdClass();
        $elements[2]->field="`user`.`email`";
        $elements[2]->sort="1";
        $elements[2]->header="Email";
        $elements[2]->alias="email";
        
        $elements[3]=new stdClass();
        $elements[3]->field="`user`.`socialid`";
        $elements[3]->sort="1";
        $elements[3]->header="SocialId";
        $elements[3]->alias="socialid";
        
        $elements[4]=new stdClass();
        $elements[4]->field="`logintype`.`name`";
        $elements[4]->sort="1";
        $elements[4]->header="Logintype";
        $elements[4]->alias="logintype";
        
        $elements[5]=new stdClass();
        $elements[5]->field="`user`.`json`";
        $elements[5]->sort="1";
        $elements[5]->header="Json";
        $elements[5]->alias="json";
       
        $elements[6]=new stdClass();
        $elements[6]->field="`accesslevel`.`name`";
        $elements[6]->sort="1";
        $elements[6]->header="Accesslevel";
        $elements[6]->alias="accesslevelname";
       
        $elements[7]=new stdClass();
        $elements[7]->field="`statuses`.`name`";
        $elements[7]->sort="1";
        $elements[7]->header="Status";
        $elements[7]->alias="status";
       
        
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
            $maxrow=20;
        }
        
        if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
       
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `user` LEFT OUTER JOIN `logintype` ON `logintype`.`id`=`user`.`logintype` LEFT OUTER JOIN `accesslevel` ON `accesslevel`.`id`=`user`.`accesslevel` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`user`.`status`");
        
		$this->load->view("json",$data);
	} 
    
    
	function edituser()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'status' ] =$this->user_model->getstatusdropdown();
		$data['accesslevel']=$this->user_model->getaccesslevels();
		$data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
		$data['before']=$this->user_model->beforeedit($this->input->get('id'));
		$data['page']='edituser';
		$data['page2']='block/userblock';
		$data['title']='Edit User';
		$this->load->view('template',$data);
	}
	function editusersubmit()
	{
		$access = array("1");
		$this->checkaccess($access);
		
		$this->form_validation->set_rules('name','Name','trim|required|max_length[30]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','trim|matches[password]');
		$this->form_validation->set_rules('accessslevel','Accessslevel','trim');
		$this->form_validation->set_rules('status','status','trim|');
		$this->form_validation->set_rules('socialid','Socialid','trim');
		$this->form_validation->set_rules('logintype','logintype','trim');
		$this->form_validation->set_rules('json','json','trim');
		if($this->form_validation->run() == FALSE)	
		{
			$data['alerterror'] = validation_errors();
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data['accesslevel']=$this->user_model->getaccesslevels();
            $data[ 'logintype' ] =$this->user_model->getlogintypedropdown();
			$data['before']=$this->user_model->beforeedit($this->input->post('id'));
			$data['page']='edituser';
//			$data['page2']='block/userblock';
			$data['title']='Edit User';
			$this->load->view('template',$data);
		}
		else
		{
            
            $id=$this->input->get_post('id');
            $name=$this->input->get_post('name');
            $email=$this->input->get_post('email');
            $password=$this->input->get_post('password');
            $accesslevel=$this->input->get_post('accesslevel');
            $status=$this->input->get_post('status');
            $socialid=$this->input->get_post('socialid');
            $logintype=$this->input->get_post('logintype');
            $json=$this->input->get_post('json');
//            $category=$this->input->get_post('category');
            
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="image";
			$image="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $image=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($image=="")
            {
            $image=$this->user_model->getuserimagebyid($id);
               // print_r($image);
                $image=$image->image;
            }
            
			if($this->user_model->edit($id,$name,$email,$password,$accesslevel,$status,$socialid,$logintype,$image,$json)==0)
			$data['alerterror']="User Editing was unsuccesful";
			else
			$data['alertsuccess']="User edited Successfully.";
			
			$data['redirect']="site/viewusers";
			//$data['other']="template=$template";
			$this->load->view("redirect",$data);
			
		}
	}
	
	function deleteuser()
	{
		$access = array("1");
		$this->checkaccess($access);
		$this->user_model->deleteuser($this->input->get('id'));
//		$data['table']=$this->user_model->viewusers();
		$data['alertsuccess']="User Deleted Successfully";
		$data['redirect']="site/viewusers";
			//$data['other']="template=$template";
		$this->load->view("redirect",$data);
	}
	function changeuserstatus()
	{
		$access = array("1");
		$this->checkaccess($access);
		$this->user_model->changestatus($this->input->get('id'));
		$data['table']=$this->user_model->viewusers();
		$data['alertsuccess']="Status Changed Successfully";
		$data['redirect']="site/viewusers";
        $data['other']="template=$template";
        $this->load->view("redirect",$data);
	}
    
    
    
    public function viewbanner()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewbanner";
	$data["base_url"]=site_url("site/viewbannerjson");
	$data["title"]="View banner";
	$this->load->view("template",$data);
}
function viewbannerjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_banner`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_banner`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`statuses`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Status";
	$elements[2]->alias="status";
    $elements[3]=new stdClass();
	$elements[3]->field="`sfa_banner`.`order`";
	$elements[3]->sort="1";
	$elements[3]->header="order";
	$elements[3]->alias="order";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_banner` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_banner`.`status`");
	$this->load->view("json",$data);
}

public function createbanner()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createbanner";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Create banner";
	$this->load->view("template",$data);
}
public function createbannersubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createbanner";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Create banner";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			if($this->banner_model->create($name,$status,$order)==0)
			$data["alerterror"]="New banner could not be created.";
			else
			$data["alertsuccess"]="banner created Successfully.";
			$data["redirect"]="site/viewbanner";
			$this->load->view("redirect",$data);
		}
}
public function editbanner()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editbanner";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Edit banner";
	$data["base_url"]=site_url("site/viewbannerslidesjson?id=").$this->input->get('id');
	$data["before"]=$this->banner_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editbannersubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
		if($this->form_validation->run()==FALSE)
	{
		$data["alerterror"]=validation_errors();
		$data["page"]="editbanner";
		$data[ 'status' ] =$this->user_model->getstatusdropdown();
		$data["title"]="Edit banner";
		$data["before"]=$this->banner_model->beforeedit($this->input->get("id"));
		$this->load->view("template",$data);
	}
		else
	{
		$id=$this->input->get_post("id");
		$name=$this->input->get_post("name");
		$status=$this->input->get_post("status");
		$order=$this->input->get_post("order");
		if($this->banner_model->edit($id,$name,$status,$order)==0)
		$data["alerterror"]="New banner could not be Updated.";
		else
		$data["alertsuccess"]="banner Updated Successfully.";
		$data["redirect"]="site/viewbanner";
		$this->load->view("redirect",$data);
	}
}
public function deletebanner()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->banner_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewbanner";
	$this->load->view("redirect",$data);
}
public function viewbannerslides()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewbannerslides";
	$data["base_url"]=site_url("site/viewbannerslidesjson?id=").$this->input->get('id');
	$data["title"]="View bannerslides";
	$this->load->view("template",$data);
}
function viewbannerslidesjson()
{
	$id=$this->input->get('id');
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_bannerslides`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_banner`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="banner";
	$elements[1]->alias="banner";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_bannerslides`.`order`";
	$elements[2]->sort="1";
	$elements[2]->header="Order";
	$elements[2]->alias="order";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_bannerslides`.`icon`";
	$elements[3]->sort="1";
	$elements[3]->header="Icon";
	$elements[3]->alias="icon";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_bannerslides`.`title`";
	$elements[4]->sort="1";
	$elements[4]->header="Title";
	$elements[4]->alias="title";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_bannerslides`.`link`";
	$elements[5]->sort="1";
	$elements[5]->header="Link";
	$elements[5]->alias="link";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_bannerslides`.`image`";
	$elements[6]->sort="1";
	$elements[6]->header="Image";
	$elements[6]->alias="image";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_bannerslides`.`banner`";
	$elements[7]->sort="1";
	$elements[7]->header="bannerid";
	$elements[7]->alias="bannerid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_bannerslides` LEFT OUTER JOIN `sfa_banner` ON `sfa_banner`.`id`=`sfa_bannerslides`.`banner`","WHERE `sfa_bannerslides`.`banner`='$id'");
	$this->load->view("json",$data);
}

public function createbannerslides()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createbannerslides";
	$data['banner']=$this->bannerslides_model->getbannerdropdown();
	$data["title"]="Create bannerslides";
	$this->load->view("template",$data);
}
public function createbannerslidessubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("banner","banner","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("icon","Icon","trim");
	$this->form_validation->set_rules("title","Title","trim");
	$this->form_validation->set_rules("link","Link","trim");
	$this->form_validation->set_rules("image","Image","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data['banner']=$this->bannerslides_model->getbannerdropdown();
			$data["page"]="createbannerslides";
			$data["title"]="Create bannerslides";
			$this->load->view("template",$data);
		}
			else
		{
			$banner=$this->input->get_post("banner");
			$order=$this->input->get_post("order");
			//$icon=$this->input->get_post("icon");
			$title=$this->input->get_post("title");
			$link=$this->input->get_post("link");
			$description=$this->input->get_post("description");
			$startdate=$this->input->get_post("startdate");
			$enddate=$this->input->get_post("enddate");
				//IMAGE
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];
						}
					 //ICON
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="icon";
						$icon="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$icon=$uploaddata['file_name'];
						}



			if($this->bannerslides_model->create($banner,$order,$icon,$title,$link,$image,$description,$startdate,$enddate)==0)
			$data["alerterror"]="New bannerslides could not be created.";
			else
			$data["alertsuccess"]="bannerslides created Successfully.";
			$data["redirect"]="site/viewbannerslides?id=".$banner;
			$this->load->view("redirect2",$data);
		}
}
public function editbannerslides()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editbannerslides";
	$data['banner']=$this->bannerslides_model->getbannerdropdown();
	$data['id']=$this->input->get('id');
	$data['bannerid']=$this->input->get('bannerid');
	$data["title"]="Edit bannerslides";
	$data["before"]=$this->bannerslides_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editbannerslidessubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("banner","banner","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("icon","Icon","trim");
	$this->form_validation->set_rules("title","Title","trim");
	$this->form_validation->set_rules("link","Link","trim");
	$this->form_validation->set_rules("image","Image","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editbannerslides";
			$data['banner']=$this->bannerslides_model->getbannerdropdown();
			$data["title"]="Edit bannerslides";
			$data["before"]=$this->bannerslides_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$banner=$this->input->get_post("banner");
			$order=$this->input->get_post("order");
			//$icon=$this->input->get_post("icon");
			$title=$this->input->get_post("title");
			$link=$this->input->get_post("link");
            $description=$this->input->get_post("description");
			$startdate=$this->input->get_post("startdate");
			$enddate=$this->input->get_post("enddate");
			//$image=$this->input->get_post("image");

				//IMAGE

				   $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];
						}

						if($image=="")
						{
						$image=$this->bannerslides_model->getimagebyid($id);
						   // print_r($image);
							$image=$image->image;
						}
				//ICON

				   $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="icon";
						$icon="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$icon=$uploaddata['file_name'];
						}

						if($icon=="")
						{
						$icon=$this->bannerslides_model->geticonbyid($id);
						   // print_r($image);
							$icon=$icon->icon;
						}
			if($this->bannerslides_model->edit($id,$banner,$order,$icon,$title,$link,$image,$description,$startdate,$enddate)==0)
			$data["alerterror"]="New bannerslides could not be Updated.";
			else
			$data["alertsuccess"]="bannerslides Updated Successfully.";
			$data["redirect"]="site/viewbannerslides?id=".$banner;
			$this->load->view("redirect2",$data);
		}
}
public function deletebannerslides()
{
	$access=array("1");
	$this->checkaccess($access);
	$data['id']=$this->input->get('id');
	$data['banner']=$this->input->get('bannerid');
	$this->bannerslides_model->delete($this->input->get('id'));
	$data["redirect"]="site/viewbannerslides?id=".$this->input->get('bannerid');
	$this->load->view("redirect2",$data);
}
public function viewarticles()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewarticles";
	$data["base_url"]=site_url("site/viewarticlesjson");
	$data["title"]="View articles";
	$this->load->view("template",$data);
}
function viewarticlesjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_articles`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_articles`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`statuses`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Status";
	$elements[2]->alias="status";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_articles`.`image`";
	$elements[3]->sort="1";
	$elements[3]->header="Image";
	$elements[3]->alias="image";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_articles`.`json`";
	$elements[4]->sort="1";
	$elements[4]->header="Json";
	$elements[4]->alias="json";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_articles`.`text`";
	$elements[5]->sort="1";
	$elements[5]->header="Text";
	$elements[5]->alias="text";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_articles` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_articles`.`status`");
	$this->load->view("json",$data);
}

public function createarticles()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createarticles";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Create articles";
	$this->load->view("template",$data);
}
public function createarticlessubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("text","Text","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createarticles";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Create articles";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			//$image=$this->input->get_post("image");
			$json=$this->input->get_post("json");
			$text=$this->input->get_post("text");
				//IMAGE
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}
			if($this->articles_model->create($name,$status,$image,$json,$text)==0)
			$data["alerterror"]="New articles could not be created.";
			else
			$data["alertsuccess"]="articles created Successfully.";
			$data["redirect"]="site/viewarticles";
			$this->load->view("redirect",$data);
		}
}
public function editarticles()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editarticles";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Edit articles";
	$data["before"]=$this->articles_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editarticlessubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("text","Text","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editarticles";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Edit articles";
			$data["before"]=$this->articles_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			//$image=$this->input->get_post("image");
			$json=$this->input->get_post("json");
			$text=$this->input->get_post("text");
				 $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}

						if($image=="")
						{
						$image=$this->articles_model->getimagebyid($id);
						   // print_r($image);
							$image=$image->image;
						}

			if($this->articles_model->edit($id,$name,$status,$image,$json,$text)==0)
			$data["alerterror"]="New articles could not be Updated.";
			else
			$data["alertsuccess"]="articles Updated Successfully.";
			$data["redirect"]="site/viewarticles";
			$this->load->view("redirect",$data);
		}
}
public function deletearticles()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->articles_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewarticles";
	$this->load->view("redirect",$data);
}
public function viewmodules()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmodules";
	$data["base_url"]=site_url("site/viewmodulesjson");
	$data["title"]="View modules";
	$this->load->view("template",$data);
}
function viewmodulesjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_modules`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_modules`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`statuses`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Status";
	$elements[2]->alias="status";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_modules`.`url`";
	$elements[3]->sort="1";
	$elements[3]->header="Url";
	$elements[3]->alias="url";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_modules`.`type`";
	$elements[4]->sort="1";
	$elements[4]->header="Type";
	$elements[4]->alias="type";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_modules`.`text`";
	$elements[5]->sort="1";
	$elements[5]->header="Text";
	$elements[5]->alias="text";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_modules` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_modules`.`status`");
	$this->load->view("json",$data);
}

public function createmodules()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createmodules";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data[ 'type' ] =$this->user_model->gettypedropdown();
	$data["title"]="Create modules";
	$this->load->view("template",$data);
}
public function createmodulessubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("url","Url","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("text","Text","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createmodules";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data[ 'type' ] =$this->user_model->gettypedropdown();
			$data["title"]="Create modules";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$url=$this->input->get_post("url");
			$type=$this->input->get_post("type");
			$text=$this->input->get_post("text");
			if($this->modules_model->create($name,$status,$url,$type,$text)==0)
			$data["alerterror"]="New modules could not be created.";
			else
			$data["alertsuccess"]="modules created Successfully.";
			$data["redirect"]="site/viewmodules";
			$this->load->view("redirect",$data);
		}
}
public function editmodules()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmodules";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data[ 'type' ] =$this->user_model->gettypedropdown();
	$data["title"]="Edit modules";
	$data["before"]=$this->modules_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editmodulessubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("url","Url","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("text","Text","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmodules";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data[ 'type' ] =$this->user_model->gettypedropdown();
			$data["title"]="Edit modules";
			$data["before"]=$this->modules_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$url=$this->input->get_post("url");
			$type=$this->input->get_post("type");
			$text=$this->input->get_post("text");
			if($this->modules_model->edit($id,$name,$status,$url,$type,$text)==0)
			$data["alerterror"]="New modules could not be Updated.";
			else
			$data["alertsuccess"]="modules Updated Successfully.";
			$data["redirect"]="site/viewmodules";
			$this->load->view("redirect",$data);
		}
}
public function deletemodules()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->modules_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmodules";
	$this->load->view("redirect",$data);
}
public function viewmedia()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmedia";
	$data["base_url"]=site_url("site/viewmediajson");
	$data["title"]="View media";
	$this->load->view("template",$data);
}
function viewmediajson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_media`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_media`.`status`";
	$elements[1]->sort="1";
	$elements[1]->header="Status";
	$elements[1]->alias="status";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_media`.`order`";
	$elements[2]->sort="1";
	$elements[2]->header="Order";
	$elements[2]->alias="order";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_media`.`name`";
	$elements[3]->sort="1";
	$elements[3]->header="Name";
	$elements[3]->alias="name";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_media`.`icon`";
	$elements[4]->sort="1";
	$elements[4]->header="Icon";
	$elements[4]->alias="icon";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_media`.`json`";
	$elements[5]->sort="1";
	$elements[5]->header="Json";
	$elements[5]->alias="json";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_media`");
	$this->load->view("json",$data);
}

public function createmedia()
{
	$access=array("1");
	$this->checkaccess($access);
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["school"]=$this->school_model->getschooldropdown();
	$data["page"]="createmedia";
	$data["title"]="Create media";
	$this->load->view("template",$data);
}
public function createmediasubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("school","School","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("icon","Icon","trim");
	$this->form_validation->set_rules("date","Date","trim");
	$this->form_validation->set_rules("json","Json","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
				$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["page"]="createmedia";
			$data["title"]="Create media";
			$this->load->view("template",$data);
		}
			else
		{
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			$name=$this->input->get_post("name");
			$date=$this->input->get_post("date");
			$school=$this->input->get_post("school");
			//$icon=$this->input->get_post("icon");
			$json=$this->input->get_post("json");
				 //ICON
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="icon";
						$icon="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$icon=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$icon=$this->image_lib->dest_image;
								//return false;
							}

						}

			if($this->media_model->create($status,$order,$name,$icon,$json,$date,$school)==0)
			$data["alerterror"]="New media could not be created.";
			else
			$data["alertsuccess"]="media created Successfully.";
			$data["redirect"]="site/viewmedia";
			$this->load->view("redirect",$data);
		}
}
public function editmedia()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmedia";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["school"]=$this->school_model->getschooldropdown();
	$data["title"]="Edit media";
	$data["base_url"]=site_url("site/viewmediaitemjson?id=").$this->input->get('id');
	$data["before"]=$this->media_model->beforeedit($this->input->get("id"));
	print_r($data["before"]);
	$this->load->view("template",$data);
}
public function editmediasubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("icon","Icon","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("school","School","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmedia";
				$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Edit media";
			$data["before"]=$this->media_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			$name=$this->input->get_post("name");
			//$icon=$this->input->get_post("icon");
			$json=$this->input->get_post("json");
			$school=$this->input->get_post("school");
			$date=$this->input->get_post("date");
					//ICON

				   $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="icon";
						$icon="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$icon=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$icon=$this->image_lib->dest_image;
								//return false;
							}

						}

						if($icon=="")
						{
						$icon=$this->media_model->geticonbyid($id);
						   // print_r($image);
							$icon=$icon->icon;
						}
			if($this->media_model->edit($id,$status,$order,$name,$icon,$json,$school,$date)==0)
			$data["alerterror"]="New media could not be Updated.";
			else
			$data["alertsuccess"]="media Updated Successfully.";
			$data["redirect"]="site/viewmedia";
			$this->load->view("redirect",$data);
		}
}
public function deletemedia()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->media_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmedia";
	$this->load->view("redirect",$data);
}
public function viewmediaitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmediaitem";
	$data["base_url"]=site_url("site/viewmediaitemjson?id=".$this->input->get('id'));
	$data["title"]="View mediaitem";
	$this->load->view("template",$data);
}
function viewmediaitemjson()
{
	$id=$this->input->get('id');
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_mediaitem`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_mediaitem`.`title`";
	$elements[1]->sort="1";
	$elements[1]->header="Title";
	$elements[1]->alias="title";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_mediaitem`.`thumbnail`";
	$elements[2]->sort="1";
	$elements[2]->header="Thumbnail";
	$elements[2]->alias="thumbnail";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_mediaitem`.`type`";
	$elements[3]->sort="1";
	$elements[3]->header="Type";
	$elements[3]->alias="type";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_mediaitem`.`link`";
	$elements[4]->sort="1";
	$elements[4]->header="Link";
	$elements[4]->alias="link";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_mediaitem`.`order`";
	$elements[5]->sort="1";
	$elements[5]->header="Order";
	$elements[5]->alias="order";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_mediaitem`.`json`";
	$elements[6]->sort="1";
	$elements[6]->header="Json";
	$elements[6]->alias="json";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_media`.`name`";
	$elements[7]->sort="1";
	$elements[7]->header="Media";
	$elements[7]->alias="media";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_mediaitem`.`media`";
	$elements[8]->sort="1";
	$elements[8]->header="Mediaid";
	$elements[8]->alias="mediaid";
	$elements[9]=new stdClass();
	$elements[9]->field="`sfa_media`.`date`";
	$elements[9]->sort="1";
	$elements[9]->header="Mediadate";
	$elements[9]->alias="mediadate";
	$elements[10]=new stdClass();
	$elements[10]->field="`sfa_media`.`school`";
	$elements[10]->sort="1";
	$elements[10]->header="Mediaschool";
	$elements[10]->alias="mediaschool";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_mediaitem` LEFT OUTER JOIN `sfa_media` ON `sfa_media`.`id`=`sfa_mediaitem`.`media`","WHERE `sfa_mediaitem`.`media`='$id'");
	$this->load->view("json",$data);
}

public function createmediaitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createmediaitem";
	$data[ 'type' ] =$this->user_model->gettypedropdown();
	$data[ 'student' ] =$this->student_model->getstudentdropdown();
	$data[ 'media' ] =$this->media_model->getmediadropdown();
	$data["title"]="Create mediaitem";
	$this->load->view("template",$data);
}
public function createmediaitemsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("title","Title","trim");
	$this->form_validation->set_rules("thumbnail","Thumbnail","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("link","Link","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("media","Media","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createmediaitem";
			$data[ 'media' ] =$this->media_model->getmediadropdown();
			$data[ 'type' ] =$this->user_model->gettypedropdown();
			$data["title"]="Create mediaitem";
			$this->load->view("template",$data);
		}
			else
		{
			$title=$this->input->get_post("title");
			$thumbnail=$this->input->get_post("thumbnail");
			$type=$this->input->get_post("type");
			$link=$this->input->get_post("link");
			$order=$this->input->get_post("order");
			$json=$this->input->get_post("json");
			$media=$this->input->get_post("media");
			$student = $this->input->get_post("student");
                 $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="thumbnail";
			$thumbnail="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$thumbnail=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $thumbnail=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
			if($this->mediaitem_model->create($title,$thumbnail,$type,$link,$order,$json,$media,$student)==0)
			$data["alerterror"]="New mediaitem could not be created.";
			else
			$data["alertsuccess"]="mediaitem created Successfully.";
			$data["redirect"]="site/viewmediaitem?id=".$media;
			$this->load->view("redirect2",$data);
		}
}
public function editmediaitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmediaitem";
	$data[ 'media' ] =$this->media_model->getmediadropdown();
	$data[ 'type' ] =$this->user_model->gettypedropdown();
	$data[ 'student' ] =$this->student_model->getstudentdropdown();
     $data['selectedstudent']=$this->media_model->getmediastudent($this->input->get_post('id'));
	$data["title"]="Edit mediaitem";
	$data["before"]=$this->mediaitem_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editmediaitemsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("title","Title","trim");
	$this->form_validation->set_rules("thumbnail","Thumbnail","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("link","Link","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("media","Media","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmediaitem";
			$data[ 'media' ] =$this->media_model->getmediadropdown();
			$data[ 'type' ] =$this->user_model->gettypedropdown();
			$data["title"]="Edit mediaitem";
			$data["before"]=$this->mediaitem_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$title=$this->input->get_post("title");
			$thumbnail=$this->input->get_post("thumbnail");
			$type=$this->input->get_post("type");
			$link=$this->input->get_post("link");
			$order=$this->input->get_post("order");
			$json=$this->input->get_post("json");
			$media=$this->input->get_post("media");
                  $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="thumbnail";
			$thumbnail="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$thumbnail=$uploaddata['file_name'];
                
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $thumbnail=$this->image_lib->dest_image;
                    //return false;
                }
                
			}
            
            if($thumbnail=="")
            {
            $thumbnail=$this->user_model->getimagebyid($id);
               // print_r($thumbnail);
                $thumbnail=$thumbnail->thumbnail;
            }
			if($this->mediaitem_model->edit($id,$title,$thumbnail,$type,$link,$order,$json,$media)==0)
			$data["alerterror"]="New mediaitem could not be Updated.";
			else
			$data["alertsuccess"]="mediaitem Updated Successfully.";
			$data["redirect"]="site/viewmediaitem?id=".$media;
			$this->load->view("redirect2",$data);
		}
}
public function deletemediaitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->mediaitem_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmediaitem?id=".$this->input->get('mediaid');
	$this->load->view("redirect2",$data);
}
public function viewagegroups()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewagegroups";
	$data["base_url"]=site_url("site/viewagegroupsjson");
	$data["title"]="View agegroups";
	$this->load->view("template",$data);
}
function viewagegroupsjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_agegroups`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_agegroups`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`statuses`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Status";
	$elements[2]->alias="status";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_agegroups`.`order`";
	$elements[3]->sort="1";
	$elements[3]->header="Order";
	$elements[3]->alias="order";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_agegroups`.`json`";
	$elements[4]->sort="1";
	$elements[4]->header="Json";
	$elements[4]->alias="json";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_agegroups` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_agegroups`.`status`");
	$this->load->view("json",$data);
}

public function createagegroups()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createagegroups";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Create agegroups";
	$this->load->view("template",$data);
}
public function createagegroupssubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("json","Json","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createagegroups";
				$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Create agegroups";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			$json=$this->input->get_post("json");
			if($this->agegroups_model->create($name,$status,$order,$json)==0)
			$data["alerterror"]="New agegroups could not be created.";
			else
			$data["alertsuccess"]="agegroups created Successfully.";
			$data["redirect"]="site/viewagegroups";
			$this->load->view("redirect",$data);
		}
}
public function editagegroups()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editagegroups";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Edit agegroups";
	$data["before"]=$this->agegroups_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editagegroupssubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("json","Json","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editagegroups";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Edit agegroups";
			$data["before"]=$this->agegroups_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			$json=$this->input->get_post("json");
			if($this->agegroups_model->edit($id,$name,$status,$order,$json)==0)
			$data["alerterror"]="New agegroups could not be Updated.";
			else
			$data["alertsuccess"]="agegroups Updated Successfully.";
			$data["redirect"]="site/viewagegroups";
			$this->load->view("redirect",$data);
		}
}
public function deleteagegroups()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->agegroups_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewagegroups";
	$this->load->view("redirect",$data);
}
public function viewyear()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewyear";
	$data["base_url"]=site_url("site/viewyearjson");
	$data["title"]="View year";
	$this->load->view("template",$data);
}
function viewyearjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_year`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_year`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`statuses`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Status";
	$elements[2]->alias="status";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_year`.`order`";
	$elements[3]->sort="1";
	$elements[3]->header="Order";
	$elements[3]->alias="order";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_year` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_year`.`status`");
	$this->load->view("json",$data);
}

public function createyear()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createyear";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Create year";
	$this->load->view("template",$data);
}
public function createyearsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
			if($this->form_validation->run()==FALSE)
			{
			$data["alerterror"]=validation_errors();
			$data["page"]="createyear";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Create year";
			$this->load->view("template",$data);
			}
			else
			{
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			if($this->year_model->create($name,$status,$order)==0)
			$data["alerterror"]="New year could not be created.";
			else
			$data["alertsuccess"]="year created Successfully.";
			$data["redirect"]="site/viewyear";
			$this->load->view("redirect",$data);
			}
}
public function edityear()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="edityear";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Edit year";
	$data["before"]=$this->year_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function edityearsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="edityear";
			$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Edit year";
			$data["before"]=$this->year_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			if($this->year_model->edit($id,$name,$status,$order)==0)
			$data["alerterror"]="New year could not be Updated.";
			else
			$data["alertsuccess"]="year Updated Successfully.";
			$data["redirect"]="site/viewyear";
			$this->load->view("redirect",$data);
		}
}
public function deleteyear()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->year_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewyear";
	$this->load->view("redirect",$data);
}
public function viewsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewsports";
	$data["base_url"]=site_url("site/viewsportsjson");
	$data["title"]="View sports";
	$this->load->view("template",$data);
}
function viewsportsjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_sports`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_sports`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`statuses`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Status";
	$elements[2]->alias="status";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_sports`.`order`";
	$elements[3]->sort="1";
	$elements[3]->header="Order";
	$elements[3]->alias="order";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_sports`.`icon`";
	$elements[4]->sort="1";
	$elements[4]->header="Icon";
	$elements[4]->alias="icon";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_sports`.`json`";
	$elements[5]->sort="1";
	$elements[5]->header="Json";
	$elements[5]->alias="json";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_sports`.`about`";
	$elements[6]->sort="1";
	$elements[6]->header="About";
	$elements[6]->alias="about";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_sports`.`eligibility`";
	$elements[7]->sort="1";
	$elements[7]->header="Eligibility";
	$elements[7]->alias="eligibility";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_sports`.`rules`";
	$elements[8]->sort="1";
	$elements[8]->header="Rules";
	$elements[8]->alias="rules";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_sports` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_sports`.`status`");
	$this->load->view("json",$data);
}

public function createsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createsports";
	$data["title"]="Create sports";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$this->load->view("template",$data);
}
public function createsportssubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("icon","Icon","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("about","About","trim");
	$this->form_validation->set_rules("eligibility","Eligibility","trim");
	$this->form_validation->set_rules("rules","Rules","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createsports";
					$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Create sports";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			//$icon=$this->input->get_post("icon");
			$json=$this->input->get_post("json");
			$about=$this->input->get_post("about");
			$eligibility=$this->input->get_post("eligibility");
			$rules=$this->input->get_post("rules");

				 //ICON
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="icon";
						$icon="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$icon=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$icon=$this->image_lib->dest_image;
								//return false;
							}

						}


			if($this->sports_model->create($name,$status,$order,$icon,$json,$about,$eligibility,$rules)==0)
			$data["alerterror"]="New sports could not be created.";
			else
			$data["alertsuccess"]="sports created Successfully.";
			$data["redirect"]="site/viewsports";
			$this->load->view("redirect",$data);
		}
}
public function editsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editsports";
	$data["page2"]="block/sportsblock";
	$data[ 'status' ] =$this->user_model->getstatusdropdown();
	$data["title"]="Edit sports";
	$data["before"]=$this->sports_model->beforeedit($this->input->get("id"));
	$data["before1"]=$this->input->get("id");
	$this->load->view("templatewith2",$data);
}
public function editsportssubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("icon","Icon","trim");
	$this->form_validation->set_rules("json","Json","trim");
	$this->form_validation->set_rules("about","About","trim");
	$this->form_validation->set_rules("eligibility","Eligibility","trim");
	$this->form_validation->set_rules("rules","Rules","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editsports";
					$data[ 'status' ] =$this->user_model->getstatusdropdown();
			$data["title"]="Edit sports";
			$data["before"]=$this->sports_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$status=$this->input->get_post("status");
			$order=$this->input->get_post("order");
			//$icon=$this->input->get_post("icon");
			$json=$this->input->get_post("json");
			$about=$this->input->get_post("about");
			$eligibility=$this->input->get_post("eligibility");
			$rules=$this->input->get_post("rules");
				//ICON

				   $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="icon";
						$icon="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$icon=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$icon=$this->image_lib->dest_image;
//								echo $icon;
								//return false;
							}

						}

						if($icon=="")
						{
						$icon=$this->sports_model->geticonbyid($id);
						   // print_r($image);
							$icon=$icon->icon;
						}
			if($this->sports_model->edit($id,$name,$status,$order,$icon,$json,$about,$eligibility,$rules)==0)
			$data["alerterror"]="New sports could not be Updated.";
			else
			$data["alertsuccess"]="sports Updated Successfully.";
			$data["redirect"]="site/viewsports";
			$this->load->view("redirect",$data);
		}
}
public function deletesports()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->sports_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewsports";
	$this->load->view("redirect",$data);
}
public function viewsportscategory()
{
	$access=array("1");
	$this->checkaccess($access);
	$sportsid=$this->input->get("id");
	$data["page"]="viewsportscategory";
	$data["page2"]="block/sportsblock";
	$data['before1']=$this->input->get('id');
	$data['before']=$this->sports_model->beforeedit($sportsid);
	$data["base_url"]=site_url("site/viewsportscategoryjson?id=".$sportsid);
	$data["title"]="View sportscategory";
	$this->load->view("templatewith2",$data);
}
function viewsportscategoryjson()
{
	$sportsid=$this->input->get('id');
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_sportscategory`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_sports`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Sports";
	$elements[1]->alias="sports";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_sportscategory`.`title`";
	$elements[2]->sort="1";
	$elements[2]->header="Title";
	$elements[2]->alias="title";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_sportscategory`.`order`";
	$elements[3]->sort="1";
	$elements[3]->header="Order";
	$elements[3]->alias="order";
	$elements[4]=new stdClass();
	$elements[4]->field="`statuses`.`name`";
	$elements[4]->sort="1";
	$elements[4]->header="Status";
	$elements[4]->alias="status";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_sportscategory`.`type`";
	$elements[5]->sort="1";
	$elements[5]->header="Type";
	$elements[5]->alias="type";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_sportscategory`.`json`";
	$elements[6]->sort="1";
	$elements[6]->header="Json";
	$elements[6]->alias="json";
	
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_sportscategory`.`sports`";
	$elements[7]->sort="1";
	$elements[7]->header="Sportsid";
	$elements[7]->alias="sportsid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_sportscategory` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_sportscategory`.`status` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_sportscategory`.`sports`","WHERE `sfa_sportscategory`.`sports`='$sportsid'");
	$this->load->view("json",$data);
}

public function createsportscategory()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createsportscategory";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["type"]=$this->sports_model->getsportstypedropdown();
	$data["title"]="Create sportscategory";
	$this->load->view("template",$data);
}
public function createsportscategorysubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("title","Title","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("json","Json","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createsportscategory";
			$data["status"]=$this->user_model->getstatusdropdown();
			$data["sports"]=$this->sports_model->getsportsdropdown();
			$data["type"]=$this->sports_model->getsportstypedropdown();
			$data["title"]="Create sportscategory";
			$this->load->view("template",$data);
		}
			else
		{
			$sports=$this->input->get_post("sports");
			$title=$this->input->get_post("title");
			$order=$this->input->get_post("order");
			$status=$this->input->get_post("status");
			$type=$this->input->get_post("type");
			$json=$this->input->get_post("json");
			if($this->sportscategory_model->create($sports,$title,$order,$status,$type,$json)==0)
			$data["alerterror"]="New sportscategory could not be created.";
			else
			$data["alertsuccess"]="sportscategory created Successfully.";
			$data["redirect"]="site/viewsportscategory?id=".$sports;
			$this->load->view("redirect2",$data);
		}
}
public function editsportscategory()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editsportscategory";
	$data["page2"]="block/sportsblock";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["title"]="Edit sportscategory";
	$data["type"]=$this->sports_model->getsportstypedropdown();
	$data["before1"]=$this->input->get('sportsid');
	$data["before"]=$this->sportscategory_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editsportscategorysubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("title","Title","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("json","Json","trim");
if($this->form_validation->run()==FALSE)
{
	$data["alerterror"]=validation_errors();
	$data["page"]="editsportscategory";
	$data["type"]=$this->sports_model->getsportstypedropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["title"]="Edit sportscategory";
	$data["before"]=$this->sportscategory_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
else
{
	$id=$this->input->get_post("id");
	$sports=$this->input->get_post("sports");
	$title=$this->input->get_post("title");
	$order=$this->input->get_post("order");
	$status=$this->input->get_post("status");
	$type=$this->input->get_post("type");
	$json=$this->input->get_post("json");
	if($this->sportscategory_model->edit($id,$sports,$title,$order,$status,$type,$json)==0)
	$data["alerterror"]="New sportscategory could not be Updated.";
	else
	$data["alertsuccess"]="sportscategory Updated Successfully.";
	$data["redirect"]="site/viewsportscategory?id=".$sports;
	$this->load->view("redirect2",$data);
}
}
public function deletesportscategory()
{
	$access=array("1");
	$this->checkaccess($access);
	$data['sportsid']=$this->input->get('sportsid');
	$sportsid=$data['sportsid'];
	$this->sportscategory_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewsportscategory?id=".$sportsid;
	$this->load->view("redirect2",$data);
}
public function viewsportsgalleryitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewsportsgalleryitem";
	$sports=$this->input->get_post("sports");
	$sportscategory=$this->input->get_post("sportscategory");
	$year=$this->input->get_post("year");
	$data["base_url"]=site_url("site/viewsportsgalleryitemjson?sports=".$sports."&sportscategory=".$sportscategory."&year=".$year);
//	print_r($data["base_url"]);
	$data["title"]="View sportsgalleryitem";
	$this->load->view("template",$data);
}
function viewsportsgalleryitemjson()
{
	$sports=$this->input->get('sports');
	$sportscategory=$this->input->get('sportscategory');
	$year=$this->input->get('year');
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_sportsgalleryitem`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_sports`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Sports";
	$elements[1]->alias="sports";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_sportscategory`.`title`";
	$elements[2]->sort="1";
	$elements[2]->header="Sports Category";
	$elements[2]->alias="sportscategory";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_year`.`name`";
	$elements[3]->sort="1";
	$elements[3]->header="Year";
	$elements[3]->alias="year";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_sportsgalleryitem`.`type`";
	$elements[4]->sort="1";
	$elements[4]->header="Type";
	$elements[4]->alias="type";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_sportsgalleryitem`.`order`";
	$elements[5]->sort="1";
	$elements[5]->header="Order";
	$elements[5]->alias="order";
	$elements[6]=new stdClass();
	$elements[6]->field="`statuses`.`name`";
	$elements[6]->sort="1";
	$elements[6]->header="Status";
	$elements[6]->alias="status";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_sportsgalleryitem`.`image`";
	$elements[7]->sort="1";
	$elements[7]->header="Image";
	$elements[7]->alias="image";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_sportsgalleryitem`.`title`";
	$elements[8]->sort="1";
	$elements[8]->header="Title";
	$elements[8]->alias="title";
	$elements[9]=new stdClass();
	$elements[9]->field="`sfa_sportsgalleryitem`.`sports`";
	$elements[9]->sort="1";
	$elements[9]->header="Sportsid";
	$elements[9]->alias="sportsid";
	$elements[10]=new stdClass();
	$elements[10]->field="`sfa_sportsgalleryitem`.`sportscategory`";
	$elements[10]->sort="1";
	$elements[10]->header="Sportscategoryid";
	$elements[10]->alias="sportscategoryid";
	$elements[11]=new stdClass();
	$elements[11]->field="`sfa_sportsgalleryitem`.`year`";
	$elements[11]->sort="1";
	$elements[11]->header="Yearid";
	$elements[11]->alias="yearid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_sportsgalleryitem` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_sportsgalleryitem`.`sports` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_sportsgalleryitem`.`sportscategory` LEFT OUTER JOIN `sfa_year` ON `sfa_year`.`id`=`sfa_sportsgalleryitem`.`year` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_sportsgalleryitem`.`status`","WHERE `sfa_sportsgalleryitem`.`sports`='$sports' AND `sfa_sportsgalleryitem`.`sportscategory`='$sportscategory' AND `sfa_sportsgalleryitem`.`year`='$year'");
	$this->load->view("json",$data);
}
// TO SELECT GALLERY PARAMS
public function createsportsgalleryselect()
{
	$access=array("1");
	$this->checkaccess($access);	
	$data["page"]="createsportsgalleryselect";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["title"]="Create sportsgalleryselect";
	$this->load->view("template",$data);
	
}
		public function createsportsgalleryselectsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("sports","Sports","trim|required");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim|required");
	$this->form_validation->set_rules("year","Year","trim|required");
	if($this->form_validation->run()==FALSE){
	$data["alerterror"]=validation_errors();
	$data["page"]="createsportsgalleryselect";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["title"]="Create sportsgalleryselect";
	$this->load->view("template",$data);
	}
	else{
	$sports=$this->input->get_post("sports");
	$sportscategory=$this->input->get_post("sportscategory");
	$year=$this->input->get_post("year");
	if($this->sportsgalleryitem_model->check($sports,$sportscategory,$year)==0)
	$data["alerterror"]="New sportsgalleryitem could not be created.";
	else
	$data["alertsuccess"]="sportsgalleryitem created Successfully.";
	$data["redirect"]="site/viewsportsgalleryitem?sports=".$sports."&sportscategory=".$sportscategory."&year=".$year;
	$this->load->view("redirect2",$data);
	}
}
	//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@2
	public function createsportsgalleryitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createsportsgalleryitem";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["type"]=$this->user_model->gettypedropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["title"]="Create sportsgalleryitem";
	$this->load->view("template",$data);
}
public function createsportsgalleryitemsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("year","Year","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("title","Title","trim");
	if($this->form_validation->run()==FALSE)
{
	$data["alerterror"]=validation_errors();
	$data["page"]="createsportsgalleryitem";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["type"]=$this->user_model->gettypedropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["title"]="Create sportsgalleryitem";
	$this->load->view("template",$data);
}
else
{
	$sports=$this->input->get_post("sports");
	$sportscategory=$this->input->get_post("sportscategory");
	$year=$this->input->get_post("year");
	$type=$this->input->get_post("type");
	$order=$this->input->get_post("order");
	$status=$this->input->get_post("status");
	//$image=$this->input->get_post("image");
	$title=$this->input->get_post("title");
	$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				$filename="image";
				$image="";
				if (  $this->upload->do_upload($filename))
				{
					$uploaddata = $this->upload->data();
					$image=$uploaddata['file_name'];

					$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
					$config_r['maintain_ratio'] = TRUE;
					$config_t['create_thumb'] = FALSE;///add this
					$config_r['width']   = 800;
					$config_r['height'] = 800;
					$config_r['quality']    = 100;
					//end of configs

					$this->load->library('image_lib', $config_r); 
					$this->image_lib->initialize($config_r);
					if(!$this->image_lib->resize())
					{
						echo "Failed." . $this->image_lib->display_errors();
						//return false;
					}  
					else
					{
						//print_r($this->image_lib->dest_image);
						//dest_image
						$image=$this->image_lib->dest_image;
						//return false;
					}

				}
            
	if($this->sportsgalleryitem_model->create($sports,$sportscategory,$year,$type,$order,$status,$image,$title)==0)
	$data["alerterror"]="New sportsgalleryitem could not be created.";
	else
	$data["alertsuccess"]="sportsgalleryitem created Successfully.";
	$data["redirect"]="site/viewsportsgalleryitem?sports=".$sports."&sportscategory=".$sportscategory."&year=".$year;
	$this->load->view("redirect2",$data);
}
}


public function editsportsgalleryitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editsportsgalleryitem";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["type"]=$this->user_model->gettypedropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["title"]="Edit sportsgalleryitem";
	$data["before"]=$this->sportsgalleryitem_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editsportsgalleryitemsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("year","Year","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("title","Title","trim");
	if($this->form_validation->run()==FALSE)
	{
	$data["alerterror"]=validation_errors();
	$data["page"]="editsportsgalleryitem";
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["type"]=$this->user_model->gettypedropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["title"]="Edit sportsgalleryitem";
	$data["before"]=$this->sportsgalleryitem_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
	}
	else
	{
	$id=$this->input->get_post("id");
	$sports=$this->input->get_post("sports");
	$sportscategory=$this->input->get_post("sportscategory");
	$year=$this->input->get_post("year");
	$type=$this->input->get_post("type");
	$order=$this->input->get_post("order");
	$status=$this->input->get_post("status");
	//$image=$this->input->get_post("image");
	$title=$this->input->get_post("title");
		 $config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				$filename="image";
				$image="";
				if (  $this->upload->do_upload($filename))
				{
					$uploaddata = $this->upload->data();
					$image=$uploaddata['file_name'];

					$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
					$config_r['maintain_ratio'] = TRUE;
					$config_t['create_thumb'] = FALSE;///add this
					$config_r['width']   = 800;
					$config_r['height'] = 800;
					$config_r['quality']    = 100;
					//end of configs

					$this->load->library('image_lib', $config_r); 
					$this->image_lib->initialize($config_r);
					if(!$this->image_lib->resize())
					{
						echo "Failed." . $this->image_lib->display_errors();
						//return false;
					}  
					else
					{
						//print_r($this->image_lib->dest_image);
						//dest_image
						$image=$this->image_lib->dest_image;
						//return false;
					}

				}

				if($image=="")
				{
				$image=$this->sportsgalleryitem_model->getimagebyid($id);
				   // print_r($image);
					$image=$image->image;
				}

	if($this->sportsgalleryitem_model->edit($id,$sports,$sportscategory,$year,$type,$order,$status,$image,$title)==0)
	$data["alerterror"]="New sportsgalleryitem could not be Updated.";
	else
	$data["alertsuccess"]="sportsgalleryitem Updated Successfully.";
		$data["redirect"]="site/viewsportsgalleryitem?sports=".$sports."&sportscategory=".$sportscategory."&year=".$year;
	$this->load->view("redirect2",$data);
	}
}
public function deletesportsgalleryitem()
{
	$access=array("1");
	$this->checkaccess($access);
	$sports=$this->input->get('sports');
	$sportscategory=$this->input->get('sportscategory');
	$year=$this->input->get('year');
	$this->sportsgalleryitem_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewsportsgalleryitem?sports=".$sports."&sportscategory=".$sportscategory."&year=".$year;
	$this->load->view("redirect2",$data);
}
public function viewschool()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewschool";
	$data["base_url"]=site_url("site/viewschooljson");
	$data["title"]="View school";
	$this->load->view("template",$data);
}
function viewschooljson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="CONCAT('SFASC',LPAD(`sfa_school`.`id`,6,0))";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_school`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_school`.`email`";
	$elements[2]->sort="1";
	$elements[2]->header="Email";
	$elements[2]->alias="email";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_school`.`contact`";
	$elements[3]->sort="1";
	$elements[3]->header="Contact";
	$elements[3]->alias="contact";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_school`.`image`";
	$elements[4]->sort="1";
	$elements[4]->header="Image";
	$elements[4]->alias="image";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_school`.`location`";
	$elements[5]->sort="1";
	$elements[5]->header="Location";
	$elements[5]->alias="location";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_school`.`address`";
	$elements[6]->sort="1";
	$elements[6]->header="Address";
	$elements[6]->alias="address";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_school`.`biography`";
	$elements[7]->sort="1";
	$elements[7]->header="Biography";
	$elements[7]->alias="biography";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_school`.`id`";
	$elements[8]->sort="1";
	$elements[8]->header="schoolid";
	$elements[8]->alias="schoolid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_school`");
	$this->load->view("json",$data);
}

public function createschool()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createschool";
	$data["title"]="Create school";
	$this->load->view("template",$data);
}
public function createschoolsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("email","Email","trim");
	$this->form_validation->set_rules("contact","Contact","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("location","Location","trim");
	$this->form_validation->set_rules("address","Address","trim");
	$this->form_validation->set_rules("biography","Biography","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createschool";
			$data["title"]="Create school";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$email=$this->input->get_post("email");
			$contact=$this->input->get_post("contact");
			//$image=$this->input->get_post("image");
			$location=$this->input->get_post("location");
			$address=$this->input->get_post("address");
			$biography=$this->input->get_post("biography");
			$authority=$this->input->get_post("authority");
				$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}
			if($this->school_model->create($name,$email,$contact,$image,$location,$address,$biography,$authority)==0)
			$data["alerterror"]="New school could not be created.";
			else
			$data["alertsuccess"]="school created Successfully.";
			$data["redirect"]="site/viewschool";
			$this->load->view("redirect",$data);
		}
}
public function editschool()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editschool";
	$data["page2"]="block/studentsblock";
	$data["title"]="Edit school";
	$data["before1"]=$this->input->get("id");
	$data["before2"]=$this->input->get("id");
	$data["before"]=$this->school_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editschoolsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("email","Email","trim");
	$this->form_validation->set_rules("contact","Contact","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("location","Location","trim");
	$this->form_validation->set_rules("address","Address","trim");
	$this->form_validation->set_rules("biography","Biography","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editschool";
			$data["title"]="Edit school";
			$data["before"]=$this->school_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$email=$this->input->get_post("email");
			$contact=$this->input->get_post("contact");
			//$image=$this->input->get_post("image");
			$location=$this->input->get_post("location");
			$address=$this->input->get_post("address");
			$biography=$this->input->get_post("biography");
			$authority=$this->input->get_post("authority");
				   $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}

						if($image=="")
						{
						$image=$this->school_model->getimagebyid($id);
						   // print_r($image);
							$image=$image->image;
						}

			if($this->school_model->edit($id,$name,$email,$contact,$image,$location,$address,$biography,$authority)==0)
			$data["alerterror"]="New school could not be Updated.";
			else
			$data["alertsuccess"]="school Updated Successfully.";
			$data["redirect"]="site/viewschool";
			$this->load->view("redirect",$data);
		}
}
public function deleteschool()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->school_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewschool";
	$this->load->view("redirect",$data);
}
public function viewstudent()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewstudent";
	$data["page2"]="block/studentsblock";
	$data["base_url"]=site_url("site/viewstudentjson?id=").$this->input->get('id');
	$data["title"]="View student";
//	$data["before"]=$this->student_model->beforeedit($id);
	$data["before1"]=$this->input->get('id');
	$data["before2"]=$this->input->get('id');
	$this->load->view("templatewith2",$data);
}
function viewstudentjson()
{
	$id=$this->input->get('id');
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0))";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_student`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_school`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="School";
	$elements[2]->alias="school";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_student`.`email`";
	$elements[3]->sort="1";
	$elements[3]->header="Email";
	$elements[3]->alias="email";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_student`.`image`";
	$elements[4]->sort="1";
	$elements[4]->header="Image";
	$elements[4]->alias="image";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_student`.`location`";
	$elements[5]->sort="1";
	$elements[5]->header="Location";
	$elements[5]->alias="location";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_student`.`address`";
	$elements[6]->sort="1";
	$elements[6]->header="Address";
	$elements[6]->alias="address";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_student`.`content`";
	$elements[7]->sort="1";
	$elements[7]->header="Content";
	$elements[7]->alias="content";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_student`.`school`";
	$elements[8]->sort="1";
	$elements[8]->header="Schoolid";
	$elements[8]->alias="schoolid";
	$elements[9]=new stdClass();
	$elements[9]->field="`sfa_student`.`id`";
	$elements[9]->sort="1";
	$elements[9]->header="studentid";
	$elements[9]->alias="studentid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_student` LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`","WHERE `sfa_student`.`school`=".$id);
	$this->load->view("json",$data);
}

public function createstudent()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createstudent";
    $data["gender"]=$this->student_model->getgenderdropdown();
	$data["school"]=$this->school_model->getschooldropdown();
	$data["isparticipant"]=$this->student_model->getisparticipantdropdown();
    $data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
    $data["sports"]=$this->sports_model->getsportsdropdown();
    $data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["title"]="Create student";
	$this->load->view("template",$data);
}
public function createstudentsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("school","School","trim");
	$this->form_validation->set_rules("email","Email","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("location","Location","trim");
	$this->form_validation->set_rules("address","Address","trim");
	$this->form_validation->set_rules("content","Content","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createstudent";
            $data["gender"]=$this->student_model->getgenderdropdown();
            $data["sports"]=$this->sports_model->getsportsdropdown();
			$data["school"]=$this->school_model->getschooldropdown();
            $data["isparticipant"]=$this->student_model->getisparticipantdropdown();
            $data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
            $data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["title"]="Create student";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$school=$this->input->get_post("school");
			$email=$this->input->get_post("email");
			//$image=$this->input->get_post("image");
			$location=$this->input->get_post("location");
			$address=$this->input->get_post("address");
			$content=$this->input->get_post("content");
			$sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$agegroup=$this->input->get_post("agegroup");
			$gender=$this->input->get_post("gender");
			$isparticipant=$this->input->get_post("isparticipant");
			$age=$this->input->get_post("age");
			$phone=$this->input->get_post("phone");
			$emergencycontact=$this->input->get_post("emergencycontact");
			$dob=$this->input->get_post("dob");
				$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}
			if($this->student_model->create($name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob)==0)
			$data["alerterror"]="New student could not be created.";
			else
			$data["alertsuccess"]="student created Successfully.";
			$data["redirect"]="site/viewstudent?id=".$school;
			$this->load->view("redirect2",$data);
		}
}
public function editstudent()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editstudent";
	$data["page2"]="block/teamblock";
	$data["school"]=$this->school_model->getschooldropdown();
	$data["gender"]=$this->student_model->getgenderdropdown();
    $data["isparticipant"]=$this->student_model->getisparticipantdropdown();
    $data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
    $data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
     $data['selectedsport']=$this->sports_model->getsportbystudent($this->input->get_post('id'));
     $data['selectedagegroup']=$this->sports_model->getagegroupbystudent($this->input->get_post('id'));
     $data['selectedsportscategory']=$this->sports_model->getsportcategorybystudent($this->input->get_post('id'));
    $data["sports"]=$this->sports_model->getsportsdropdown();
	$data["title"]="Edit student";
	$data["before1"]=$this->input->get("id");
	$data["before2"]=$this->input->get("id");
	$data["before3"]=$this->input->get("id");
	$data["before4"]=$this->input->get("schoolid");
	$data["before"]=$this->student_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editstudentsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("school","School","trim");
	$this->form_validation->set_rules("email","Email","trim");
	$this->form_validation->set_rules("image","Image","trim");
	$this->form_validation->set_rules("location","Location","trim");
	$this->form_validation->set_rules("address","Address","trim");
	$this->form_validation->set_rules("content","Content","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editstudent";
			$data["title"]="Edit student";
            $data["gender"]=$this->student_model->getgenderdropdown();
			$data["school"]=$this->school_model->getschooldropdown();
            $data["isparticipant"]=$this->student_model->getisparticipantdropdown();
            $data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
            $data["sports"]=$this->sports_model->getsportsdropdown();
            $data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["before"]=$this->student_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$school=$this->input->get_post("school");
			$email=$this->input->get_post("email");
			//$image=$this->input->get_post("image");
			$location=$this->input->get_post("location");
			$address=$this->input->get_post("address");
			$content=$this->input->get_post("content");
            $sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$agegroup=$this->input->get_post("agegroup");
			$gender=$this->input->get_post("gender");
			$isparticipant=$this->input->get_post("isparticipant");
			$age=$this->input->get_post("age");
			$phone=$this->input->get_post("phone");
			$emergencycontact=$this->input->get_post("emergencycontact");
			$dob=$this->input->get_post("dob");
				 $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}

						if($image=="")
						{
						$image=$this->student_model->getimagebyid($id);
						   // print_r($image);
							$image=$image->image;
						}
			if($this->student_model->edit($id,$name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob)==0)
			$data["alerterror"]="New student could not be Updated.";
			else
			$data["alertsuccess"]="student Updated Successfully.";
			$data["redirect"]="site/viewstudent?id=".$school;
			$this->load->view("redirect2",$data);
		}
}
public function deletestudent()
{
	$access=array("1");
	$this->checkaccess($access);
	$data['schoolid']=$this->input->get('schoolid');
	$schoolid=$data['schoolid'];
	$this->student_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewstudent?id=".$schoolid;
	$this->load->view("redirect2",$data);
}
public function viewteam()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewteam";
	$data["before3"]=$this->input->get('id');
	$data["before1"]=$this->input->get('id');
	$data["before2"]=$this->input->get('schoolid');
	$data["before4"]=$this->input->get('schoolid');
	$data["page2"]="block/teamblock";
	$data["base_url"]=site_url("site/viewteamjson?id=").$this->input->get('id');
	$data["title"]="View team";
	$this->load->view("templatewith2",$data);
}
function viewteamjson()
{
	$id=$this->input->get('id');;
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="CONCAT('SFATE',LPAD(`sfa_team`.`id`,6,0))";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_sportscategory`.`title`";
	$elements[1]->sort="1";
	$elements[1]->header="Sports Category";
	$elements[1]->alias="sportscategory";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_agegroups`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Age group";
	$elements[2]->alias="agegroup";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_year`.`name`";
	$elements[3]->sort="1";
	$elements[3]->header="Year";
	$elements[3]->alias="year";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_team`.`title`";
	$elements[4]->sort="1";
	$elements[4]->header="Title";
	$elements[4]->alias="title";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_teamstudents`.`student`";
	$elements[5]->sort="1";
	$elements[5]->header="Studentid";
	$elements[5]->alias="studentid";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_student`.`school`";
	$elements[6]->sort="1";
	$elements[6]->header="Schoolid";
	$elements[6]->alias="schoolid";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_team`.`id`";
	$elements[7]->sort="1";
	$elements[7]->header="teamid";
	$elements[7]->alias="teamid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_team` LEFT OUTER JOIN `sfa_year` ON `sfa_year`.`id`=`sfa_team`.`year` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_team`.`agegroup` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_team`.`sportscategory` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_team`.`id` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_teamstudents`.`student`","WHERE `sfa_teamstudents`.`student`='$id' ");
	$this->load->view("json",$data);
}

public function createteam()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createteam";
	$data["title"]="Create team";
	$data["page2"]="block/teamblock";
	$data["before3"]=$this->input->get('id');
	$data["before1"]=$this->input->get('id');
	$data["before2"]=$this->input->get('schoolid');
	$data["before4"]=$this->input->get('schoolid');
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$this->load->view("templatewith2",$data);
}
public function createteamsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("year","Year","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createteam";
			$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["year"]=$this->year_model->getyeardropdown();
			$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
			$data["title"]="Create team";
			$this->load->view("template",$data);
		}
			else
		{
			$sportscategory=$this->input->get_post("sportscategory");
			$agegroup=$this->input->get_post("agegroup");
			$year=$this->input->get_post("year");
			$title=$this->input->get_post("title");
			$id=$this->input->get_post("id");
			$schoolid=$this->input->get("schoolid");
			if($this->team_model->create($sportscategory,$agegroup,$year,$title)==0)
			$data["alerterror"]="New team could not be created.";
			else
			$data["alertsuccess"]="team created Successfully.";
			$data["redirect"]="site/viewteam?id=".$id."&schoolid=".$schoolid;
			$this->load->view("redirect2",$data);
		}
}
public function editteam()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editteam";
	$data["page2"]="block/teamblock";
	$data["before3"]=$this->input->get('id');
	$data["before1"]=$this->input->get('studentid');
	$data["before2"]=$this->input->get('schoolid');
	$data["before4"]=$this->input->get('schoolid');
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["title"]="Edit team";
	$data["before"]=$this->team_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editteamsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("year","Year","trim");
		if($this->form_validation->run()==FALSE)
		{
		$data["alerterror"]=validation_errors();
		$data["page"]="editteam";
		$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
		$data["year"]=$this->year_model->getyeardropdown();
		$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
		$data["title"]="Edit team";
		$data["before"]=$this->team_model->beforeedit($this->input->get("id"));
		$this->load->view("template",$data);
		}
		else
		{
		$id=$this->input->get_post("id");
		$sportscategory=$this->input->get_post("sportscategory");
		$agegroup=$this->input->get_post("agegroup");
		$year=$this->input->get_post("year");
		$title=$this->input->get_post("title");
		$studentid=$this->input->get_post("studentid");
		$schoolid=$this->input->get_post("schoolid");
		if($this->team_model->edit($id,$sportscategory,$agegroup,$year,$title)==0)
		$data["alerterror"]="New team could not be Updated.";
		else
		$data["alertsuccess"]="team Updated Successfully.";
		$data["redirect"]="site/viewteam?id=".$studentid."&schoolid=".$schoolid;
		$this->load->view("redirect2",$data);
		}
}
public function deleteteam()
{
	$access=array("1");
	$this->checkaccess($access);
	$data['studentid']=$this->input->get('studentid');
	$studentid=$data['studentid'];
	$data['schoolid']=$this->input->get('schoolid');
	$schoolid=$data['schoolid'];
	$this->team_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewteam?id=".$studentid."&schoolid=".$schoolid;
	$this->load->view("redirect2",$data);
}
public function viewteamstudents()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewteamstudents";
	$data["base_url"]=site_url("site/viewteamstudentsjson");
	$data["title"]="View teamstudents";
	$this->load->view("template",$data);
}
function viewteamstudentsjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_teamstudents`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_team`.`title`";
	$elements[1]->sort="1";
	$elements[1]->header="Team";
	$elements[1]->alias="team";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_student`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Student";
	$elements[2]->alias="student";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_teamstudents` LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_teamstudents`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_teamstudents`.`student`");
	$this->load->view("json",$data);
}

public function createteamstudents()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createteamstudents";
	$data["team"]=$this->team_model->getteamdropdown();
	$data["student"]=$this->student_model->getstudentdropdown();
	$data["title"]="Create teamstudents";
	$this->load->view("template",$data);
}
public function createteamstudentssubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("team","team","trim");
	$this->form_validation->set_rules("student","Student","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createteamstudents";
			$data["team"]=$this->team_model->getteamdropdown();
			$data["student"]=$this->student_model->getstudentdropdown();
			$data["title"]="Create teamstudents";
			$this->load->view("template",$data);
		}
			else
		{
			$team=$this->input->get_post("team");
			$student=$this->input->get_post("student");
			if($this->teamstudents_model->create($team,$student)==0)
			$data["alerterror"]="New teamstudents could not be created.";
			else
			$data["alertsuccess"]="teamstudents created Successfully.";
			$data["redirect"]="site/viewteamstudents";
			$this->load->view("redirect",$data);
		}
}
public function editteamstudents()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editteamstudents";
	$data["title"]="Edit teamstudents";
	$data["team"]=$this->team_model->getteamdropdown();
	$data["student"]=$this->student_model->getstudentdropdown();
	$data["before"]=$this->teamstudents_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editteamstudentssubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("team","team","trim");
	$this->form_validation->set_rules("student","Student","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editteamstudents";
			$data["title"]="Edit teamstudents";
			$data["team"]=$this->team_model->getteamdropdown();
			$data["student"]=$this->student_model->getstudentdropdown();
			$data["before"]=$this->teamstudents_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$team=$this->input->get_post("team");
			$student=$this->input->get_post("student");
			if($this->teamstudents_model->edit($id,$team,$student)==0)
			$data["alerterror"]="New teamstudents could not be Updated.";
			else
			$data["alertsuccess"]="teamstudents Updated Successfully.";
			$data["redirect"]="site/viewteamstudents";
			$this->load->view("redirect",$data);
		}
}
public function deleteteamstudents()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->teamstudents_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewteamstudents";
	$this->load->view("redirect",$data);
}
public function viewround()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewround";
	$data["base_url"]=site_url("site/viewroundjson");
	$data["title"]="View round";
	$this->load->view("template",$data);
}
function viewroundjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_round`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_sports`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Sports";
	$elements[1]->alias="sports";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_sportscategory`.`title`";
	$elements[2]->sort="1";
	$elements[2]->header="Sports Category";
	$elements[2]->alias="sportscategory";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_year`.`name`";
	$elements[3]->sort="1";
	$elements[3]->header="Year";
	$elements[3]->alias="year";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_agegroups`.`name`";
	$elements[4]->sort="1";
	$elements[4]->header="Age group";
	$elements[4]->alias="agegroup";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_round`.`level`";
	$elements[5]->sort="1";
	$elements[5]->header="Name";
	$elements[5]->alias="level";
	$elements[6]=new stdClass();
	$elements[6]->field="`a`.`level`";
	$elements[6]->sort="1";
	$elements[6]->header="Parent";
	$elements[6]->alias="root";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_round` LEFT OUTER JOIN `sfa_round` as `a` ON `a`.`id`=`sfa_round`.`root` LEFT OUTER JOIN `sfa_year` ON `sfa_year`.`id`=`sfa_round`.`year` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_round`.`agegroup` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_round`.`sportcategory` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_round`.`sports`");
	$this->load->view("json",$data);
	
}

public function createround()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createround";
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["root"]=$this->round_model->getrounddropdown();
	$data["title"]="Create round";
	$this->load->view("template",$data);
}
public function createroundsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("year","Year","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("level","Level","trim");
	$this->form_validation->set_rules("root","root","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createround";
			$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["year"]=$this->year_model->getyeardropdown();
			$data["sports"]=$this->sports_model->getsportsdropdown();
			$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
			$data["root"]=$this->round_model->getrounddropdown();
			$data["title"]="Create round";
			$this->load->view("template",$data);
		}
			else
		{
			$sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$year=$this->input->get_post("year");
			$agegroup=$this->input->get_post("agegroup");
			$level=$this->input->get_post("level");
			$root=$this->input->get_post("root");
			if($this->round_model->create($sports,$sportscategory,$year,$agegroup,$level,$root)==0)
			$data["alerterror"]="New round could not be created.";
			else
			$data["alertsuccess"]="round created Successfully.";
			$data["redirect"]="site/viewround";
			$this->load->view("redirect",$data);
		}
}
public function editround()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editround";
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["root"]=$this->round_model->getrounddropdown();
	$data["title"]="Edit round";
	$data["before"]=$this->round_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editroundsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("year","Year","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("level","Level","trim");
	$this->form_validation->set_rules("root","root","trim");
				if($this->form_validation->run()==FALSE)
			{
				$data["alerterror"]=validation_errors();
				$data["page"]="editround";
				$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
				$data["year"]=$this->year_model->getyeardropdown();
				$data["sports"]=$this->sports_model->getsportsdropdown();
				$data["root"]=$this->round_model->getrounddropdown();
				$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
				$data["title"]="Edit round";
				$data["before"]=$this->round_model->beforeedit($this->input->get("id"));
				$this->load->view("template",$data);
			}
				else
			{
				$id=$this->input->get_post("id");
				$sports=$this->input->get_post("sports");
				$sportscategory=$this->input->get_post("sportscategory");
				$year=$this->input->get_post("year");
				$agegroup=$this->input->get_post("agegroup");
				$level=$this->input->get_post("level");
				$root=$this->input->get_post("root");
				if($this->round_model->edit($id,$sports,$sportscategory,$year,$agegroup,$level,$root)==0)
				$data["alerterror"]="New round could not be Updated.";
				else
				$data["alertsuccess"]="round Updated Successfully.";
				$data["redirect"]="site/viewround";
				$this->load->view("redirect",$data);
			}
}
public function deleteround()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->round_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewround";
	$this->load->view("redirect",$data);
}
public function viewmatch()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmatch";
	$data["base_url"]=site_url("site/viewmatchjson");
	$data["title"]="View match";
	$this->load->view("template",$data);
}
function viewmatchjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_match`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_sports`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Sports";
	$elements[1]->alias="sports";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_sportscategory`.`title`";
	$elements[2]->sort="1";
	$elements[2]->header="Sports Category";
	$elements[2]->alias="sportscategory";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_agegroups`.`name`";
	$elements[3]->sort="1";
	$elements[3]->header="Age group";
	$elements[3]->alias="agegroup";
	$elements[4]=new stdClass();
	$elements[4]->field="`statuses`.`name`";
	$elements[4]->sort="1";
	$elements[4]->header="Status";
	$elements[4]->alias="status";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_match`.`timestamp`";
	$elements[5]->sort="1";
	$elements[5]->header="Time stamp";
	$elements[5]->alias="timestamp";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_match`.`resulttimestamp`";
	$elements[6]->sort="1";
	$elements[6]->header="Result timestamp";
	$elements[6]->alias="resulttimestamp";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_match`.`matchresult`";
	$elements[7]->sort="1";
	$elements[7]->header="Match Result";
	$elements[7]->alias="matchresult";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_match`.`name`";
	$elements[8]->sort="1";
	$elements[8]->header="Name";
	$elements[8]->alias="name";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_match` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_match`.`agegroup` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_match`.`sportscategory` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports` LEFT OUTER JOIN `statuses` ON `statuses`.`id`=`sfa_match`.`status`");
	$this->load->view("json",$data);
}

public function creatematch()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="creatematch";
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["root"]=$this->round_model->getrounddropdown();
	$data["title"]="Create match";
	$this->load->view("template",$data);
}
public function creatematchsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("timestamp","Time stamp","trim");
	$this->form_validation->set_rules("resulttimestamp","Result timestamp","trim");
	$this->form_validation->set_rules("matchresult","Match Result","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="creatematch";
			$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["sports"]=$this->sports_model->getsportsdropdown();
			$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
			$data["year"]=$this->year_model->getyeardropdown();
			$data["root"]=$this->round_model->getrounddropdown();
			$data["status"]=$this->user_model->getstatusdropdown();
			$data["title"]="Create match";
			$this->load->view("template",$data);
		}
			else
		{
			$sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$agegroup=$this->input->get_post("agegroup");
			$status=$this->input->get_post("status");
			$name=$this->input->get_post("name");
			//$timestamp=$this->input->get_post("timestamp");
			$resulttimestamp=$this->input->get_post("resulttimestamp");
			$matchresult=$this->input->get_post("matchresult");
			if($this->match_model->create($sports,$sportscategory,$agegroup,$status,$resulttimestamp,$matchresult,$name)==0)
			$data["alerterror"]="New match could not be created.";
			else
			$data["alertsuccess"]="match created Successfully.";
			$data["redirect"]="site/viewmatch";
			$this->load->view("redirect",$data);
		}
}
public function editmatch()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmatch";
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["root"]=$this->round_model->getrounddropdown();
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["title"]="Edit match";
	$data["before"]=$this->match_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editmatchsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("status","Status","trim");
	$this->form_validation->set_rules("timestamp","Time stamp","trim");
	$this->form_validation->set_rules("resulttimestamp","Result timestamp","trim");
	$this->form_validation->set_rules("matchresult","Match Result","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmatch";
			$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["sports"]=$this->sports_model->getsportsdropdown();
			$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
			$data["year"]=$this->year_model->getyeardropdown();
			$data["root"]=$this->round_model->getrounddropdown();
			$data["status"]=$this->user_model->getstatusdropdown();
			$data["title"]="Edit match";
			$data["before"]=$this->match_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$agegroup=$this->input->get_post("agegroup");
			$status=$this->input->get_post("status");
			$name=$this->input->get_post("name");
			$timestamp=$this->input->get_post("timestamp");
			$resulttimestamp=$this->input->get_post("resulttimestamp");
			$matchresult=$this->input->get_post("matchresult");
			if($this->match_model->edit($id,$sports,$sportscategory,$agegroup,$status,$timestamp,$resulttimestamp,$matchresult,$name)==0)
			$data["alerterror"]="New match could not be Updated.";
			else
			$data["alertsuccess"]="match Updated Successfully.";
			$data["redirect"]="site/viewmatch";
			$this->load->view("redirect",$data);
		}
}
public function deletematch()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->match_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmatch";
	$this->load->view("redirect",$data);
}
public function viewmatchplayed()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmatchplayed";
	$data["base_url"]=site_url("site/viewmatchplayedjson");
	$data["title"]="View matchplayed";
	$this->load->view("template",$data);
}
function viewmatchplayedjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_matchplayed`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_match`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Match";
	$elements[1]->alias="match";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_matchplayed`.`type`";
	$elements[2]->sort="1";
	$elements[2]->header="Type";
	$elements[2]->alias="type";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_matchplayed`.`order`";
	$elements[3]->sort="1";
	$elements[3]->header="Order";
	$elements[3]->alias="order";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_team`.`title`";
	$elements[4]->sort="1";
	$elements[4]->header="team";
	$elements[4]->alias="team";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_student`.`name`";
	$elements[5]->sort="1";
	$elements[5]->header="Student";
	$elements[5]->alias="student";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_matchplayed`.`result`";
	$elements[6]->sort="1";
	$elements[6]->header="Result";
	$elements[6]->alias="result";
	$elements[7]=new stdClass();
	$elements[7]->field="`sfa_round`.`level`";
	$elements[7]->sort="1";
	$elements[7]->header="Round";
	$elements[7]->alias="round";
	$elements[8]=new stdClass();
	$elements[8]->field="`sfa_matchplayed`.`reason`";
	$elements[8]->sort="1";
	$elements[8]->header="Reason";
	$elements[8]->alias="reason";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_matchplayed` LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_matchplayed`.`student` LEFT OUTER JOIN `sfa_match` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_round` ON `sfa_round`.`id`=`sfa_matchplayed`.`round`");
	$this->load->view("json",$data);
}

public function creatematchplayed()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="creatematchplayed";
	$data["team"]=$this->team_model->getteamdropdown();
	$data["student"]=$this->student_model->getstudentdropdown();
	$data["round"]=$this->round_model->getrounddropdown();
	$data["type"]=$this->matchplayed_model->gettypedropdown();
	$data["result"]=$this->matchplayed_model->getresultdropdown();
	$data["match"]=$this->match_model->getmatchdropdown();
	$data["match"]=$this->match_model->getmatchdropdown();
	$data["title"]="Create matchplayed";
	$this->load->view("template",$data);
}
public function creatematchplayedsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("match","Match","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("team","team","trim");
	$this->form_validation->set_rules("student","Student","trim");
	$this->form_validation->set_rules("result","Result","trim");
	$this->form_validation->set_rules("round","Round","trim");
	$this->form_validation->set_rules("reason","Reason","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="creatematchplayed";
			$data["title"]="Create matchplayed";
			$data["team"]=$this->team_model->getteamdropdown();
			$data["student"]=$this->student_model->getstudentdropdown();
			$data["round"]=$this->round_model->getrounddropdown();
			$data["type"]=$this->matchplayed_model->gettypedropdown();
			$data["result"]=$this->matchplayed_model->getresultdropdown();
			$data["match"]=$this->match_model->getmatchdropdown();
			$this->load->view("template",$data);
		}
			else
		{
			$match=$this->input->get_post("match");
			$type=$this->input->get_post("type");
			$order=$this->input->get_post("order");
			$team=$this->input->get_post("team");
			$student=$this->input->get_post("student");
			$result=$this->input->get_post("result");
			$round=$this->input->get_post("round");
			$reason=$this->input->get_post("reason");
			if($this->matchplayed_model->create($match,$type,$order,$team,$student,$result,$round,$reason)==0)
			$data["alerterror"]="New matchplayed could not be created.";
			else
			$data["alertsuccess"]="matchplayed created Successfully.";
			$data["redirect"]="site/viewmatchplayed";
			$this->load->view("redirect",$data);
		}
}
public function editmatchplayed()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmatchplayed";
	$data["title"]="Edit matchplayed";
	$data["team"]=$this->team_model->getteamdropdown();
	$data["student"]=$this->student_model->getstudentdropdown();
	$data["round"]=$this->round_model->getrounddropdown();
	$data["type"]=$this->matchplayed_model->gettypedropdown();
	$data["result"]=$this->matchplayed_model->getresultdropdown();
	$data["match"]=$this->match_model->getmatchdropdown();
	$data["before"]=$this->matchplayed_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editmatchplayedsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("match","Match","trim");
	$this->form_validation->set_rules("type","Type","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("team","team","trim");
	$this->form_validation->set_rules("student","Student","trim");
	$this->form_validation->set_rules("result","Result","trim");
	$this->form_validation->set_rules("round","Round","trim");
	$this->form_validation->set_rules("reason","Reason","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmatchplayed";
			$data["team"]=$this->team_model->getteamdropdown();
			$data["student"]=$this->student_model->getstudentdropdown();
			$data["round"]=$this->round_model->getrounddropdown();
			$data["type"]=$this->matchplayed_model->gettypedropdown();
			$data["round"]=$this->matchplayed_model->getresultdropdown();
			$data["match"]=$this->match_model->getmatchdropdown();
			$data["title"]="Edit matchplayed";
			$data["before"]=$this->matchplayed_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$match=$this->input->get_post("match");
			$type=$this->input->get_post("type");
			$order=$this->input->get_post("order");
			$team=$this->input->get_post("team");
			$student=$this->input->get_post("student");
			$result=$this->input->get_post("result");
			$round=$this->input->get_post("round");
			$reason=$this->input->get_post("reason");
			if($this->matchplayed_model->edit($id,$match,$type,$order,$team,$student,$result,$round,$reason)==0)
			$data["alerterror"]="New matchplayed could not be Updated.";
			else
			$data["alertsuccess"]="matchplayed Updated Successfully.";
			$data["redirect"]="site/viewmatchplayed";
			$this->load->view("redirect",$data);
		}
}
public function deletematchplayed()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->matchplayed_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmatchplayed";
	$this->load->view("redirect",$data);
}
public function viewmedal()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmedal";
	$data["base_url"]=site_url("site/viewmedaljson");
	$data["title"]="View medal";
	$this->load->view("template",$data);
}
function viewmedaljson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_medal`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_medal`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_medal`.`order`";
	$elements[2]->sort="1";
	$elements[2]->header="Order";
	$elements[2]->alias="order";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_medal`.`image`";
	$elements[3]->sort="1";
	$elements[3]->header="Image";
	$elements[3]->alias="image";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_medal`");
	$this->load->view("json",$data);
}

public function createmedal()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createmedal";
	$data["title"]="Create medal";
	$this->load->view("template",$data);
}
public function createmedalsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("image","Image","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createmedal";
			$data["title"]="Create medal";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			$order=$this->input->get_post("order");
			//$image=$this->input->get_post("image");
				 $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}
			if($this->medal_model->create($name,$order,$image)==0)
			$data["alerterror"]="New medal could not be created.";
			else
			$data["alertsuccess"]="medal created Successfully.";
			$data["redirect"]="site/viewmedal";
			$this->load->view("redirect",$data);
		}
}
public function editmedal()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmedal";
	$data["title"]="Edit medal";
	$data["before"]=$this->medal_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editmedalsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
	$this->form_validation->set_rules("order","Order","trim");
	$this->form_validation->set_rules("image","Image","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmedal";
			$data["title"]="Edit medal";
			$data["before"]=$this->medal_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$name=$this->input->get_post("name");
			$order=$this->input->get_post("order");
			//$image=$this->input->get_post("image");
				  $config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$filename="image";
						$image="";
						if (  $this->upload->do_upload($filename))
						{
							$uploaddata = $this->upload->data();
							$image=$uploaddata['file_name'];

							$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
							$config_r['maintain_ratio'] = TRUE;
							$config_t['create_thumb'] = FALSE;///add this
							$config_r['width']   = 800;
							$config_r['height'] = 800;
							$config_r['quality']    = 100;
							//end of configs

							$this->load->library('image_lib', $config_r); 
							$this->image_lib->initialize($config_r);
							if(!$this->image_lib->resize())
							{
								echo "Failed." . $this->image_lib->display_errors();
								//return false;
							}  
							else
							{
								//print_r($this->image_lib->dest_image);
								//dest_image
								$image=$this->image_lib->dest_image;
								//return false;
							}

						}

						if($image=="")
						{
						$image=$this->medal_model->getimagebyid($id);
						   // print_r($image);
							$image=$image->image;
						}

			if($this->medal_model->edit($id,$name,$order,$image)==0)
			$data["alerterror"]="New medal could not be Updated.";
			else
			$data["alertsuccess"]="medal Updated Successfully.";
			$data["redirect"]="site/viewmedal";
			$this->load->view("redirect",$data);
		}
}
public function deletemedal()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->medal_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmedal";
	$this->load->view("redirect",$data);
}
public function viewmedalwon()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewmedalwon";
	$data["base_url"]=site_url("site/viewmedalwonjson");
	$data["title"]="View medalwon";
	$this->load->view("template",$data);
}
function viewmedalwonjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sfa_medalwon`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`sfa_medal`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Medal";
	$elements[1]->alias="medal";
	$elements[2]=new stdClass();
	$elements[2]->field="`sfa_sports`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Sports";
	$elements[2]->alias="sports";
	$elements[3]=new stdClass();
	$elements[3]->field="`sfa_sportscategory`.`title`";
	$elements[3]->sort="1";
	$elements[3]->header="Sports Category";
	$elements[3]->alias="sportscategory";
	$elements[4]=new stdClass();
	$elements[4]->field="`sfa_year`.`name`";
	$elements[4]->sort="1";
	$elements[4]->header="Year";
	$elements[4]->alias="year";
	$elements[5]=new stdClass();
	$elements[5]->field="`sfa_agegroups`.`name`";
	$elements[5]->sort="1";
	$elements[5]->header="Age group";
	$elements[5]->alias="agegroup";
	$elements[6]=new stdClass();
	$elements[6]->field="`sfa_medalwon`.`timestamp`";
	$elements[6]->sort="1";
	$elements[6]->header="Time stamp";
	$elements[6]->alias="timestamp";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_medalwon` LEFT OUTER JOIN `sfa_year` ON `sfa_year`.`id`=`sfa_medalwon`.`year` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_medalwon`.`agegroup` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_medalwon`.`sportscategory` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_medalwon`.`sports` LEFT OUTER JOIN `sfa_medal` ON `sfa_medal`.`id`=`sfa_medalwon`.`medal`");
	$this->load->view("json",$data);
}

public function createmedalwon()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createmedalwon";
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["medal"]=$this->medal_model->getmedaldropdown();
	$data["title"]="Create medalwon";
	$this->load->view("template",$data);
}
public function createmedalwonsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("medal","Medal","trim");
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("year","Year","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("timestamp","Time stamp","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createmedalwon";
			$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["sports"]=$this->sports_model->getsportsdropdown();
			$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
			$data["year"]=$this->year_model->getyeardropdown();
			$data["medal"]=$this->medal_model->getmedaldropdown();
			$data["title"]="Create medalwon";
			$this->load->view("template",$data);
		}
			else
		{
			$medal=$this->input->get_post("medal");
			$sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$year=$this->input->get_post("year");
			$agegroup=$this->input->get_post("agegroup");
			//$timestamp=$this->input->get_post("timestamp");
			if($this->medalwon_model->create($medal,$sports,$sportscategory,$year,$agegroup)==0)
			$data["alerterror"]="New medalwon could not be created.";
			else
			$data["alertsuccess"]="medalwon created Successfully.";
			$data["redirect"]="site/viewmedalwon";
			$this->load->view("redirect",$data);
		}
}
public function editmedalwon()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editmedalwon";
	$data["title"]="Edit medalwon";
	$data["medal"]=$this->medal_model->getmedaldropdown();
	$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
	$data["sports"]=$this->sports_model->getsportsdropdown();
	$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
	$data["year"]=$this->year_model->getyeardropdown();
	$data["before"]=$this->medalwon_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editmedalwonsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("medal","Medal","trim");
	$this->form_validation->set_rules("sports","Sports","trim");
	$this->form_validation->set_rules("sportscategory","Sports Category","trim");
	$this->form_validation->set_rules("year","Year","trim");
	$this->form_validation->set_rules("agegroup","Age group","trim");
	$this->form_validation->set_rules("timestamp","Time stamp","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="editmedalwon";
			$data["title"]="Edit medalwon";
			$data["sportscategory"]=$this->sportscategory_model->getsportscategorydropdown();
			$data["sports"]=$this->sports_model->getsportsdropdown();
			$data["agegroup"]=$this->agegroups_model->getagegroupsdropdown();
			$data["year"]=$this->year_model->getyeardropdown();
			$data["medal"]=$this->medal_model->getmedaldropdown();
			$data["before"]=$this->medalwon_model->beforeedit($this->input->get("id"));
			$this->load->view("template",$data);
		}
			else
		{
			$id=$this->input->get_post("id");
			$medal=$this->input->get_post("medal");
			$sports=$this->input->get_post("sports");
			$sportscategory=$this->input->get_post("sportscategory");
			$year=$this->input->get_post("year");
			$agegroup=$this->input->get_post("agegroup");
			$timestamp=$this->input->get_post("timestamp");
			if($this->medalwon_model->edit($id,$medal,$sports,$sportscategory,$year,$agegroup,$timestamp)==0)
			$data["alerterror"]="New medalwon could not be Updated.";
			else
			$data["alertsuccess"]="medalwon Updated Successfully.";
			$data["redirect"]="site/viewmedalwon";
			$this->load->view("redirect",$data);
		}
}
public function deletemedalwon()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->medalwon_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewmedalwon";
	$this->load->view("redirect",$data);
}
    
    // registration sports
    
  public function viewregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewregistrationsports";
	$data["base_url"]=site_url("site/viewregistrationsportsjson");
	$data["title"]="View registrationsports";
	$this->load->view("template",$data);
}
function viewregistrationsportsjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`registrationsports`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`registrationsports`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
	
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `registrationsports`");
	$this->load->view("json",$data);
}

public function createregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createregistrationsports";
	$data["title"]="Create registrationsports";
	$this->load->view("template",$data);
}
public function createregistrationsportssubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("name","Name","trim");
			if($this->form_validation->run()==FALSE)
		{
			$data["alerterror"]=validation_errors();
			$data["page"]="createregistrationsports";
			$data["title"]="Create registrationsports";
			$this->load->view("template",$data);
		}
			else
		{
			$name=$this->input->get_post("name");
			if($this->registrationsports_model->create($name)==0)
			$data["alerterror"]="New registrationsports could not be created.";
			else
			$data["alertsuccess"]="registrationsports created Successfully.";
			$data["redirect"]="site/viewregistrationsports";
			$this->load->view("redirect",$data);
		}
}
public function editregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editregistrationsports";
	$data["title"]="Edit registrationsports";
	$data["before"]=$this->registrationsports_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editregistrationsportssubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->form_validation->set_rules("id","ID","trim");
	$this->form_validation->set_rules("name","Name","trim");
		if($this->form_validation->run()==FALSE)
	{
		$data["alerterror"]=validation_errors();
		$data["page"]="editregistrationsports";
		$data["title"]="Edit registrationsports";
		$data["before"]=$this->registrationsports_model->beforeedit($this->input->get("id"));
		$this->load->view("template",$data);
	}
		else
	{
		$id=$this->input->get_post("id");
		$name=$this->input->get_post("name");
		if($this->registrationsports_model->edit($id,$name)==0)
		$data["alerterror"]="New registrationsports could not be Updated.";
		else
		$data["alertsuccess"]="registrationsports Updated Successfully.";
		$data["redirect"]="site/viewregistrationsports";
		$this->load->view("redirect",$data);
	}
}
public function deleteregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->registrationsports_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewregistrationsports";
	$this->load->view("redirect",$data);
}   
    
    
    // registration sports end
    
    //sponsor
    
    
    public function viewsponsor()
{
        $access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewsponsor";
	$data["base_url"]=site_url("site/viewsponsorjson");
	$data["title"]="View sponsor";
	$this->load->view("template",$data);
}
function viewsponsorjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`sponsor`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
    
	$elements[1]=new stdClass();
	$elements[1]->field="`sponsor`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Name";
	$elements[1]->alias="name";
    
	$elements[2]=new stdClass();
	$elements[2]->field="`sponsor`.`order`";
	$elements[2]->sort="1";
	$elements[2]->header="Order";
	$elements[2]->alias="order";
    
	$elements[3]=new stdClass();
	$elements[3]->field="`sponsor`.`status`";
	$elements[3]->sort="1";
	$elements[3]->header="Status";
	$elements[3]->alias="status";
    
	$elements[4]=new stdClass();
	$elements[4]->field="`sponsor`.`image`";
	$elements[4]->sort="1";
	$elements[4]->header="Image";
	$elements[4]->alias="image";
	
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sponsor`");
	$this->load->view("json",$data);
}
	public function createsponsor()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="createsponsor";
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["title"]="Create sponsor";
	$this->load->view("template",$data);
}
public function createsponsorsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
	$name=$this->input->get_post("name");
	$description=$this->input->get_post("description");
	$order=$this->input->get_post("order");
	$status=$this->input->get_post("status");
	//$image=$this->input->get_post("image");
	$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				$filename="image";
				$image="";
				if (  $this->upload->do_upload($filename))
				{
					$uploaddata = $this->upload->data();
					$image=$uploaddata['file_name'];

					$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
					$config_r['maintain_ratio'] = TRUE;
					$config_t['create_thumb'] = FALSE;///add this
					$config_r['width']   = 800;
					$config_r['height'] = 800;
					$config_r['quality']    = 100;
					//end of configs

					$this->load->library('image_lib', $config_r); 
					$this->image_lib->initialize($config_r);
					if(!$this->image_lib->resize())
					{
						echo "Failed." . $this->image_lib->display_errors();
						//return false;
					}  
					else
					{
						//print_r($this->image_lib->dest_image);
						//dest_image
						$image=$this->image_lib->dest_image;
						//return false;
					}

				}
            
	if($this->sponsor_model->create($name,$description,$order,$status,$image)==0)
	$data["alerterror"]="New sponsor could not be created.";
	else
	$data["alertsuccess"]="sponsor created Successfully.";
	$data["redirect"]="site/viewsponsor";
	$this->load->view("redirect",$data);

}


public function editsponsor()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editsponsor";
	$data["status"]=$this->user_model->getstatusdropdown();
	$data["title"]="Edit sponsor";
	$data["before"]=$this->sponsor_model->beforeedit($this->input->get("id"));
	$this->load->view("template",$data);
}
public function editsponsorsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
	
	$id=$this->input->get_post("id");
	$name=$this->input->get_post("name");
	$description=$this->input->get_post("description");
	$order=$this->input->get_post("order");
	$status=$this->input->get_post("status");
	//$image=$this->input->get_post("image");
	$title=$this->input->get_post("title");
		 $config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				$filename="image";
				$image="";
				if (  $this->upload->do_upload($filename))
				{
					$uploaddata = $this->upload->data();
					$image=$uploaddata['file_name'];

					$config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
					$config_r['maintain_ratio'] = TRUE;
					$config_t['create_thumb'] = FALSE;///add this
					$config_r['width']   = 800;
					$config_r['height'] = 800;
					$config_r['quality']    = 100;
					//end of configs

					$this->load->library('image_lib', $config_r); 
					$this->image_lib->initialize($config_r);
					if(!$this->image_lib->resize())
					{
						echo "Failed." . $this->image_lib->display_errors();
						//return false;
					}  
					else
					{
						//print_r($this->image_lib->dest_image);
						//dest_image
						$image=$this->image_lib->dest_image;
						//return false;
					}

				}

				if($image=="")
				{
				$image=$this->sponsor_model->getimagebyid($id);
				   // print_r($image);
					$image=$image->image;
				}

	if($this->sponsor_model->edit($id,$name,$description,$order,$status,$image)==0)
	$data["alerterror"]="New sponsor could not be Updated.";
	else
	$data["alertsuccess"]="sponsor Updated Successfully.";
		$data["redirect"]="site/viewsponsor";
	$this->load->view("redirect",$data);
	
}
public function deletesponsor()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->sponsor_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewsponsor";
	$this->load->view("redirect",$data);
}
    
    // school registration sports starts
    
    
    public function viewschoolregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewschoolregistrationsports";
	$data["page2"]="block/registerblock";
	$data["before1"]=$this->input->get('id');
        $data['schoolregistration']=$this->schoolregistration_model->getschoolregisterdropdown();
        $data['registrationsports']=$this->schoolregistration_model->getregistrationsportsdropdown();
	$data["base_url"]=site_url("site/viewschoolregistrationsportsjson");
	$data["title"]="View schoolregistrationsports";
	$this->load->view("templatewith2",$data);
}
function viewschoolregistrationsportsjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`schoolregistrationsports`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`schoolregistration`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="Schoolregistration";
	$elements[1]->alias="schoolregistration";
	$elements[2]=new stdClass();
	$elements[2]->field="`registrationsports`.`name`";
	$elements[2]->sort="1";
	$elements[2]->header="Registration Sports";
	$elements[2]->alias="registrationsports";	
    
    $elements[3]=new stdClass();
	$elements[3]->field="`schoolregistrationsports`.`schoolregistration`";
	$elements[3]->sort="1";
	$elements[3]->header="registerid";
	$elements[3]->alias="registerid";
	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `schoolregistrationsports` LEFT OUTER JOIN `schoolregistration` ON `schoolregistration`.`id`=`schoolregistrationsports`.`schoolregistration` LEFT OUTER JOIN `registrationsports` ON `registrationsports`.`id`=`schoolregistrationsports`.`registrationsports`");
	$this->load->view("json",$data);
}

public function createschoolregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
    $data["page2"]="block/registerblock";
	$data["before1"]=$this->input->get('id');
      $data['schoolregistration']=$this->schoolregistration_model->getschoolregisterdropdown();
        $data['registrationsports']=$this->schoolregistration_model->getregistrationsportsdropdown();
	$data["page"]="createschoolregistrationsports";
	$data["title"]="Create schoolregistrationsports";
	$this->load->view("templatewith2",$data);
}
public function createschoolregistrationsportssubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
			$schoolregistration=$this->input->get_post("schoolregistration");
			$registrationsports=$this->input->get_post("registrationsports");
    if($this->schoolregistrationsports_model->create($schoolregistration,$registrationsports)==0)
    $data["alerterror"]="New schoolregistrationsports could not be created.";
    else
    $data["alertsuccess"]="schoolregistrationsports created Successfully.";
    $data["redirect"]="site/viewschoolregistrationsports?id=".$schoolregistration;
    $this->load->view("redirect",$data);
		
}
public function editschoolregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editschoolregistrationsports";
     $data["page2"]="block/registerblock";
	$data["before1"]=$this->input->get('registerid');
	$data["title"]="Edit schoolregistrationsports";
  $data['schoolregistration']=$this->schoolregistration_model->getschoolregisterdropdown();
        $data['registrationsports']=$this->schoolregistration_model->getregistrationsportsdropdown();
	$data["before"]=$this->schoolregistrationsports_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editschoolregistrationsportssubmit()
{
	$access=array("1");
	$this->checkaccess($access);
			$id=$this->input->get_post("id");
			$schoolregistration=$this->input->get_post("schoolregistration");
			$registrationsports=$this->input->get_post("registrationsports");
			if($this->schoolregistrationsports_model->edit($id,$schoolregistration,$registrationsports)==0)
			$data["alerterror"]="New schoolregistrationsports could not be Updated.";
			else
			$data["alertsuccess"]="schoolregistrationsports Updated Successfully.";
			$data["redirect"]="site/viewschoolregistrationsports?id=".$schoolregistration;
			$this->load->view("redirect2",$data);
		
}
public function deleteschoolregistrationsports()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->schoolregistrationsports_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewschoolregistrationsports?id=".$this->input->get('registerid');
	$this->load->view("redirect2",$data);
}
    
    // SCHool registration form
    
    
    public function viewschoolregistration()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewschoolregistration";
	$data["base_url"]=site_url("site/viewschoolregistrationjson");
	$data["title"]="View schoolregistration";
	$this->load->view("template",$data);
}
function viewschoolregistrationjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`schoolregistration`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`schoolregistration`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`schoolregistration`.`email`";
	$elements[2]->sort="1";
	$elements[2]->header="email";
	$elements[2]->alias="email";
	$elements[3]=new stdClass();
	$elements[3]->field="`schoolregistration`.`mobile`";
	$elements[3]->sort="1";
	$elements[3]->header="mobile";
	$elements[3]->alias="mobile";
	$elements[4]=new stdClass();
	$elements[4]->field="`schoolregistration`.`landline`";
	$elements[4]->sort="1";
	$elements[4]->header="landline";
	$elements[4]->alias="landline";
	$elements[5]=new stdClass();
	$elements[5]->field="`schoolregistration`.`timestamp`";
	$elements[5]->sort="1";
	$elements[5]->header="Time stamp";
	$elements[5]->alias="timestamp";

	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `schoolregistration`");
	$this->load->view("json",$data);
}

public function createschoolregistration()
{
	$access=array("1");
	$this->checkaccess($access);
    $data["type"]=$this->schoolregistration_model->getschooltypedropdown();
	$data["page"]="createschoolregistration";
	$data["title"]="Create schoolregistration";
	$this->load->view("template",$data);
}
public function createschoolregistrationsubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
			$name=$this->input->get_post("name");
			$address=$this->input->get_post("address");
			$establishdate=$this->input->get_post("establishdate");
			$contactperson=$this->input->get_post("contactperson");
			$type=$this->input->get_post("type");
			$email=$this->input->get_post("email");
			$mobile=$this->input->get_post("mobile");
			$landline=$this->input->get_post("landline");
//			$timestamp=$this->input->get_post("timestamp");
			if($this->schoolregistration_model->create($name,$address,$establishdate,$contactperson,$type,$email,$mobile,$landline)==0)
			$data["alerterror"]="New schoolregistration could not be created.";
			else
			$data["alertsuccess"]="schoolregistration created Successfully.";
			$data["redirect"]="site/viewschoolregistration";
			$this->load->view("redirect",$data);
		
}
public function editschoolregistration()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editschoolregistration";
	$data["page2"]="block/registerblock";
	$data["title"]="Edit schoolregistration";
	$data["type"]=$this->schoolregistration_model->getschooltypedropdown();
	$data["before1"]=$this->input->get('id');
	$data["before"]=$this->schoolregistration_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editschoolregistrationsubmit()
{
	$access=array("1");
	$this->checkaccess($access);
			$id=$this->input->get_post("id");	
            $name=$this->input->get_post("name");
			$address=$this->input->get_post("address");
			$establishdate=$this->input->get_post("establishdate");
			$contactperson=$this->input->get_post("contactperson");
			$type=$this->input->get_post("type");
			$email=$this->input->get_post("email");
			$mobile=$this->input->get_post("mobile");
			$landline=$this->input->get_post("landline");
			$timestamp=$this->input->get_post("timestamp");
			if($this->schoolregistration_model->edit($id,$name,$address,$establishdate,$contactperson,$type,$email,$mobile,$landline,$timestamp)==0)
			$data["alerterror"]="New schoolregistration could not be Updated.";
			else
			$data["alertsuccess"]="schoolregistration Updated Successfully.";
			$data["redirect"]="site/viewschoolregistration";
			$this->load->view("redirect",$data);
		
}
public function deleteschoolregistration()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->schoolregistration_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewschoolregistration";
	$this->load->view("redirect",$data);
}
    
    
    //CSV FOR SCHOOL
    
     function uploadschoolcsv()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'page' ] = 'uploadschoolcsv';
		$data[ 'title' ] = 'Upload school';
		$this->load->view( 'template', $data );
	} 
    
    function uploadschoolcsvsubmit()
	{
        $access = array("1");
		$this->checkaccess($access);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $filename="file";
        $file="";
        if (  $this->upload->do_upload($filename))
        {
            $uploaddata = $this->upload->data();
            $file=$uploaddata['file_name'];
            $filepath=$uploaddata['file_path'];
        }
        $fullfilepath=$filepath."".$file;
        $file = $this->csvreader->parse_file($fullfilepath);
        $id1=$this->school_model->createbycsv($file);
//        echo $id1;
        
        if($id1==0)
        $data['alerterror']="New school could not be Uploaded.";
		else
		$data['alertsuccess']="school Uploaded Successfully.";
        
        $data['redirect']="site/viewschool";
        $this->load->view("redirect",$data);
    }
    
    //CSV FOR STUDENT
    
     function uploadstudentcsv()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'page' ] = 'uploadstudentcsv';
		$data[ 'title' ] = 'Upload student';
		$this->load->view( 'template', $data );
	} 
    
    function uploadstudentcsvsubmit()
	{
        $access = array("1");
		$this->checkaccess($access);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $filename="file";
        $file="";
        if (  $this->upload->do_upload($filename))
        {
            $uploaddata = $this->upload->data();
            $file=$uploaddata['file_name'];
            $filepath=$uploaddata['file_path'];
        }
        $fullfilepath=$filepath."".$file;
        $file = $this->csvreader->parse_file($fullfilepath);
        $id1=$this->student_model->createbycsv($file);
//        echo $id1;
        
        if($id1==0)
        $data['alerterror']="New student could not be Uploaded.";
		else
		$data['alertsuccess']="student Uploaded Successfully.";
        
        $data['redirect']="site/viewschool";
        $this->load->view("redirect",$data);
    }
    
    //CSV FOR TEAM
    
     function uploadteamcsv()
	{
		$access = array("1");
		$this->checkaccess($access);
		$data[ 'page' ] = 'uploadteamcsv';
		$data[ 'title' ] = 'Upload team';
		$this->load->view( 'template', $data );
	} 
    
    function uploadteamcsvsubmit()
	{
        $access = array("1");
		$this->checkaccess($access);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        $filename="file";
        $file="";
        if (  $this->upload->do_upload($filename))
        {
            $uploaddata = $this->upload->data();
            $file=$uploaddata['file_name'];
            $filepath=$uploaddata['file_path'];
        }
        $fullfilepath=$filepath."".$file;
        $file = $this->csvreader->parse_file($fullfilepath);
        $id1=$this->team_model->createbycsv($file);
//        echo $id1;
        
        if($id1==0)
        $data['alerterror']="New team could not be Uploaded.";
		else
		$data['alertsuccess']="team Uploaded Successfully.";
        
        $data['redirect']="site/viewschool";
        $this->load->view("redirect",$data);
    }
    
    public function viewnewsletter()
{
    $access=array("1");
    $this->checkaccess($access);
    $data["page"]="viewnewsletter";
    $data["base_url"]=site_url("site/viewnewsletterjson");
    $data["title"]="View newsletter";
    $this->load->view("template",$data);
}
function viewnewsletterjson()
{
    $elements=array();
    $elements[0]=new stdClass();
    $elements[0]->field="`newsletter`.`id`";
    $elements[0]->sort="1";
    $elements[0]->header="ID";
    $elements[0]->alias="id";
    $elements[1]=new stdClass();
    $elements[1]->field="`newsletter`.`email`";
    $elements[1]->sort="1";
    $elements[1]->header="email";
    $elements[1]->alias="email";
    $elements[2]=new stdClass();
    $elements[2]->field="`newsletter`.`timestamp`";
    $elements[2]->sort="1";
    $elements[2]->header="timestamp";
    $elements[2]->alias="timestamp";
    $search=$this->input->get_post("search");
    $pageno=$this->input->get_post("pageno");
    $orderby=$this->input->get_post("orderby");
    $orderorder=$this->input->get_post("orderorder");
    $maxrow=$this->input->get_post("maxrow");
            if($maxrow=="")
        {
            $maxrow=20;
        }
            if($orderby=="")
        {
            $orderby="id";
            $orderorder="ASC";
        }
    $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `newsletter`");
    $this->load->view("json",$data);
}
    // ENQUIRIES
     public function viewenquiries()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="viewenquiries";
	$data["base_url"]=site_url("site/viewenquiriesjson");
	$data["title"]="View enquiries";
	$this->load->view("template",$data);
}
function viewenquiriesjson()
{
	$elements=array();
	$elements[0]=new stdClass();
	$elements[0]->field="`enquiries`.`id`";
	$elements[0]->sort="1";
	$elements[0]->header="ID";
	$elements[0]->alias="id";
	$elements[1]=new stdClass();
	$elements[1]->field="`enquiries`.`name`";
	$elements[1]->sort="1";
	$elements[1]->header="name";
	$elements[1]->alias="name";
	$elements[2]=new stdClass();
	$elements[2]->field="`enquiries`.`email`";
	$elements[2]->sort="1";
	$elements[2]->header="email";
	$elements[2]->alias="email";
	$elements[3]=new stdClass();
	$elements[3]->field="`enquiries`.`mobile`";
	$elements[3]->sort="1";
	$elements[3]->header="mobile";
	$elements[3]->alias="mobile";
	$elements[4]=new stdClass();
	$elements[4]->field="`enquiries`.`person`";
	$elements[4]->sort="1";
	$elements[4]->header="person";
	$elements[4]->alias="person";
	$elements[5]=new stdClass();
	$elements[5]->field="`enquiries`.`timestamp`";
	$elements[5]->sort="1";
	$elements[5]->header="Time stamp";
	$elements[5]->alias="timestamp";

	$search=$this->input->get_post("search");
	$pageno=$this->input->get_post("pageno");
	$orderby=$this->input->get_post("orderby");
	$orderorder=$this->input->get_post("orderorder");
	$maxrow=$this->input->get_post("maxrow");
			if($maxrow=="")
		{
			$maxrow=20;
		}
			if($orderby=="")
		{
			$orderby="id";
			$orderorder="ASC";
		}
	$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `enquiries`");
	$this->load->view("json",$data);
}

public function createenquiries()
{
	$access=array("1");
	$this->checkaccess($access);
//    $data["type"]=$this->enquiries_model->getschooltypedropdown();
	$data["page"]="createenquiries";
	$data["title"]="Create enquiries";
	$this->load->view("template",$data);
}
public function createenquiriessubmit() 
{
	$access=array("1");
	$this->checkaccess($access);
			$name=$this->input->get_post("name");
			$email=$this->input->get_post("email");
			$mobile=$this->input->get_post("mobile");
			$person=$this->input->get_post("person");
//			$timestamp=$this->input->get_post("timestamp");
			if($this->enquiries_model->create($name,$email,$mobile,$person)==0)
			$data["alerterror"]="New enquiries could not be created.";
			else
			$data["alertsuccess"]="enquiries created Successfully.";
			$data["redirect"]="site/viewenquiries";
			$this->load->view("redirect",$data);
		
}
public function editenquiries()
{
	$access=array("1");
	$this->checkaccess($access);
	$data["page"]="editenquiries";
	$data["page2"]="block/registerblock";
	$data["title"]="Edit enquiries";
	$data["type"]=$this->enquiries_model->getschooltypedropdown();
	$data["before1"]=$this->input->get('id');
	$data["before"]=$this->enquiries_model->beforeedit($this->input->get("id"));
	$this->load->view("templatewith2",$data);
}
public function editenquiriessubmit()
{
	$access=array("1");
	$this->checkaccess($access);
			$id=$this->input->get_post("id");	
            $name=$this->input->get_post("name");
			$email=$this->input->get_post("email");
			$mobile=$this->input->get_post("mobile");
			$person=$this->input->get_post("person");
			$timestamp=$this->input->get_post("timestamp");
			if($this->enquiries_model->edit($id,$name,$email,$mobile,$person,$timestamp)==0)
			$data["alerterror"]="New enquiries could not be Updated.";
			else
			$data["alertsuccess"]="enquiries Updated Successfully.";
			$data["redirect"]="site/viewenquiries";
			$this->load->view("redirect",$data);
		
}
public function deleteenquiries()
{
	$access=array("1");
	$this->checkaccess($access);
	$this->enquiries_model->delete($this->input->get("id"));
	$data["redirect"]="site/viewenquiries";
	$this->load->view("redirect",$data);
}


}
?>
