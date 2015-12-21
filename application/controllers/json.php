<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
class Json extends CI_Controller
{function getallbanner()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_banner`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_banner`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_banner`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_banner`");
$this->load->view("json",$data);
}
public function getsinglebanner()
{
$id=$this->input->get_post("id");
$data["message"]=$this->banner_model->getsinglebanner($id);
$this->load->view("json",$data);
}
function getallbannerslides()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_bannerslides`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_bannerslides`.`banner`";
$elements[1]->sort="1";
$elements[1]->header="banner";
$elements[1]->alias="banner";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_bannerslides`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_bannerslides`.`icon`";
$elements[3]->sort="1";
$elements[3]->header="Icon";
$elements[3]->alias="icon";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_bannerslides`.`title`";
$elements[4]->sort="1";
$elements[4]->header="Title";
$elements[4]->alias="title";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_bannerslides`.`link`";
$elements[5]->sort="1";
$elements[5]->header="Link";
$elements[5]->alias="link";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_bannerslides`.`image`";
$elements[6]->sort="1";
$elements[6]->header="Image";
$elements[6]->alias="image";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_bannerslides`");
$this->load->view("json",$data);
}
public function getsinglebannerslides()
{
$id=$this->input->get_post("id");
$data["message"]=$this->bannerslides_model->getsinglebannerslides($id);
$this->load->view("json",$data);
}
function getallarticles()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_articles`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_articles`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_articles`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_articles`.`image`";
$elements[3]->sort="1";
$elements[3]->header="Image";
$elements[3]->alias="image";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_articles`.`json`";
$elements[4]->sort="1";
$elements[4]->header="Json";
$elements[4]->alias="json";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_articles`");
$this->load->view("json",$data);
}
public function getsinglearticles()
{
$id=$this->input->get_post("id");
$data["message"]=$this->articles_model->getsinglearticles($id);
$this->load->view("json",$data);
}
function getallmodules()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_modules`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_modules`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_modules`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_modules`.`url`";
$elements[3]->sort="1";
$elements[3]->header="Url";
$elements[3]->alias="url";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_modules`.`type`";
$elements[4]->sort="1";
$elements[4]->header="Type";
$elements[4]->alias="type";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_modules`");
$this->load->view("json",$data);
}
public function getsinglemodules()
{
$id=$this->input->get_post("id");
$data["message"]=$this->modules_model->getsinglemodules($id);
$this->load->view("json",$data);
}
function getallmedia()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_media`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_media`.`status`";
$elements[1]->sort="1";
$elements[1]->header="Status";
$elements[1]->alias="status";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_media`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_media`.`name`";
$elements[3]->sort="1";
$elements[3]->header="Name";
$elements[3]->alias="name";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_media`.`icon`";
$elements[4]->sort="1";
$elements[4]->header="Icon";
$elements[4]->alias="icon";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_media`");
$this->load->view("json",$data);
}
public function getsinglemedia()
{
$id=$this->input->get_post("id");
$data["message"]=$this->media_model->getsinglemedia($id);
$this->load->view("json",$data);
}
function getallmediaitem()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_mediaitem`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_mediaitem`.`title`";
$elements[1]->sort="1";
$elements[1]->header="Title";
$elements[1]->alias="title";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_mediaitem`.`thumbnail`";
$elements[2]->sort="1";
$elements[2]->header="Thumbnail";
$elements[2]->alias="thumbnail";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_mediaitem`.`type`";
$elements[3]->sort="1";
$elements[3]->header="Type";
$elements[3]->alias="type";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_mediaitem`.`link`";
$elements[4]->sort="1";
$elements[4]->header="Link";
$elements[4]->alias="link";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_mediaitem`.`order`";
$elements[5]->sort="1";
$elements[5]->header="Order";
$elements[5]->alias="order";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_mediaitem`.`json`";
$elements[6]->sort="1";
$elements[6]->header="Json";
$elements[6]->alias="json";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_mediaitem`.`media`";
$elements[7]->sort="1";
$elements[7]->header="Media";
$elements[7]->alias="media";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_mediaitem`");
$this->load->view("json",$data);
}
public function getsinglemediaitem()
{
$id=$this->input->get_post("id");
$data["message"]=$this->mediaitem_model->getsinglemediaitem($id);
$this->load->view("json",$data);
}
function getallagegroups()
{

	$data["message"] = $this->agegroups_model->getallagegroups();
//$elements=array();
//$elements[0]=new stdClass();
//$elements[0]->field="`sfa_agegroups`.`id`";
//$elements[0]->sort="1";
//$elements[0]->header="ID";
//$elements[0]->alias="id";
//
//$elements=array();
//$elements[1]=new stdClass();
//$elements[1]->field="`sfa_agegroups`.`name`";
//$elements[1]->sort="1";
//$elements[1]->header="Name";
//$elements[1]->alias="name";
//
//$elements=array();
//$elements[2]=new stdClass();
//$elements[2]->field="`sfa_agegroups`.`status`";
//$elements[2]->sort="1";
//$elements[2]->header="Status";
//$elements[2]->alias="status";
//
//$elements=array();
//$elements[3]=new stdClass();
//$elements[3]->field="`sfa_agegroups`.`order`";
//$elements[3]->sort="1";
//$elements[3]->header="Order";
//$elements[3]->alias="order";
//
//$elements=array();
//$elements[4]=new stdClass();
//$elements[4]->field="`sfa_agegroups`.`json`";
//$elements[4]->sort="1";
//$elements[4]->header="Json";
//$elements[4]->alias="json";
//
//$search=$this->input->get_post("search");
//$pageno=$this->input->get_post("pageno");
//$orderby=$this->input->get_post("orderby");
//$orderorder=$this->input->get_post("orderorder");
//$maxrow=$this->input->get_post("maxrow");
//if($maxrow=="")
//{
//}
//if($orderby=="")
//{
//$orderby="id";
//$orderorder="ASC";
//}
//$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_agegroups`");
$this->load->view("json",$data);
}
public function getsingleagegroups()
{
$id=$this->input->get_post("id");
$data["message"]=$this->agegroups_model->getsingleagegroups($id);
$this->load->view("json",$data);
}
function getallyear()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_year`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_year`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_year`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_year`");
$this->load->view("json",$data);
}
public function getsingleyear()
{
$id=$this->input->get_post("id");
$data["message"]=$this->year_model->getsingleyear($id);
$this->load->view("json",$data);
}
function getAllSports()
{
$data["message"]=$this->restapi_model->getAllSports();
$this->load->view("json",$data);
}
public function getsinglesports()
{
$id=$this->input->get_post("id");
$data["message"]=$this->sports_model->getsinglesports($id);
$this->load->view("json",$data);
}
function getallsportscategory()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_sportscategory`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements[1]=new stdClass();
$elements[1]->field="`sfa_sportscategory`.`sports`";
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
$elements[4]->field="`sfa_sportscategory`.`status`";
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

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_sportscategory`");
$this->load->view("json",$data);
}
public function getsinglesportscategory()
{
$id=$this->input->get_post("id");
$data["message"]=$this->sportscategory_model->getsinglesportscategory($id);
$this->load->view("json",$data);
}
function getallsportsgalleryitem()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_sportsgalleryitem`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_sportsgalleryitem`.`sports`";
$elements[1]->sort="1";
$elements[1]->header="Sports";
$elements[1]->alias="sports";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_sportsgalleryitem`.`sportscategory`";
$elements[2]->sort="1";
$elements[2]->header="Sports Category";
$elements[2]->alias="sportscategory";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_sportsgalleryitem`.`year`";
$elements[3]->sort="1";
$elements[3]->header="Year";
$elements[3]->alias="year";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_sportsgalleryitem`.`type`";
$elements[4]->sort="1";
$elements[4]->header="Type";
$elements[4]->alias="type";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_sportsgalleryitem`.`order`";
$elements[5]->sort="1";
$elements[5]->header="Order";
$elements[5]->alias="order";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_sportsgalleryitem`.`status`";
$elements[6]->sort="1";
$elements[6]->header="Status";
$elements[6]->alias="status";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_sportsgalleryitem`.`image`";
$elements[7]->sort="1";
$elements[7]->header="Image";
$elements[7]->alias="image";

$elements=array();
$elements[8]=new stdClass();
$elements[8]->field="`sfa_sportsgalleryitem`.`title`";
$elements[8]->sort="1";
$elements[8]->header="Title";
$elements[8]->alias="title";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_sportsgalleryitem`");
$this->load->view("json",$data);
}
public function getsinglesportsgalleryitem()
{
$id=$this->input->get_post("id");
$data["message"]=$this->sportsgalleryitem_model->getsinglesportsgalleryitem($id);
$this->load->view("json",$data);
}
function getallschool()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_school`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_school`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_school`.`email`";
$elements[2]->sort="1";
$elements[2]->header="Email";
$elements[2]->alias="email";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_school`.`contact`";
$elements[3]->sort="1";
$elements[3]->header="Contact";
$elements[3]->alias="contact";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_school`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_school`.`location`";
$elements[5]->sort="1";
$elements[5]->header="Location";
$elements[5]->alias="location";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_school`.`address`";
$elements[6]->sort="1";
$elements[6]->header="Address";
$elements[6]->alias="address";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_school`.`biography`";
$elements[7]->sort="1";
$elements[7]->header="Biography";
$elements[7]->alias="biography";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_school`");
$this->load->view("json",$data);
}
public function getsingleschool()
{
$id=$this->input->get_post("id");
$data["message"]=$this->school_model->getsingleschool($id);
$this->load->view("json",$data);
}
function getallstudent()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_student`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_student`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_student`.`school`";
$elements[2]->sort="1";
$elements[2]->header="School";
$elements[2]->alias="school";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_student`.`email`";
$elements[3]->sort="1";
$elements[3]->header="Email";
$elements[3]->alias="email";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_student`.`image`";
$elements[4]->sort="1";
$elements[4]->header="Image";
$elements[4]->alias="image";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_student`.`location`";
$elements[5]->sort="1";
$elements[5]->header="Location";
$elements[5]->alias="location";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_student`.`address`";
$elements[6]->sort="1";
$elements[6]->header="Address";
$elements[6]->alias="address";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_student`.`content`";
$elements[7]->sort="1";
$elements[7]->header="Content";
$elements[7]->alias="content";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_student`");
$this->load->view("json",$data);
}
public function getsinglestudent()
{
$id=$this->input->get_post("id");
$data["message"]=$this->student_model->getsinglestudent($id);
$this->load->view("json",$data);
}
function getallteam()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_team`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_team`.`sportscategory`";
$elements[1]->sort="1";
$elements[1]->header="Sports Category";
$elements[1]->alias="sportscategory";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_team`.`agegroup`";
$elements[2]->sort="1";
$elements[2]->header="Age group";
$elements[2]->alias="agegroup";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_team`.`year`";
$elements[3]->sort="1";
$elements[3]->header="Year";
$elements[3]->alias="year";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_team`");
$this->load->view("json",$data);
}
public function getsingleteam()
{
$id=$this->input->get_post("id");
$data["message"]=$this->team_model->getsingleteam($id);
$this->load->view("json",$data);
}
function getallteamstudents()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_teamstudents`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_teamstudents`.`team`";
$elements[1]->sort="1";
$elements[1]->header="team";
$elements[1]->alias="team";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_teamstudents`.`student`";
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_teamstudents`");
$this->load->view("json",$data);
}
public function getsingleteamstudents()
{
$id=$this->input->get_post("id");
$data["message"]=$this->teamstudents_model->getsingleteamstudents($id);
$this->load->view("json",$data);
}
function getallround()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_round`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_round`.`sports`";
$elements[1]->sort="1";
$elements[1]->header="Sports";
$elements[1]->alias="sports";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_round`.`sportscategory`";
$elements[2]->sort="1";
$elements[2]->header="Sports Category";
$elements[2]->alias="sportscategory";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_round`.`year`";
$elements[3]->sort="1";
$elements[3]->header="Year";
$elements[3]->alias="year";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_round`.`agegroup`";
$elements[4]->sort="1";
$elements[4]->header="Age group";
$elements[4]->alias="agegroup";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_round`.`level`";
$elements[5]->sort="1";
$elements[5]->header="Level";
$elements[5]->alias="level";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_round`.`root`";
$elements[6]->sort="1";
$elements[6]->header="root";
$elements[6]->alias="root";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_round`");
$this->load->view("json",$data);
}
public function getsingleround()
{
$id=$this->input->get_post("id");
$data["message"]=$this->round_model->getsingleround($id);
$this->load->view("json",$data);
}
function getallmatch()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_match`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_match`.`sports`";
$elements[1]->sort="1";
$elements[1]->header="Sports";
$elements[1]->alias="sports";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_match`.`sportscategory`";
$elements[2]->sort="1";
$elements[2]->header="Sports Category";
$elements[2]->alias="sportscategory";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_match`.`agegroup`";
$elements[3]->sort="1";
$elements[3]->header="Age group";
$elements[3]->alias="agegroup";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_match`.`status`";
$elements[4]->sort="1";
$elements[4]->header="Status";
$elements[4]->alias="status";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_match`.`timestamp`";
$elements[5]->sort="1";
$elements[5]->header="Time stamp";
$elements[5]->alias="timestamp";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_match`.`resulttimestamp`";
$elements[6]->sort="1";
$elements[6]->header="Result timestamp";
$elements[6]->alias="resulttimestamp";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_match`.`matchresult`";
$elements[7]->sort="1";
$elements[7]->header="Match Result";
$elements[7]->alias="matchresult";

$search=$this->input->get_post("search");
$pageno=$this->input->get_post("pageno");
$orderby=$this->input->get_post("orderby");
$orderorder=$this->input->get_post("orderorder");
$maxrow=$this->input->get_post("maxrow");
if($maxrow=="")
{
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_match`");
$this->load->view("json",$data);
}
public function getsinglematch()
{
$id=$this->input->get_post("id");
$data["message"]=$this->match_model->getsinglematch($id);
$this->load->view("json",$data);
}
function getallmatchplayed()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_matchplayed`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_matchplayed`.`match`";
$elements[1]->sort="1";
$elements[1]->header="Match";
$elements[1]->alias="match";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_matchplayed`.`type`";
$elements[2]->sort="1";
$elements[2]->header="Type";
$elements[2]->alias="type";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_matchplayed`.`order`";
$elements[3]->sort="1";
$elements[3]->header="Order";
$elements[3]->alias="order";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_matchplayed`.`team`";
$elements[4]->sort="1";
$elements[4]->header="team";
$elements[4]->alias="team";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_matchplayed`.`student`";
$elements[5]->sort="1";
$elements[5]->header="Student";
$elements[5]->alias="student";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_matchplayed`.`result`";
$elements[6]->sort="1";
$elements[6]->header="Result";
$elements[6]->alias="result";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_matchplayed`.`round`";
$elements[7]->sort="1";
$elements[7]->header="Round";
$elements[7]->alias="round";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_matchplayed`");
$this->load->view("json",$data);
}
public function getsinglematchplayed()
{
$id=$this->input->get_post("id");
$data["message"]=$this->matchplayed_model->getsinglematchplayed($id);
$this->load->view("json",$data);
}
function getallmedal()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_medal`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_medal`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_medal`.`order`";
$elements[2]->sort="1";
$elements[2]->header="Order";
$elements[2]->alias="order";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_medal`");
$this->load->view("json",$data);
}
public function getsinglemedal()
{
$id=$this->input->get_post("id");
$data["message"]=$this->medal_model->getsinglemedal($id);
$this->load->view("json",$data);
}
function getallmedalwon()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_medalwon`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_medalwon`.`medal`";
$elements[1]->sort="1";
$elements[1]->header="Medal";
$elements[1]->alias="medal";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_medalwon`.`sports`";
$elements[2]->sort="1";
$elements[2]->header="Sports";
$elements[2]->alias="sports";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_medalwon`.`sportscategory`";
$elements[3]->sort="1";
$elements[3]->header="Sports Category";
$elements[3]->alias="sportscategory";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_medalwon`.`year`";
$elements[4]->sort="1";
$elements[4]->header="Year";
$elements[4]->alias="year";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_medalwon`.`agegroup`";
$elements[5]->sort="1";
$elements[5]->header="Age group";
$elements[5]->alias="agegroup";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_medalwon`");
$this->load->view("json",$data);
}
public function getsinglemedalwon()
{
$id=$this->input->get_post("id");
$data["message"]=$this->medalwon_model->getsinglemedalwon($id);
$this->load->view("json",$data);
}
 public function getbannersliders()
 {
 $data["message"]=$this->restapi_model->getbannersliders();
 $this->load->view("json",$data);

 }

    public function getregistrationsports()
    {
        $data['message']=$this->restapi_model->getgetregistrationsports();
        $this->load->view("json",$data);
    }

    public function registerschool()
    {
 $data = json_decode(file_get_contents('php://input'), true);
		$name=$data['name'];
		$address=$data['address'];
		$establishdate=$data['establishdate'];
		$contactperson=$data['contactperson'];
		$type=$data['type'];
		$email=$data['email'];
		$mobile=$data['mobile'];
		$landline=$data['landline'];
		$sports=$data['sports'];
                  if(empty($data)){
		$data['message']=0;
		}
	    else{
        $data['message']=$this->restapi_model->registerschool($name,$address,$establishdate,$contactperson,$type,$email,$mobile,$landline,$sports);
}
        $this->load->view("json",$data);
    }

    public function getsponsors()
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
	$elements[2]->field="`sponsor`.`description`";
	$elements[2]->sort="1";
	$elements[2]->header="description";
	$elements[2]->alias="description";
	$elements[3]=new stdClass();
	$elements[3]->field="`sponsor`.`image`";
	$elements[3]->sort="1";
	$elements[3]->header="Image";
	$elements[3]->alias="image";
	$elements[4]=new stdClass();
	$elements[4]->field="`sponsor`.`status`";
	$elements[4]->sort="1";
	$elements[4]->header="status";
	$elements[4]->alias="status";
	$elements[5]=new stdClass();
	$elements[5]->field="`sponsor`.`order`";
	$elements[5]->sort="1";
	$elements[5]->header="order";
	$elements[5]->alias="order";
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

 public function getnewsletter(){
 $email=$this->input->get_post("email");
$data["message"]=$this->restapi_model->getnewsletter($email);
$this->load->view("json",$data);
 }
 public function getschoolnames(){
$data["message"]=$this->restapi_model->getschoolnames();
$this->load->view("json",$data);
 }
 public function getschoolprofile(){
     $id=$this->input->get_post("id");
$data["message"]=$this->restapi_model->getschoolprofile($id);
$this->load->view("json",$data);
 }
 public function getStudentProfile(){
     $id=$this->input->get_post("id");
$data["message"]=$this->restapi_model->getStudentProfile($id);
$this->load->view("json",$data);
 }

 public function filtergames(){
	 $games = $this->input->get_post("games");
	 $data["message"] = $this->restapi_model->filtergames($games);
	 $this->load->view("json",$data);
 }

 public function getSchoolSports1()
 {
        $id=$this->input->get_post("id");
        $sport=$this->input->get_post("sport");
        $agegroup=$this->input->get_post("agegroup");
        $elements=array();
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_student`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";

        $elements[1]=new stdClass();
        $elements[1]->field="`sfa_student`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";

        $elements[2]=new stdClass();
        $elements[2]->field="`sfa_student`.`school`";
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
        $elements[8]->field="`sfa_student`.`sports`";
        $elements[8]->sort="1";
        $elements[8]->header="sports";
        $elements[8]->alias="sports";

        $elements[9]=new stdClass();
        $elements[9]->field="`sfa_student`.`sportscategory`";
        $elements[9]->sort="1";
        $elements[9]->header="sportscategory";
        $elements[9]->alias="sportscategory";

        $elements[10]=new stdClass();
        $elements[10]->field="`sfa_student`.`agegroup`";
        $elements[10]->sort="1";
        $elements[10]->header="agegroup";
        $elements[10]->alias="agegroup";

        $elements[11]=new stdClass();
        $elements[11]->field="`sfa_student`.`gender`";
        $elements[11]->sort="1";
        $elements[11]->header="gender";
        $elements[11]->alias="gender";

        $elements[12]=new stdClass();
        $elements[12]->field="`sfa_student`.`isparticipant`";
        $elements[12]->sort="1";
        $elements[12]->header="isparticipant";
        $elements[12]->alias="isparticipant";

        $elements[13]=new stdClass();
        $elements[13]->field="`sfa_student`.`age`";
        $elements[13]->sort="1";
        $elements[13]->header="age";
        $elements[13]->alias="age";

        $elements[14]=new stdClass();
        $elements[14]->field="`sfa_student`.`phone`";
        $elements[14]->sort="1";
        $elements[14]->header="phone";
        $elements[14]->alias="phone";

        $elements[15]=new stdClass();
        $elements[15]->field="`sfa_student`.`emergencycontact`";
        $elements[15]->sort="1";
        $elements[15]->header="emergencycontact";
        $elements[15]->alias="emergencycontact";

        $elements[16]=new stdClass();
        $elements[16]->field="`sfa_student`.`dob`";
        $elements[16]->sort="1";
        $elements[16]->header="dob";
        $elements[16]->alias="dob";

        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_student` INNER JOIN `sfa_studentsport` ON `sfa_student`.`id` = `sfa_studentsport`.`student`"," WHERE `sfa_studentsport`.`sport` = $sport AND `sfa_student`.`school` = $id AND `sfa_student`.`agegroup` = $agegroup ","GROUP BY `sfa_student`.`id`");
        $this->load->view("json",$data);
 }

 public function getAgeGroup()
 {
        $id=$this->input->get_post("id");
        $sport=$this->input->get_post("sport");
	   $data["message"]=$this->restapi_model->getAgeGroup($id,$sport);
        $this->load->view("json",$data);
 }
 
 public function scheduleAgeGroup()
 {
        $category=$this->input->get_post("category");
        $sport=$this->input->get_post("sport");
        $gender=$this->input->get_post("gender");
	   $data["message"]=$this->restapi_model->getAgeGroup($category,$sport,$gender);
        $this->load->view("json",$data);
 }
 
 public function getSportsCategory()
 {
        $id=$this->input->get_post("id");
        $sport=$this->input->get_post("sport");
	   $agegroup=$this->input->get_post("agegroup");
	   $data["message"]=$this->restapi_model->getSportsCategory($id,$sport,$agegroup);
        $this->load->view("json",$data);
 }
 
 public function isStudentSports()
 {
	   $data["message"]=$this->restapi_model->isStudentSports();
        $this->load->view("json",$data);
 }

 public function getSchoolSports()
 {
        $id=$this->input->get_post("id");
        $sport=$this->input->get_post("sport");
        $agegroup=$this->input->get_post("agegroup");
        $category=$this->input->get_post("category");
	   $data["message"]=$this->restapi_model->getSchoolSports($id,$sport,$agegroup,$category);
        $this->load->view("json",$data);
 }

 public function studentSearchByName()
 {
        $elements=array();
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_student`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";

        $elements[1]=new stdClass();
        $elements[1]->field="`sfa_student`.`name`";
        $elements[1]->sort="1";
        $elements[1]->header="Name";
        $elements[1]->alias="name";

        $elements[2]=new stdClass();
        $elements[2]->field="CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0))";
        $elements[2]->sort="1";
        $elements[2]->header="Sfaid";
        $elements[2]->alias="sfaid";

        $elements[3]=new stdClass();
        $elements[3]->field="DATE_FORMAT(`sfa_student`.`dob`,'%D %M %Y')";
        $elements[3]->sort="1";
        $elements[3]->header="Dob";
        $elements[3]->alias="dob";
	 
        $elements[4]=new stdClass();
        $elements[4]->field="`sfa_student`.`dob`";
        $elements[4]->sort="1";
        $elements[4]->header="Image";
        $elements[4]->alias="image";

        $elements[5]=new stdClass();
        $elements[5]->field="`sfa_school`.`name`";
        $elements[5]->sort="1";
        $elements[5]->header="School";
        $elements[5]->alias="school";
	 
        $elements[6]=new stdClass();
        $elements[6]->field="`sfa_school`.`id`";
        $elements[6]->sort="1";
        $elements[6]->header="SchoolId";
        $elements[6]->alias="schoolid";

        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
	 
	 $school = $this->input->get("school");	
	 $studentname = $this->input->get("studentname");	
	 
	 $where = "WHERE 1 AND ";
	 
	 if($school != "") {
		 $where.="  `sfa_school`.`name` LIKE '%$school%' AND " ;
	 }
	 else {
		 $where.=" " ;
	 }
	 
	 if($studentname != "" ) {
		 $where.="  `sfa_student`.`name` LIKE '%$studentname%' AND " ;
	 }
	 else {
		 $where.="";
	 }
	 $where .= " 1 ";
	 
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
	 
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"from `sfa_student` inner join `sfa_school` on `sfa_student`.`school` = `sfa_school`.`id`",$where);
        $this->load->view("json",$data);
 }
 
 
 
 public function studentSearchById()
 {
      $id = $this->input->get("id");
      $query=$this->db->query("SELECT * FROM `sfa_student` WHERE `id`='$id'");
	 
	 if($query->num_rows() == 0)
	 {
		 $data["message"]=false;
	 }
	 else
	 {
		 $data["message"]=$query->row();
	 }
		 
	 
      $this->load->view("json",$data);
 }
 
 public function schoolSearchById()
 {
      $id = $this->input->get("id");
      $query=$this->db->query("SELECT * FROM `sfa_school` WHERE `id`='$id'");
	 
	 if($query->num_rows() == 0)
	 {
		 $data["message"]=false;
	 }
	 else
	 {
		 $data["message"]=$query->row();
	 }
		 
	 
      $this->load->view("json",$data);
 }
 

 public function createEnquiries(){
		$name=$this->input->get_post('name');
		$email=$this->input->get_post('email');
		$mobile=$this->input->get_post('mobile');
		$person=$this->input->get_post('person');

        $data["message"]=$this->restapi_model->createEnquiries($name,$email,$mobile,$person);

$this->load->view("json",$data);

 }
 public function getgalleryimageforstudentprofile(){
     $id=$this->input->get_post("id");
	 $sport =$this->input->get_post("sport");
        $elements=array();
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_mediaitem`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";

        $elements[1]=new stdClass();
        $elements[1]->field="`sfa_mediaitem`.`thumbnail`";
        $elements[1]->sort="1";
        $elements[1]->header="thumbnail";
        $elements[1]->alias="thumbnail";



        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"from `sfa_mediaitem` inner join `sfa_mediastudents` ON `sfa_mediastudents`.`mediaitem` = `sfa_mediaitem`.`id`"," where `sfa_mediastudents`.`student` = $id and `sfa_mediaitem`.`sport` = $sport");
        $this->load->view("json",$data);
 }

  public function getgalleryimage(){
     $id=$this->input->get_post("id");
        $sport=$this->input->get_post("sport");
//        $students=$this->db->query("SELECT `id` FROM `sfa_student` WHERE `school`='$id' AND `sports`='$sport'")->result();
//     $studentsids="(";
//            foreach($students as $key=>$value){
////            $catid=$row->id;
//                if($key==0)
//                {
//                    $studentsids.=$value->id;
//                }
//                else
//                {
//                    $studentsids.=",".$value->id;
//                }
//            }
//            $studentsids.=")";
//     if($studentsids=="()"){
//             $studentsids="(0)";
//            }
        $elements=array();
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_mediaitem`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="ID";
        $elements[0]->alias="id";

        $elements[1]=new stdClass();
        $elements[1]->field="`sfa_mediaitem`.`thumbnail`";
        $elements[1]->sort="1";
        $elements[1]->header="thumbnail";
        $elements[1]->alias="thumbnail";



        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"from `sfa_mediaitem` inner join `sfa_media` ON `sfa_mediaitem`.`media` = `sfa_media`.`id`"," where `sfa_media`.`school` = $id and `sfa_mediaitem`.`sport` = $sport");
        $this->load->view("json",$data);
 }

 public function getgalleryimagestudentprofile(){
         $id=$this->input->get_post("id");
            $sport=$this->input->get_post("sport");

            $query2=$this->db->query("SELECT `school` FROM `sfa_student` WHERE `id`='$id'")->row();
          $schoolid=$query2->school;

            $query1=$this->db->query("SELECT `id`, `name`, `icon`, `status`, `order`, `json`, `school`, `date` FROM `sfa_media` WHERE `school`='$schoolid'")->row();
         $mediaid=$query1->mediaid;

            $elements=array();
            $elements[0]=new stdClass();
            $elements[0]->field="`sfa_mediaitem`.`id`";
            $elements[0]->sort="1";
            $elements[0]->header="ID";
            $elements[0]->alias="id";

            $elements[1]=new stdClass();
            $elements[1]->field="`sfa_mediaitem`.`thumbnail`";
            $elements[1]->sort="1";
            $elements[1]->header="thumbnail";
            $elements[1]->alias="thumbnail";



            $search=$this->input->get_post("search");
            $pageno=$this->input->get_post("pageno");
            $orderby=$this->input->get_post("orderby");
            $orderorder=$this->input->get_post("orderorder");
            $maxrow=$this->input->get_post("maxrow");
            if($maxrow=="")
            {
            }
            if($orderby=="")
            {
            $orderby="id";
            $orderorder="ASC";
            }
            $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_mediaitem`","WHERE `sfa_mediaitem`.`sport` = '$sport' AND `sfa_mediaitem`.`id`='$mediaid'");
            $this->load->view("json",$data);
 }
 public function getschedule(){
        $sport=$this->input->get_post("sport");
        $sportscategory=$this->input->get_post("sportscategory");
        $gender=$this->input->get_post("gender");
        $agegroup=$this->input->get_post("agegroup");
        $where="";
        if($sport!=""){
            $where .=" `sfa_match`.`sports`='$sport' AND";
        }
     if($sportscategory!=""){
            $where .=" `sfa_match`.`sportscategory`='$sportscategory' AND";
        }
     if($gender!=""){
            $where .=" `sfa_match`.`gender`='$gender' AND";
        }
     if($agegroup!=""){
            $where .=" `sfa_match`.`agegroup`='$agegroup' AND";
        }
     $where .=" 1";
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_match`.`matchresult`";
        $elements[0]->sort="1";
        $elements[0]->header="matchresult";
        $elements[0]->alias="matchresult";

        $elements[1]=new stdClass();
        $elements[1]->field="`sfa_match`.`starttime`";
        $elements[1]->sort="1";
        $elements[1]->header="starttime";
        $elements[1]->alias="starttime";

        $elements[2]=new stdClass();
        $elements[2]->field="`sfa_match`.`endtime`";
        $elements[2]->sort="1";
        $elements[2]->header="endtime";
        $elements[2]->alias="endtime";

        $elements[3]=new stdClass();
        $elements[3]->field="`sfa_match`.`matchdate`";
        $elements[3]->sort="1";
        $elements[3]->header="matchdate";
        $elements[3]->alias="matchdate";

        $elements[4]=new stdClass();
        $elements[4]->field="`team1`.`student`";
        $elements[4]->sort="1";
        $elements[4]->header="team1Student";
        $elements[4]->alias="team1Student";

        $elements[5]=new stdClass();
        $elements[5]->field="`team1`.`team`";
        $elements[5]->sort="1";
        $elements[5]->header="team1Team";
        $elements[5]->alias="team1Team";

        $elements[6]=new stdClass();
        $elements[6]->field="`team2`.`student`";
        $elements[6]->sort="1";
        $elements[6]->header="team2Student";
        $elements[6]->alias="team2Student";

        $elements[7]=new stdClass();
        $elements[7]->field="`team2`.`team`";
        $elements[7]->sort="1";
        $elements[7]->header="team2Team";
        $elements[7]->alias="team2Team";
     
        $elements[8]=new stdClass();
        $elements[8]->field="`student1`.`name`";
        $elements[8]->sort="1";
        $elements[8]->header="student1name";
        $elements[8]->alias="student1name";
     
        $elements[9]=new stdClass();
        $elements[9]->field="`student2`.`name`";
        $elements[9]->sort="1";
        $elements[9]->header="student2name";
        $elements[9]->alias="student2name";
     
        $elements[10]=new stdClass();
        $elements[10]->field="`sfa_team1`.`title`";
        $elements[10]->sort="1";
        $elements[10]->header="team1name";
        $elements[10]->alias="team1name";
     
        $elements[11]=new stdClass();
        $elements[11]->field="`sfa_team2`.`title`";
        $elements[11]->sort="1";
        $elements[11]->header="team2name";
        $elements[11]->alias="team2name";
     
        $elements[12]=new stdClass();
        $elements[12]->field="`school1`.`id`";
        $elements[12]->sort="1";
        $elements[12]->header="school1id";
        $elements[12]->alias="school1id";
     
        $elements[13]=new stdClass();
        $elements[13]->field="`school2`.`id`";
        $elements[13]->sort="1";
        $elements[13]->header="school2id";
        $elements[13]->alias="school2id";
     
        $elements[14]=new stdClass();
        $elements[14]->field="`school1`.`name`";
        $elements[14]->sort="1";
        $elements[14]->header="school1name";
        $elements[14]->alias="school1name";
     
        $elements[15]=new stdClass();
        $elements[15]->field="`school2`.`name`";
        $elements[15]->sort="1";
        $elements[15]->header="school2name";
        $elements[15]->alias="school2name";
     
        $elements[16]=new stdClass();
        $elements[16]->field="CONCAT('SFATE',LPAD(`sfa_team1`.`id`,6,0))";
        $elements[16]->sort="1";
        $elements[16]->header="team1sfaid";
        $elements[16]->alias="team1sfaid";
     
        $elements[17]=new stdClass();
        $elements[17]->field="CONCAT('SFATE',LPAD(`sfa_team2`.`id`,6,0))";
        $elements[17]->sort="1";
        $elements[17]->header="team2sfaid";
        $elements[17]->alias="team2sfaid";
     
        $elements[18]=new stdClass();
        $elements[18]->field="CONCAT('SFAST',LPAD(`student1`.`id`,6,0))";
        $elements[18]->sort="1";
        $elements[18]->header="student1sfaid";
        $elements[18]->alias="student1sfaid";
     
        $elements[19]=new stdClass();
        $elements[19]->field="CONCAT('SFAST',LPAD(`student2`.`id`,6,0))";
        $elements[19]->sort="1";
        $elements[19]->header="student2sfaid";
        $elements[19]->alias="student2sfaid";
     
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_match` 
INNER JOIN (SELECT `team`,`student`,`match` FROM `sfa_matchplayed` LIMIT 0,1) as `team1` ON `sfa_match`.`id` = `team1`.`match`
INNER JOIN (SELECT `team`,`student`,`match` FROM `sfa_matchplayed` LIMIT 1,1) as `team2` ON `sfa_match`.`id` = `team2`.`match`
LEFT OUTER JOIN `sfa_student` as `student1` ON `student1`.`id` = `team1`.`student`
LEFT OUTER JOIN `sfa_student` as `student2` ON `student2`.`id` = `team2`.`student`
LEFT OUTER JOIN `sfa_team` as `sfa_team1` ON `sfa_team1`.`id` = `team1`.`team`
LEFT OUTER JOIN `sfa_team` as `sfa_team2` ON `sfa_team2`.`id` = `team2`.`team`
LEFT OUTER JOIN `sfa_school` as `school1` ON `school1`.`id` = `student1`.`school`
LEFT OUTER JOIN `sfa_school` as `school2` ON `school2`.`id` = `student2`.`school`","WHERE $where");
        $this->load->view("json",$data);
 }
 public function getAllSwimmingMatch(){
        $sportscategory=$this->input->get_post("sportscategory");
        $gender=$this->input->get_post("gender");
        $agegroup=$this->input->get_post("agegroup");
        $where="";
      
     if($sportscategory!=""){
            $where .="AND `sfa_match`.`sportscategory`='$sportscategory'";
        }
     if($gender!=""){
            $where .="AND `sfa_match`.`gender`='$gender'";
        }
     if($agegroup!=""){
            $where .="AND `sfa_match`.`agegroup`='$agegroup'";
        }
     $where .="AND 1";
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_match`.`matchresult`";
        $elements[0]->sort="1";
        $elements[0]->header="matchresult";
        $elements[0]->alias="matchresult";

        $elements[1]=new stdClass();
        $elements[1]->field="`sfa_match`.`starttime`";
        $elements[1]->sort="1";
        $elements[1]->header="starttime";
        $elements[1]->alias="starttime";

        $elements[2]=new stdClass();
        $elements[2]->field="`sfa_match`.`endtime`";
        $elements[2]->sort="1";
        $elements[2]->header="endtime";
        $elements[2]->alias="endtime";

        $elements[3]=new stdClass();
        $elements[3]->field="`sfa_match`.`matchdate`";
        $elements[3]->sort="1";
        $elements[3]->header="matchdate";
        $elements[3]->alias="matchdate";
     
        $elements[4]=new stdClass();
        $elements[4]->field="`sfa_team`.`id`";
        $elements[4]->sort="1";
        $elements[4]->header="teamid";
        $elements[4]->alias="teamid";
     
        $elements[5]=new stdClass();
        $elements[5]->field="CONCAT('SFATE',LPAD(`sfa_team`.`id`,6,0))";
        $elements[5]->sort="1";
        $elements[5]->header="teamsfaid";
        $elements[5]->alias="teamsfaid";
     
        $elements[6]=new stdClass();
        $elements[6]->field="`sfa_student`.`id`";
        $elements[6]->sort="1";
        $elements[6]->header="studentid";
        $elements[6]->alias="studentid";
     
        $elements[7]=new stdClass();
        $elements[7]->field="CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0))";
        $elements[7]->sort="1";
        $elements[7]->header="studentsfaid";
        $elements[7]->alias="studentsfaid";
     
        $elements[8]=new stdClass();
        $elements[8]->field="`sfa_student`.`name`";
        $elements[8]->sort="1";
        $elements[8]->header="studentname";
        $elements[8]->alias="studentname";
     
        $elements[9]=new stdClass();
        $elements[9]->field="`sfa_school`.`name`";
        $elements[9]->sort="1";
        $elements[9]->header="schoolname";
        $elements[9]->alias="schoolname";
        
        $elements[10]=new stdClass();
        $elements[10]->field="`sfa_match`.`id`";
        $elements[10]->sort="1";
        $elements[10]->header="matchid";
        $elements[10]->alias="matchid";
     
        $elements[11]=new stdClass();
        $elements[11]->field="`sfa_team`.`title`";
        $elements[11]->sort="1";
        $elements[11]->header="teamname";
        $elements[11]->alias="teamname";

       
     
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_match` LEFT OUTER JOIN `sfa_matchplayed` ON `sfa_matchplayed`.`match`=`sfa_match`.`id` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_matchplayed`.`student` LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` ","WHERE `sfa_match`.`sports`=2 $where");
        $this->load->view("json",$data);
 }
 public function getDraw()
 {
        $sport=$this->input->get_post("sport");
        $sportscategory=$this->input->get_post("sportscategory");
        $gender=$this->input->get_post("gender");
        $agegroup=$this->input->get_post("agegroup");
        $data['message']=$this->restapi_model->getDraw($sport,$sportscategory,$gender,$agegroup);
        $this->load->view("json",$data);
 } 
public function getScore()
{
        $sport=$this->input->get_post("sport");
        $sportscategory=$this->input->get_post("sportscategory");
        $gender=$this->input->get_post("gender");
        $agegroup=$this->input->get_post("agegroup");
    
        $elements[0]=new stdClass();
        $elements[0]->field="`sfa_match`.`id`";
        $elements[0]->sort="1";
        $elements[0]->header="matchid";
        $elements[0]->alias="matchid";
     
        $search=$this->input->get_post("search");
        $pageno=$this->input->get_post("pageno");
        $orderby=$this->input->get_post("orderby");
        $orderorder=$this->input->get_post("orderorder");
        $maxrow=$this->input->get_post("maxrow");
        if($maxrow=="")
        {
        }
        if($orderby=="")
        {
        $orderby="id";
        $orderorder="ASC";
        }
        $data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_match`","WHERE `sports`='$sport' AND `sportscategory`='$sportscategory' AND `gender`='$gender' AND `agegroup`='$agegroup'");
        foreach($data["message"]->queryresult as $row)
        {
            $matchid=$row->matchid;
            $row->players=$this->db->query("SELECT `sfa_matchplayed`.`id`, `sfa_matchplayed`.`team`,`sfa_matchplayed`.`student`,`sfa_matchplayed`.`reason` as `result`,`sfa_matchplayed`.`round`,`sfa_student`.`id`,`sfa_student`.`name`,CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0)) as `studentsfaid`,`sfa_team`.`id`,`sfa_team`.`title`,CONCAT('SFATE',LPAD(`sfa_team`.`id`,6,0)) as `teamsfaid` FROM `sfa_matchplayed` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_matchplayed`.`student` LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` WHERE `match`=$matchid")->result();
        }
        $this->load->view("json",$data);
 }
 
} ?>
