<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class enquiries_model extends CI_Model
{
public function create($name,$address,$establishdate,$contactperson,$type,$email,$mobile,$landline)
{
$data=array("name" => $name,"address" => $address,"establishdate" => $establishdate,"contactperson" => $contactperson,"type" => $type,"email" => $email,"mobile" => $mobile,"landline" => $landline);
$query=$this->db->insert( "enquiries", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("enquiries")->row();
return $query;
}
function getsinglemedal($id){
$this->db->where("id",$id);
$query=$this->db->get("enquiries")->row();
return $query;
}
public function edit($id,$name,$address,$establishdate,$contactperson,$type,$email,$mobile,$landline,$timestamp)
{
$data=array("name" => $name,"address" => $address,"establishdate" => $establishdate,"contactperson" => $contactperson,"type" => $type,"email" => $email,"mobile" => $mobile,"landline" => $landline);
$this->db->where( "id", $id );
$query=$this->db->update( "enquiries", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `enquiries` WHERE `id`='$id'");
return $query;
}
	public function getschooltypedropdown()
	{
		
		$return=array(
            "1"=>"Boys",
            "2"=>"Girls",
            "3"=>"Both"
		);
		
		return $return;
	}	
    public function getschoolregisterdropdown()
	{
	$query=$this->db->query("SELECT * FROM `enquiries`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    public function getregistrationsportsdropdown()
	{
	$query=$this->db->query("SELECT * FROM `registrationsports`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
}
?>
