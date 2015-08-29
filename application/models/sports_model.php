<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class sports_model extends CI_Model
{
public function create($name,$status,$order,$icon,$json,$about,$eligibility,$rules)
{
$data=array("name" => $name,"status" => $status,"order" => $order,"icon" => $icon,"json" => $json,"about" => $about,"eligibility" => $eligibility,"rules" => $rules);
$query=$this->db->insert( "sfa_sports", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_sports")->row();
return $query;
}
function getsinglesports($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_sports")->row();
return $query;
}
public function edit($id,$name,$status,$order,$icon,$json,$about,$eligibility,$rules)
{
$data=array("name" => $name,"status" => $status,"order" => $order,"icon" => $icon,"json" => $json,"about" => $about,"eligibility" => $eligibility,"rules" => $rules);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_sports", $data );
return 1;
}
public function delete($id)
{
$query1=$this->db->query("SELECT * FROM `sfa_sportscategory` WHERE `id`='$id'")->row();
$sports=$query1->sports;
$query=$this->db->query("DELETE FROM `sfa_sports` WHERE `id`='$id'");
$query=$this->db->query("DELETE FROM `sfa_sportscategory` WHERE `sports`='$sports'");
return $query;
}
	public function getsportsdropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_sports`  ORDER BY `id` ASC")->result();
		$sports=array(
		);
		foreach($query as $row)
		{
			$sports[$row->id]=$row->name;
		}
		
		return $sports;
	}
	public function getsportstypedropdown()
	{
		$type=array(
			"0" => "team",
			"1" => "single"
		);
		return $type;
	}
	public function geticonbyid($id){
		$query=$this->db->query("SELECT `icon` FROM `sfa_sports` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
