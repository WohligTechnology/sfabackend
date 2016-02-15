<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class match_model extends CI_Model
{
public function create($sports,$sportscategory,$agegroup,$status,$resulttimestamp,$matchresult,$name,$starttime,$endtime,$gender,$matchdate,$round,$url)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => $status,"resulttimestamp" => $resulttimestamp,"matchresult" => $matchresult,"name" => $name,"starttime" => $starttime,"endtime" => $endtime,"gender" => $gender,"matchdate" => $matchdate,"round" => $round,"url" => $url);
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
    function exportschedulecsv()
	{
		$this->load->dbutil();
		$query=$this->db->query("SELECT `sfa_match`.`id` as `matchid`,`sfa_sports`.`name` as `sports`, `sfa_sportscategory`.`title` as `sportscategory`, `sfa_agegroups`.`name` as `agegroup`, `sfa_match`.`timestamp`, `sfa_match`.`matchresult`, `sfa_match`.`name` as `courtname`, `sfa_match`.`starttime`, `sfa_match`.`endtime`, `gender`.`name` as `gender`, `sfa_match`.`matchdate`, `sfa_round`.`level` as `round`,GROUP_CONCAT(`sfa_team`.`title`) as `No of Teams`,GROUP_CONCAT(`sfa_student`.`name`) as `No of Students` FROM `sfa_match`
LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports`
LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_match`.`sportscategory`
LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_match`.`agegroup`
LEFT OUTER JOIN `gender` ON `gender`.`id`=`sfa_match`.`gender`
LEFT OUTER JOIN `sfa_round` ON `sfa_round`.`id`=`sfa_match`.`round`
LEFT OUTER JOIN `sfa_matchplayed` ON `sfa_matchplayed`.`match`=`sfa_match`.`id`
LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_matchplayed`.`student`
LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_matchplayed`.`team`
GROUP BY `sfa_match`.`id`");

       $content= $this->dbutil->csv_from_result($query);
        //$data = 'Some file data';
$timestamp=new DateTime();
        $timestamp=$timestamp->format('Y-m-d_H.i.s');
        if ( ! write_file("./uploads/matchfile_$timestamp.csv", $content))
        {
             echo 'Unable to write the file';
        }
        else
        {
            redirect(base_url("uploads/matchfile_$timestamp.csv"), 'refresh');
             echo 'File written!';
        }
	}
public function edit($id,$sports,$sportscategory,$agegroup,$status,$timestamp,$resulttimestamp,$matchresult,$name,$starttime,$endtime,$gender,$matchdate,$round,$url)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => $status,"timestamp" => $timestamp,"resulttimestamp" => $resulttimestamp,"matchresult" => $matchresult,"name" => $name,"starttime" => $starttime,"endtime" => $endtime,"gender" => $gender,"matchdate" => $matchdate,"round" => $round,"url" => $url);
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

            $matchdate=trim($row['matchdate']);
            $court=trim($row['court']);
            $round=trim($row['round']);
            $agegroup=trim($row['agegroup']);
            $gender=trim($row['gender']);
            $starttime=trim($row['starttime']);
            $endtime=trim($row['endtime']);
            $sports=trim($row['sports']);
            $sportscategory=trim($row['sportscategory']);
            $won=trim($row['won']);
            $lost=trim($row['lost']);
//            $team1=trim($row['team1']);
             $last_key = key( array_slice( $row, -1, 1, TRUE ) );
            $noofcount = substr($last_key, 4);


            if($gender=="male"){
                $genderid=1;
            } else{
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
            // MATCH TEAM OR STUDENTS


            for($i=1;$i<=$noofcount;$i++)
            {
                $team=trim($row["team$i"]);
                $checkstud= substr($team, 3, 2);
                if($checkstud != "TE")
                {
                      // //////////////////////////// STUDENT


                    $team=explode(",",$team);
                    $getid= substr($team[0], 5, 6);
                    $getid=intval($getid);


                    if($team[2] =="won"){
                        $result=1;
                    }
                    else if($team[2] =="lost"){

                        $result=2;
                    }
                    else if($team[2] =="draw"){

                        $result=3;
                    }

                     $data  = array(
                    'match' => $id,
                     'student' =>$getid,
                     'reason' =>$team[1],
                     'result' => $result
                    );
                    $query=$this->db->insert( 'sfa_matchplayed', $data );
                    $matchplayedid=$this->db->insert_id();
                }
                else
                {
                          ////////////////////////////// it is a TEAM
                    $team=explode(",",$team);
                    $getid= substr($team[0], 5, 6);
                    $getid=intval($getid);

                    if($team[2] =="won"){
                        $result=1;
                    }
                    else if($team[2] =="lost"){

                        $result=2;
                    }
                    else if($team[2] =="draw"){

                        $result=3;
                    }

                         $data  = array(
                    'match' => $id,
                    'team' =>$getid,
                    'reason' =>$team[1],
                    'result' => $result
                    );
                    $query=$this->db->insert( 'sfa_matchplayed', $data );
                    $matchplayedid=$this->db->insert_id();
                }
            }

        }
			return  1;
}
    
    
     public function createvideobycsv($file)
	{
        foreach ($file as $row)
        {

            $matchid=trim($row['matchid']);
            $url=trim($row['url']);
            
            $data=array("url" => $url);
            $this->db->where( "id", $matchid );
            $query=$this->db->update( "sfa_match", $data );

         }
          
			return  1;
     }
}
?>
