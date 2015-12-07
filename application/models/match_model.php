<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class match_model extends CI_Model
{
public function create($sports,$sportscategory,$agegroup,$status,$resulttimestamp,$matchresult,$name,$starttime,$endtime,$gender,$matchdate,$round)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => $status,"resulttimestamp" => $resulttimestamp,"matchresult" => $matchresult,"name" => $name,"starttime" => $starttime,"endtime" => $endtime,"gender" => $gender,"matchdate" => $matchdate,"round" => $round);
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
public function edit($id,$sports,$sportscategory,$agegroup,$status,$timestamp,$resulttimestamp,$matchresult,$name,$starttime,$endtime,$gender,$matchdate,$round)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => $status,"timestamp" => $timestamp,"resulttimestamp" => $resulttimestamp,"matchresult" => $matchresult,"name" => $name,"starttime" => $starttime,"endtime" => $endtime,"gender" => $gender,"matchdate" => $matchdate,"round" => $round);
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
     public function createbycsv($file)
	{
        foreach ($file as $row)
        {
            $matchdate=$row['matchdate'];
            $court=$row['court'];
            $round=$row['round'];
            $agegroup=$row['agegroup'];
            $gender=$row['gender'];
            $starttime=$row['starttime'];
            $endtime=$row['endtime'];
            $sports=$row['sports'];
            $sportscategory=$row['sportscategory'];
            if($gender=="male"){
            $genderid=1;
            }else{
            $genderid=2;
            }
            $matchdate = date_create($matchdate);
            $matchdate=date_format($matchdate, 'Y-m-d');
            
            $query1=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` = '$agegroup'")->row();
            $agegroupid=$query1->id;
            
            $query2=$this->db->query("SELECT `id` FROM `sfa_sports` WHERE `name` = '$sports'")->row();
            $sportsid=$query2->id;
            
            $query3=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` = '$sportscategory' AND `sports`='$sportsid'")->row();
            $sportscategoryid=$query3->id;
            
            
		$data  = array(
			'matchdate' => $matchdate,
			'name' => $court,
			'round' => $roundid,
			'agegroup' => $agegroupid,
			'gender' => $genderid,
			'starttime' => $starttime,
			'endtime' => $endtime,
			'sports' => $sportsid,
			'sportscategory' => $sportscategoryid,
			'status' => 1
		);
		$query=$this->db->insert( 'sfa_match', $data );
		$id=$this->db->insert_id();
            
          $query5=$this->db->query("SELECT `id` FROM `sfa_round` WHERE `level` LIKE '$round'")->row();
            $roundid=$query5->id;
            
                $data=array("round" => $roundid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_match", $data );
            
            if(empty($query5)){
                 $data  = array(
                'level' => $round
                );
                $query=$this->db->insert( 'sfa_round', $data );
                $roundid=$this->db->insert_id();
                
                
                $data=array("round" => $roundid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_match", $data );
                
            }
            
            
            
            
        }
			return  1;
	}
}
?>
