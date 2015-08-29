<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class teamstudents_model extends CI_Model
{
public function create($team,$student)
{
$data=array("team" => $team,"student" => $student);
$query=$this->db->insert( "sfa_teamstudents", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_teamstudents")->row();
return $query;
}
function getsingleteamstudents($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_teamstudents")->row();
return $query;
}
public function edit($id,$team,$student)
{
$data=array("team" => $team,"student" => $student);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_teamstudents", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_teamstudents` WHERE `id`='$id'");
return $query;
}
}
?>
