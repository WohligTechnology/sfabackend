<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class team_model extends CI_Model
{
public function create($sportscategory,$agegroup,$year,$title,$sport,$school)
{
$data=array("sportscategory" => $sportscategory,"agegroup" => $agegroup,"year" => $year,"title"=>$title,"sport"=>$sport,"school"=>$school);
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
public function edit($id,$sportscategory,$agegroup,$year,$title,$sport,$school)
{
$data=array("sportscategory" => $sportscategory,"agegroup" => $agegroup,"year" => $year,"title"=>$title,"sport"=>$sport,"school"=>$school);
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
            "" => "Choose Team"
		);
		foreach($query as $row)
		{
			$team[$row->id]=$row->title;
		}
		
		return $team;
	}
    public function exportteamstudentcsv()
	{
	    $this->load->dbutil();
		$query=$this->db->query("SELECT CONCAT('SFATE',LPAD(`sfa_team`.`id`,6,0)) as `Sfa Team id`, `sfa_team`.`title` as `Team Name`,GROUP_CONCAT(`sfa_student`.`name`) as `Team Students` FROM `sfa_team` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_team`.`id` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_teamstudents`.`student` WHERE 1 GROUP BY `sfa_team`.`id`");

       $content= $this->dbutil->csv_from_result($query);
        //$data = 'Some file data';
$timestamp=new DateTime();
        $timestamp=$timestamp->format('Y-m-d_H.i.s');
        if ( ! write_file("./uploads/teamfile_$timestamp.csv", $content))
        {
             echo 'Unable to write the file';
        }
        else
        {
            redirect(base_url("uploads/teamfile_$timestamp.csv"), 'refresh');
             echo 'File written!';
        }
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
