<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class media_model extends CI_Model
{
public function create($status,$order,$name,$icon,$json)
{
$data=array("status" => $status,"order" => $order,"name" => $name,"icon" => $icon,"json" => $json);
$query=$this->db->insert( "sfa_media", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_media")->row();
return $query;
}
function getsinglemedia($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_media")->row();
return $query;
}
public function edit($id,$status,$order,$name,$icon,$json)
{
$data=array("status" => $status,"order" => $order,"name" => $name,"icon" => $icon,"json" => $json);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_media", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_media` WHERE `id`='$id'");
	$query=$this->db->query("DELETE FROM `sfa_mediaitem` WHERE `media`='$id'");
return $query;
}
	 public function getmediadropdown()
	{
		$query=$this->db->query("SELECT * FROM `sfa_media`  ORDER BY `id` ASC")->result();
		$media=array(
		);
		foreach($query as $row)
		{
			$media[$row->id]=$row->name;
		}
		
		return $media;
	}
	public function geticonbyid($id){
		$query=$this->db->query("SELECT `icon` FROM `sfa_media` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
