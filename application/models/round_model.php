<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class round_model extends CI_Model
{
public function create($sports,$sportscategory,$year,$agegroup,$level,$root)
{
$data=array("sports" => $sports,"sportcategory" => $sportscategory,"year" => $year,"agegroup" => $agegroup,"level" => $level,"root" => $root);
$query=$this->db->insert( "sfa_round", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_round")->row();
return $query;
}
function getsingleround($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_round")->row();
return $query;
}
public function edit($id,$sports,$sportscategory,$year,$agegroup,$level,$root)
{
$data=array("sports" => $sports,"sportcategory" => $sportscategory,"year" => $year,"agegroup" => $agegroup,"level" => $level,"root" => $root);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_round", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_round` WHERE `id`='$id'");
return $query;
}
public function getrounddropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_round`  ORDER BY `id` ASC")->result();
		$root=array(
		);
		foreach($query as $row)
		{
			$root[$row->id]=$row->level;
		}
		
		return $root;
	}
}
?>
