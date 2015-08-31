<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class registrationsports_model extends CI_Model
{
public function create($name)
{
$data=array("name" => $name);
$query=$this->db->insert( "registrationsports", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("registrationsports")->row();
return $query;
}
function getsinglebanner($id){
$this->db->where("id",$id);
$query=$this->db->get("registrationsports")->row();
return $query;
}
public function edit($id,$name)
{
$data=array("name" => $name);
$this->db->where( "id", $id );
$query=$this->db->update( "registrationsports", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `registrationsports` WHERE `id`='$id'");
return $query;
}
}
?>
