<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class articles_model extends CI_Model
{
public function create($name,$status,$image,$json,$text)
{
$data=array("name" => $name,"status" => $status,"image" => $image,"json" => $json,"text" => $text);
$query=$this->db->insert( "sfa_articles", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_articles")->row();
return $query;
}
function getsinglearticles($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_articles")->row();
return $query;
}
public function edit($id,$name,$status,$image,$json,$text)
{
$data=array("name" => $name,"status" => $status,"image" => $image,"json" => $json,"text" => $text);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_articles", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_articles` WHERE `id`='$id'");
return $query;
}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_articles` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
