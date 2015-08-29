<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class match_model extends CI_Model
{
public function create($sports,$sportscategory,$agegroup,$status,$resulttimestamp,$matchresult,$name)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => $status,"resulttimestamp" => $resulttimestamp,"matchresult" => $matchresult,"name" => $name);
$query=$this->db->insert( "sfa_match", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_match")->row();
return $query;
}
function getsinglematch($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_match")->row();
return $query;
}
public function edit($id,$sports,$sportscategory,$agegroup,$status,$timestamp,$resulttimestamp,$matchresult,$name)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => $status,"timestamp" => $timestamp,"resulttimestamp" => $resulttimestamp,"matchresult" => $matchresult,"name" => $name);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_match", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_match` WHERE `id`='$id'");
return $query;
}
 public function getmatchdropdown()
	{
		$query=$this->db->query("SELECT * FROM `sfa_match`  ORDER BY `id` ASC")->result();
		$match=array(
		);
		foreach($query as $row)
		{
			$match[$row->id]=$row->name;
		}
		
		return $match;
	} 
}
?>
