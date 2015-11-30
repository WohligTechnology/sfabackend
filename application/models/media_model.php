<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class media_model extends CI_Model
{
	
public function create($status,$order,$name,$icon,$json,$date,$school)
{
	$data=array("status" => $status,"order" => $order,"name" => $name,"icon" => $icon,"json" => $json,"date" => $date,"school" => $school);
	$query=$this->db->insert( "sfa_media", $data );
	$id=$this->db->insert_id();
	if(!$query)
	return  0;
	else
	return  $id;
}
	
public function getmediastudent($id)
	{
         $return=array();
		$query=$this->db->query("SELECT `sfa_student`.`id`,`sfa_student`.`name` FROM `sfa_student` inner join `sfa_mediastudents` ON `sfa_student`.`id` = `sfa_mediastudents`.`student`  WHERE `sfa_mediastudents`.`student`='$id'");
        if($query->num_rows() > 0)
        {
            $query=$query->result();
            foreach($query as $row)
            {
                $return[]=$row->id;
            }
        }
         return $return;
         
		
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
public function edit($id,$status,$order,$name,$icon,$json,$school,$date)
{
$data=array("status" => $status,"order" => $order,"name" => $name,"icon" => $icon,"json" => $json,"school" => $school,"date" => $date);
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