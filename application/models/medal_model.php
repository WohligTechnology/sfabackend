<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class medal_model extends CI_Model
{
public function create($name,$order,$image)
{
$data=array("name" => $name,"order" => $order,"image" => $image);
$query=$this->db->insert( "sfa_medal", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_medal")->row();
return $query;
}
function getsinglemedal($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_medal")->row();
return $query;
}
public function edit($id,$name,$order,$image)
{
$data=array("name" => $name,"order" => $order,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_medal", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_medal` WHERE `id`='$id'");
return $query;
}
	public function getmedaldropdown()
	{
		$query=$this->db->query("SELECT * FROM `sfa_medal`  ORDER BY `id` ASC")->result();
		$medal=array(
		);
		foreach($query as $row)
		{
			$medal[$row->id]=$row->name;
		}
		
		return $medal;
	}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_medal` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
