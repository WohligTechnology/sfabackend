<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class matchplayed_model extends CI_Model
{
public function create($match,$type,$order,$team,$student,$result,$round,$reason)
{
$data=array("match" => $match,"type" => $type,"order" => $order,"team" => $team,"student" => $student,"result" => $result,"round" => $round,"reason" => $reason);
$query=$this->db->insert( "sfa_matchplayed", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_matchplayed")->row();
return $query;
}
function getsinglematchplayed($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_matchplayed")->row();
return $query;
}
public function edit($id,$match,$type,$order,$team,$student,$result,$round,$reason)
{
$data=array("match" => $match,"type" => $type,"order" => $order,"team" => $team,"student" => $student,"result" => $result,"round" => $round,"reason" => $reason);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_matchplayed", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_matchplayed` WHERE `id`='$id'");
return $query;
}
		public function gettypedropdown()
	{
		$type=array(
			"0" => "Student",
			"1" => "Team"
		);
//		foreach($query as $row)
//		{
//			$return[$row->id]=$row->name;
//		}
		
		return $type;
	}	
	public function getresultdropdown()
	{
		$type=array(
			"0" => "Won",
			"1" => "Lost",
			"2" => "Draw"
		);
//		foreach($query as $row)
//		{
//			$return[$row->id]=$row->name;
//		}
		
		return $type;
	}
}
?>
