<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class modules_model extends CI_Model
{
public function create($name,$status,$url,$type,$text)
{
$data=array("name" => $name,"status" => $status,"url" => $url,"type" => $type,"text" => $text);
$query=$this->db->insert( "sfa_modules", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_modules")->row();
return $query;
}
function getsinglemodules($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_modules")->row();
return $query;
}
public function edit($id,$name,$status,$url,$type,$text)
{
$data=array("name" => $name,"status" => $status,"url" => $url,"type" => $type,"text" => $text);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_modules", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_modules` WHERE `id`='$id'");
return $query;
}
}
?>
