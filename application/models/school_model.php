<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class school_model extends CI_Model
{
public function create($name,$email,$contact,$image,$location,$address,$biography)
{
$data=array("name" => $name,"email" => $email,"contact" => $contact,"image" => $image,"location" => $location,"address" => $address,"biography" => $biography);
$query=$this->db->insert( "sfa_school", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_school")->row();
return $query;
}
function getsingleschool($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_school")->row();
return $query;
}
public function edit($id,$name,$email,$contact,$image,$location,$address,$biography)
{
$data=array("name" => $name,"email" => $email,"contact" => $contact,"image" => $image,"location" => $location,"address" => $address,"biography" => $biography);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_school", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_school` WHERE `id`='$id'");
return $query;
}
	public function getschooldropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_school`  ORDER BY `id` ASC")->result();
		$school=array(
		);
		foreach($query as $row)
		{
			$school[$row->id]=$row->name;
		}
		
		return $school;
	}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_school` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
