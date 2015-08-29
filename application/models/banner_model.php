<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class banner_model extends CI_Model
{
public function create($name,$status)
{
$data=array("name" => $name,"status" => $status);
$query=$this->db->insert( "sfa_banner", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_banner")->row();
return $query;
}
function getsinglebanner($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_banner")->row();
return $query;
}
public function edit($id,$name,$status)
{
$data=array("name" => $name,"status" => $status);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_banner", $data );
return 1;
}
public function delete($id)
{
	$query1=$this->db->query("SELECT * FROM `sfa_bannerslides` WHERE `banner`='$id'")->row();
	$banner=$query1->banner;
$query=$this->db->query("DELETE FROM `sfa_bannerslides` WHERE `banner`='$banner'");
$query=$this->db->query("DELETE FROM `sfa_banner` WHERE `id`='$id'");
return $query;
}
}
?>
