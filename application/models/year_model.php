<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class year_model extends CI_Model
{
public function create($name,$status,$order)
{
$data=array("name" => $name,"status" => $status,"order" => $order);
$query=$this->db->insert( "sfa_year", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_year")->row();
return $query;
}
function getsingleyear($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_year")->row();
return $query;
}
public function edit($id,$name,$status,$order)
{
$data=array("name" => $name,"status" => $status,"order" => $order);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_year", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_year` WHERE `id`='$id'");
return $query;
}
public function getyeardropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_year`  ORDER BY `id` ASC")->result();
		$year=array(
		);
		foreach($query as $row)
		{
			$year[$row->id]=$row->name;
		}
		
		return $year;
	}
}
?>
