<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class medalwon_model extends CI_Model
{
public function create($medal,$sports,$sportscategory,$year,$agegroup)
{
$data=array("medal" => $medal,"sports" => $sports,"sportscategory" => $sportscategory,"year" => $year,"agegroup" => $agegroup);
$query=$this->db->insert( "sfa_medalwon", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_medalwon")->row();
return $query;
}
function getsinglemedalwon($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_medalwon")->row();
return $query;
}
public function edit($id,$medal,$sports,$sportscategory,$year,$agegroup,$timestamp)
{
$data=array("medal" => $medal,"sports" => $sports,"sportscategory" => $sportscategory,"year" => $year,"agegroup" => $agegroup,"timestamp" => $timestamp);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_medalwon", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_medalwon` WHERE `id`='$id'");
return $query;
}
}
?>
