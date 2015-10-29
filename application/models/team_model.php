<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class team_model extends CI_Model
{
public function create($sportscategory,$agegroup,$year,$title)
{
$data=array("sportscategory" => $sportscategory,"agegroup" => $agegroup,"year" => $year,"title"=>$title);
$query=$this->db->insert( "sfa_team", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_team")->row();
return $query;
}
function getsingleteam($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_team")->row();
return $query;
}
public function edit($id,$sportscategory,$agegroup,$year,$title)
{
$data=array("sportscategory" => $sportscategory,"agegroup" => $agegroup,"year" => $year,"title"=>$title);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_team", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_team` WHERE `id`='$id'");
return $query;
}
public function getteamdropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_team`  ORDER BY `id` ASC")->result();
		$team=array(
		);
		foreach($query as $row)
		{
			$team[$row->id]=$row->title;
		}
		
		return $team;
	}
    
     public function createbycsv($file)
	{
        foreach ($file as $row)
        {
            $sportscategory=$row['sportscategory'];
            $agegroup=$row['agegroup'];
            $year=$row['year'];
            $title=$row['title'];
            
            $query1=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` LIKE '$sportscategory'")->row();
            $sportscategoryid=$query1->id;
            
            $query2=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` LIKE '$agegroup'")->row();
            $agegroupid=$query2->id;
            
            $query3=$this->db->query("SELECT `id` FROM `sfa_year` WHERE `name` LIKE '$year'")->row();
            $yearid=$query3->id;
            
		$data  = array(
			'sportscategory' => $sportscategoryid,
			'agegroup' => $agegroupid,
			'year' => $yearid,
			'title' => $title
		);
		$query=$this->db->insert( 'sfa_team', $data );
		$id=$this->db->insert_id();
         
            
        }
			return  1;
	}
}
?>
