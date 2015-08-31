<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class schoolregistrationsports_model extends CI_Model
{
public function create($schoolregistration,$registrationsports)
{
$data=array("schoolregistration" => $schoolregistration,"registrationsports" => $registrationsports);
$query=$this->db->insert( "schoolregistrationsports", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("schoolregistrationsports")->row();
return $query;
}
function getsingleteamstudents($id){
$this->db->where("id",$id);
$query=$this->db->get("schoolregistrationsports")->row();
return $query;
}
public function edit($id,$schoolregistration,$registrationsports)
{
$data=array("schoolregistration" => $schoolregistration,"registrationsports" => $registrationsports);
$this->db->where( "id", $id );
$query=$this->db->update( "schoolregistrationsports", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `schoolregistrationsports` WHERE `id`='$id'");
return $query;
}
}
?>
