<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class sportscategory_model extends CI_Model
{
public function create($sports,$title,$order,$status,$type,$json)
{
$data=array("sports" => $sports,"title" => $title,"order" => $order,"status" => $status,"type" => $type,"json" => $json);
$query=$this->db->insert( "sfa_sportscategory", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_sportscategory")->row();
return $query;
}
function getsinglesportscategory($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_sportscategory")->row();
return $query;
}
public function edit($id,$sports,$title,$order,$status,$type,$json)
{
$data=array("sports" => $sports,"title" => $title,"order" => $order,"status" => $status,"type" => $type,"json" => $json);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_sportscategory", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_sportscategory` WHERE `id`='$id'");
return $query;
}
public function getsportscategorydropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_sportscategory`  ORDER BY `id` ASC")->result();
		$sportscategory=array(
		);
		foreach($query as $row)
		{
			$sportscategory[$row->id]=$row->title;
		}
		
		return $sportscategory;
	}
}
?>
