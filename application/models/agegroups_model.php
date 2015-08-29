<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class agegroups_model extends CI_Model
{
public function create($name,$status,$order,$json)
{
$data=array("name" => $name,"status" => $status,"order" => $order,"json" => $json);
$query=$this->db->insert( "sfa_agegroups", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_agegroups")->row();
return $query;
}
function getsingleagegroups($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_agegroups")->row();
return $query;
}
public function edit($id,$name,$status,$order,$json)
{
$data=array("name" => $name,"status" => $status,"order" => $order,"json" => $json);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_agegroups", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_agegroups` WHERE `id`='$id'");
return $query;
}
public function getagegroupsdropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_agegroups`  ORDER BY `id` ASC")->result();
		$agegroups=array(
		);
		foreach($query as $row)
		{
			$agegroups[$row->id]=$row->name;
		}
		
		return $agegroups;
	}
}
?>
