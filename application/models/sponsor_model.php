<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class sponsor_model extends CI_Model
{
public function create($name,$description,$order,$status,$image)
{
$data=array("name" => $name,"description" => $description,"order" => $order,"status" => $status,"image" => $image);
$query=$this->db->insert( "sponsor", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
	
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sponsor")->row();
return $query;
}

public function edit($id,$name,$description,$order,$status,$image)
{
$data=array("name" => $name,"description" => $description,"order" => $order,"status" => $status,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "sponsor", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sponsor` WHERE `id`='$id'");
return $query;
}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sponsor` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
