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
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_agegroups`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_agegroups`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_agegroups`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_agegroups`.`order`";
$elements[3]->sort="1";
$elements[3]->header="Order";
$elements[3]->alias="order";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_agegroups`");
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
function getallsports()
{
$elements=array();
$elements[0]=new stdClass();
$elements[0]->field="`sfa_sports`.`id`";
$elements[0]->sort="1";
$elements[0]->header="ID";
$elements[0]->alias="id";

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_sports`.`name`";
$elements[1]->sort="1";
$elements[1]->header="Name";
$elements[1]->alias="name";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_sports`.`status`";
$elements[2]->sort="1";
$elements[2]->header="Status";
$elements[2]->alias="status";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_sports`.`order`";
$elements[3]->sort="1";
$elements[3]->header="Order";
$elements[3]->alias="order";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_sports`.`icon`";
$elements[4]->sort="1";
$elements[4]->header="Icon";
$elements[4]->alias="icon";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_sports`.`json`";
$elements[5]->sort="1";
$elements[5]->header="Json";
$elements[5]->alias="json";

$elements=array();
$elements[6]=new stdClass();
$elements[6]->field="`sfa_sports`.`about`";
$elements[6]->sort="1";
$elements[6]->header="About";
$elements[6]->alias="about";

$elements=array();
$elements[7]=new stdClass();
$elements[7]->field="`sfa_sports`.`eligibility`";
$elements[7]->sort="1";
$elements[7]->header="Eligibility";
$elements[7]->alias="eligibility";

$elements=array();
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
}
if($orderby=="")
{
$orderby="id";
$orderorder="ASC";
}
$data["message"]=$this->chintantable->query($pageno,$maxrow,$orderby,$orderorder,$search,$elements,"FROM `sfa_sports`");
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

$elements=array();
$elements[1]=new stdClass();
$elements[1]->field="`sfa_sportscategory`.`sports`";
$elements[1]->sort="1";
$elements[1]->header="Sports";
$elements[1]->alias="sports";

$elements=array();
$elements[2]=new stdClass();
$elements[2]->field="`sfa_sportscategory`.`title`";
$elements[2]->sort="1";
$elements[2]->header="Title";
$elements[2]->alias="title";

$elements=array();
$elements[3]=new stdClass();
$elements[3]->field="`sfa_sportscategory`.`order`";
$elements[3]->sort="1";
$elements[3]->header="Order";
$elements[3]->alias="order";

$elements=array();
$elements[4]=new stdClass();
$elements[4]->field="`sfa_sportscategory`.`status`";
$elements[4]->sort="1";
$elements[4]->header="Status";
$elements[4]->alias="status";

$elements=array();
$elements[5]=new stdClass();
$elements[5]->field="`sfa_sportscategory`.`type`";
$elements[5]->sort="1";
$elements[5]->header="Type";
$elements[5]->alias="type";

$elements=array();
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
} ?>