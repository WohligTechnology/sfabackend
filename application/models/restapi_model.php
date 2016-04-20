<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class restapi_model extends CI_Model
{
public function getbannersliders()
{
 $query=$this->db->query("SELECT `sfa_bannerslides`.`id`, `sfa_bannerslides`.`order`, `sfa_bannerslides`.`icon`, `sfa_bannerslides`.`title`, `sfa_bannerslides`.`link`, `sfa_bannerslides`.`image`, `sfa_bannerslides`.`banner`,`sfa_bannerslides`.`description`,`sfa_bannerslides`.`startdate`,`sfa_bannerslides`.`enddate`,`sfa_banner`.`id` as `bannerid`, `sfa_banner`.`name`, `sfa_banner`.`status` FROM `sfa_bannerslides` LEFT OUTER JOIN `sfa_banner` ON `sfa_banner`.`id`=`sfa_bannerslides`.`banner` ORDER BY `id` ASC")->result();
    return $query;
}

    public function getgetregistrationsports()
    {
        $query=$this->db->query("SELECT * FROM `registrationsports`")->result();
        return $query;
    }
    public function getschoolnames()
    {
        $query=$this->db->query("SELECT * FROM `sfa_school`")->result();
        return $query;
    }
    public function registerschool($name,$address,$establishdate,$contactperson,$type,$email,$mobile,$landline,$sports)
    {
        $query=$this->db->query("INSERT INTO `schoolregistration`(`name`, `address`, `establishdate`, `contactperson`, `type`, `email`, `mobile`, `landline`, `timestamp`) VALUES ('$name','$address','$establishdate','$contactperson','$type','$email','$mobile','$landline',NULL)");
        $id=$this->db->insert_id();
        if(!empty($sports))
        {
            foreach($sports as $key=>$value)
            {
                $insert=$this->db->query("INSERT INTO `schoolregistrationsports`(`schoolregistration`, `registrationsports`) VALUES ('$id','$value')");
            }
        }
        if(!$query)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    public function getnewsletter($email){
     $query=$this->db->query("INSERT INTO `newsletter`(`email`) VALUES ('$email')");
        $id=$this->db->insert_id();
        if($id)
        return 1;
        else
        return 0;
    }

//	public function get
    public function getschoolprofile($id){
//      $query['school']=$this->db->query("SELECT `id`, `name`, `email`, `contact`, `image`, `address`, `location`, `biography`, `authority` FROM `sfa_school` WHERE `id`='$id'")->row();
//        $query['school']->participant=$this->db->query("SELECT COUNT(*) as `participant` FROM `sfa_student` WHERE `school`='$id'")->row();
//
//        $query1=$this->db->query("SELECT DISTINCT(`sfa_student`.`sports`) FROM `sfa_student` WHERE `sfa_student`.`school`='$id'")->result();
//        foreach($query1 as $row){
//            $query['sportname']=array();
//            $query2=$this->db->query("SELECT `id`, `name`, `status`, `order`, `icon`, `about`, `eligibility`, `rules`, `json` FROM `sfa_sports` WHERE `id`=$row->sports")->row();
//            array_push($query['sportname'],$query2);
//
//        }

	    $query['school'] = $this->db->query("SELECT *,CONCAT('SFASC',LPAD(`sfa_school`.`id`,6,0)) as `sfaschoolid` FROM `sfa_school` WHERE `id` = $id")->row();

	    $query['participant'] = $this->db->query("SELECT count(`sfa_student`.`id`) as `studentcount` FROM `sfa_student` INNER JOIN `sfa_school` ON `sfa_student`.`school` = `sfa_school`.`id` where `sfa_school`.`id` = $id")->row();

	    $query['sportname'] = $this->db->query("SELECT distinct `sfa_sports`.`id`, `sfa_sports`.`name` FROM `sfa_sports` INNER JOIN `sfa_studentsport` ON `sfa_sports`.`id` = `sfa_studentsport`.`sport` INNER JOIN `sfa_student` ON `sfa_studentsport`.`student` = `sfa_student`.`id` WHERE `sfa_student`.`school` = $id")->result();

      // $query1['teamcase']=$this->db->query("SELECT DISTINCT `sfa_match`.`sports` AS `id`,`sfa_sports`.`name` FROM `sfa_teamstudents` LEFT OUTER JOIN `sfa_matchplayed` ON `sfa_teamstudents`.team=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_match` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports`  INNER JOIN `sfa_school` ON `sfa_student`.`school` = `sfa_school`.`id` where `sfa_school`.`id` = $id")->result();
      // //  print_r($query1['teamcase']);
      //
      // $query1['studentcase']=$this->db->query("SELECT DISTINCT `sfa_match`.`sports` AS `id`,`sfa_sports`.`name` FROM `sfa_matchplayed` LEFT OUTER JOIN `sfa_match` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports`  INNER JOIN `sfa_school` ON `sfa_student`.`school` = `sfa_school`.`id` where `sfa_school`.`id` = $id")->result();
      // //  print_r($query1['studentcase']);
      //
      // $query['sportname']=array_merge($query1['teamcase'],$query1['studentcase']);

	    $query['agegroup'] = $this->db->query("SELECT `sfa_sports`.`id`, `sfa_sports`.`name`, `sfa_student`.`agegroup`, `sfa_agegroups`.`name` from `sfa_sports` INNER JOIN `sfa_studentsport` ON `sfa_sports`.`id` = `sfa_studentsport`.`sport` INNER JOIN `sfa_student` ON `sfa_studentsport`.`student` = `sfa_student`.`id` INNER JOIN `sfa_agegroups` ON `sfa_student`.`agegroup` = `sfa_agegroups`.`id` WHERE `sfa_student`.`school` = $id GROUP BY `sfa_agegroups`.`name`")->result();

        return $query;

    }

	public function isStudentSports(){
			$query= $this->db->query("SELECT distinct `sfa_sports`.`id`, `sfa_sports`.`name` FROM `sfa_sports` INNER JOIN `sfa_studentsport` ON `sfa_sports`.`id` = `sfa_studentsport`.`sport` INNER JOIN `sfa_student` ON `sfa_studentsport`.`student` = `sfa_student`.`id`")->result();

		return $query;
	}

	public function getAgeGroup($id, $sport){

		$where = "WHERE 1 AND ";

	 if($id != "") {
		 $where.=" `sfa_student`.`school` = $id  AND" ;
	 }
	 else {
		 $where.=" " ;
	 }
	 if($sport != "") {
		 $where.="  `sfa_sports`.`id` = $sport AND " ;
	 }
	 else {
		 $where.=" " ;
	 }

	 $where .= " 1 ";

   $query=$this->db->query("SELECT `sfa_sports`.`id`, `sfa_sports`.`name`, `sfa_student`.`agegroup`,`sfa_agegroups`.`name`
   from `sfa_sports` INNER JOIN `sfa_studentsport` ON `sfa_sports`.`id` = `sfa_studentsport`.`sport`
   INNER JOIN `sfa_student` ON `sfa_studentsport`.`student` = `sfa_student`.`id`
   INNER JOIN `sfa_agegroups` ON `sfa_student`.`agegroup` = `sfa_agegroups`.`id` $where GROUP BY `sfa_agegroups`.`name`")->result();
   return $query;
	}

	public function scheduleAgeGroup($category, $sport, $gender){

		$where = "WHERE 1 AND ";

	 if($category != "") {
		 $where.=" `sfa_sportcategorystudent`.`sportscategory` = $category  AND" ;
	 }
	 else {
		 $where.=" " ;
	 }

	 if($sport != "") {
		 $where.="  `sfa_sports`.`id` = $sport AND " ;
	 }
	 else {
		 $where.=" " ;
	 }

	 if($gender != "") {
		 $where.="  `sfa_student`.`gender` = $gender AND " ;
	 }
	 else {
		 $where.=" " ;
	 }

	 $where .= " 1 ";

		$query=$this->db->query("SELECT `sfa_sports`.`id`, `sfa_sports`.`name`, `sfa_student`.`agegroup`,`sfa_agegroups`.`name` from `sfa_sports`
INNER JOIN `sfa_studentsport` ON `sfa_sports`.`id` = `sfa_studentsport`.`sport`
INNER JOIN `sfa_student` ON `sfa_studentsport`.`student` = `sfa_student`.`id`
INNER JOIN `sfa_sportcategorystudent` ON `sfa_student`.`id` = `sfa_sportcategorystudent`.`student`
INNER JOIN `sfa_agegroups` ON `sfa_student`.`agegroup` = `sfa_agegroups`.`id`
$where GROUP BY `sfa_agegroups`.`name`")->result();
		return $query;
	}

	public function getSportsCategory($id, $sport, $agegroup){

		$where = "WHERE 1 AND ";
		if($id != "") {
			$where.= " `sfa_school`.`id` = $id AND ";
		}else{
			$where.=" ";
		}

	 if($sport != "") {
		 $where.="  `sfa_sportcategorystudent`.`sport` = $sport AND " ;
	 }
	 else {
		 $where.=" " ;
	 }

	 if($agegroup != "") {
		 $where.="  `sfa_student`.`agegroup` = $agegroup AND " ;
	 }
	 else {
		 $where.=" " ;
	 }

	 $where .= " 1 ";

		$query=$this->db->query("SELECT `sfa_sportscategory`.`id`,`sfa_sportscategory`.`title` FROM `sfa_sportscategory` INNER JOIN `sfa_sportcategorystudent` ON `sfa_sportscategory`.`id` = `sfa_sportcategorystudent`.`sportscategory` INNER JOIN `sfa_student` ON `sfa_sportcategorystudent`.`student` = `sfa_student`.`id` INNER JOIN `sfa_school` ON `sfa_student`.`school` = `sfa_school`.`id` $where GROUP BY `id`")->result();
		return $query;
	}

	public function getSchoolSports($id,$sport,$agegroup,$gender){

		$where = "WHERE 1  ";
		$where.= "AND `sfa_student`.`school` = $id";

	 if($sport != "") {
		 $where.=" AND `sfa_studentsport`.`sport` = $sport" ;
	 }
	 if($agegroup != "") {
		 $where.=" AND `sfa_student`.`agegroup` = $agegroup" ;
	 }
	 if($gender != "") {
		 $where.=" AND `sfa_student`.`gender` = $gender" ;
	 }


$q= "SELECT DISTINCT LPAD(`sfa_student`.`id`,6,'0') AS 'id',`sfa_student`.`name`,`sfa_student`.`image`,`sfa_team`.`title` FROM `sfa_student`
LEFT OUTER JOIN `sfa_studentsport` ON `sfa_student`.`id` = `sfa_studentsport`.`student`
LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`student` =  `sfa_studentsport`.`student`
LEFT OUTER JOIN `sfa_team` ON `sfa_teamstudents`.`team` = `sfa_team`.`id`
INNER JOIN `sfa_sports` ON `sfa_sports`.`id` = `sfa_studentsport`.`sport`  $where";
		$query=$this->db->query($q)->result();

		return $query;
	}

	public function getschoolgallery($schoolid,$studentid,$year,$agegroup,$sportscategory){
    	$where = "WHERE 1";



    if($year != "") {
      $where.=" AND year(`sfa_match`.`matchdate`) IN ($year) " ;
    }

    if($agegroup != "") {
      $where.=" AND `sfa_match`.`agegroup` IN ($agegroup)" ;
    }

    if($sportscategory != "") {
      $where.=" AND `sfa_match`.`sports` = $sportscategory" ;
    }

if($schoolid != "") {
  $where.=" AND `sfa_school`.`id` = $schoolid" ;
  $query=$this->db->query("SELECT DISTINCT `sfa_match`.`url` FROM `sfa_match` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team` = `sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student` LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` $where")->result();
}

if($studentid != "") {
  $where.=" AND `sfa_student`.`id` = $studentid" ;
  $query=$this->db->query("SELECT DISTINCT `sfa_match`.`url` FROM `sfa_match` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student` $where")->result();
}
    return $query;
  }


  public function getplayerlist($schoolid,$gender,$agegroup,$sports){

      $where = "WHERE 1";
    if($gender != "") {
      $where.=" AND year(`sfa_match`.`matchdate`) = $gender " ;
    }

    if($agegroup != "") {
      $where.=" AND `sfa_match`.`agegroup` = $agegroup" ;
    }

    if($sports != "") {
      $where.=" AND `sfa_match`.`sports` = $sports" ;
    }

  if($schoolid != "") {
  $where.=" AND `sfa_school`.`id` = $schoolid" ;
  $query=$this->db->query("SELECT DISTINCT `sfa_student`.`id`,`sfa_student`.`name`,`sfa_match`.`sports` FROM `sfa_match` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team` = `sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student` LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` $where")->result();
  }

    return $query;
  }


  public function getStatistics($schoolid,$studentid,$sportscategory,$gender,$agegroup){
      $where = "WHERE 1";
  if($sportscategory != "") {
      $where1.=" AND `sfa_match`.`sports` = $sportscategory" ;
    }
  if($gender != "" && $gender != undefined) {
      $where1.=" AND `sfa_match`.`gender` = $gender" ;
    }
  if($agegroup != "" && $agegroup != undefined) {
      $where1.=" AND `sfa_match`.`agegroup` = $agegroup" ;
    }

  if($schoolid != "") {

  $where.=" AND `sfa_school`.`id` = $schoolid" ;
  $chkteam = $this->db->query("SELECT * FROM `sfa_matchplayed` WHERE `team`=0")->result();

  if (!empty($chkteam))
  {
    $query1['medals1']=$this->db->query("SELECT DISTINCT `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_sports`.`name` AS 'sport',`sfa_agegroups`.`name` AS 'agegroup',`sfa_sportscategory`.`title` AS 'sportscategory',`sfa_matchplayed`.`medal` FROM `sfa_matchplayed` LEFT OUTER JOIN `sfa_match` ON `sfa_matchplayed`.match = `sfa_match`.`id` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_matchplayed`.`team`=`sfa_teamstudents`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_teamstudents`.`student`=`sfa_student`.`id` LEFT OUTER JOIN  `sfa_school` ON `sfa_student`.`school`=`sfa_school`.`id` INNER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports` INNER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_match`.`sportscategory` INNER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_match`.`agegroup` $where $where1")->result();


  $match = $this->db->query("SELECT DISTINCT `sfa_matchplayed`.`match` FROM  `sfa_matchplayed` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id`=$schoolid ")->result();

  // print_r($match);
  $matchid = array();
  $query1['opponentscore1']= array();
  $query1['against1']= array();
  foreach ($match as  $value) {
  // array_push($matchid,$value->match);
$against1=$this->db->query("SELECT DISTINCT `sfa_school`.`name` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id` !=$schoolid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();
if(!empty($against1))
{
array_push($query1['against1'],$against1);
}
$opponentscore=$this->db->query("SELECT `sfa_matchplayed`.`reason` AS 'score' FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id` !=$schoolid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();
if(!empty($opponentscore))
{
array_push($query1['opponentscore1'],$opponentscore);
}

  $q="SELECT DISTINCT  `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_agegroups`.`name` AS 'agegroup', `sfa_sportscategory`.`title` AS 'sportscategory', `sfa_matchplayed`.`timeformat` AS 'against',`sfa_matchplayed`.`reason` AS 'score',`sfa_matchplayed`.`result`,`sfa_round`.`level` AS 'round',`sfa_match`.`url` FROM `sfa_match`
  LEFT OUTER JOIN `sfa_sports` ON `sfa_match`.`sports` = `sfa_sports`.`id` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_match`.`agegroup`=`sfa_agegroups`.`id` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_match`.`sportscategory`=`sfa_sportscategory`.`id` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
  INNER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` INNER JOIN `sfa_round` ON `sfa_round`.`id`=`sfa_match`.`round` $where $where1 AND `sfa_matchplayed`.`match` = $value->match";
 // echo $q;
  $match=$this->db->query($q)->row();
  if(!empty($match))
  {
    array_push($matchid,$match);
  }

  }
  $query1['matches1'] = $matchid;

if($query1['matches1'] && sizeof($query1['matches1']) > 0 && !$query1['matches1'][0]->year )
{
$query1['matches1'] = array();
}
else
{
for($i=0; $i < sizeof($query1['matches1']); $i++ )
{
  $query1['matches1'][$i]->against = $query1['against1'][$i]->name;
  $query1['matches1'][$i]->opponentscore = $query1['opponentscore1'][$i]->score;
}
}
}
$chkstudent = $this->db->query("SELECT * FROM `sfa_matchplayed` WHERE `student`=0")->result();
if (!empty($chkstudent))
{

  $query2['medals2']=$this->db->query("SELECT DISTINCT `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_sports`.`name` AS 'sport',`sfa_agegroups`.`name` AS 'agegroup',`sfa_sportscategory`.`title` AS 'sportscategory',`sfa_matchplayed`.`medal` FROM `sfa_matchplayed` LEFT OUTER JOIN `sfa_match` ON `sfa_matchplayed`.match = `sfa_match`.`id` LEFT OUTER JOIN `sfa_student` ON `sfa_matchplayed`.`student`=`sfa_student`.`id` LEFT OUTER JOIN  `sfa_school` ON `sfa_student`.`school`=`sfa_school`.`id` INNER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports` INNER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_match`.`sportscategory` INNER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_match`.`agegroup` $where $where1")->result();

  $match = $this->db->query("SELECT DISTINCT `sfa_matchplayed`.`match` FROM  `sfa_matchplayed` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id`=$schoolid ")->result();
  $matchid = array();
$query2['against2']= array();
$query2['opponent2']= array();
$query2['opponentscore2']= array();
  foreach ($match as  $value) {
  // array_push($matchid,$value->match);
  $aq=$this->db->query("SELECT DISTINCT `sfa_school`.`name` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id` !=$schoolid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();

  $opponent=$this->db->query("SELECT DISTINCT `sfa_student`.`name` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id` !=$schoolid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();

  $opponentscore=$this->db->query("SELECT `sfa_matchplayed`.`reason` AS 'score' FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_school`.`id` !=$schoolid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();

  $q="SELECT DISTINCT  `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_agegroups`.`name` AS 'agegroup', `sfa_sportscategory`.`title` AS 'sportscategory', `sfa_matchplayed`.`timeformat` AS 'against',`sfa_student`.`name` AS 'studentname',`sfa_matchplayed`.`timeformat` AS 'opponent', `sfa_matchplayed`.`reason` AS 'score',`sfa_matchplayed`.`result`,`sfa_round`.`level` AS 'round',`sfa_match`.`url` FROM `sfa_match`
  LEFT OUTER JOIN `sfa_sports` ON `sfa_match`.`sports` = `sfa_sports`.`id` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_match`.`agegroup`=`sfa_agegroups`.`id` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_match`.`sportscategory`=`sfa_sportscategory`.`id` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  INNER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` INNER JOIN `sfa_round` ON `sfa_round`.`id`=`sfa_match`.`round`  WHERE `sfa_matchplayed`.`match` = $value->match AND `sfa_school`.`id`=$schoolid $where1";

 // echo $q;
  $match=$this->db->query($q)->row();
  if(!empty($match))
  {
    array_push($matchid,$match);
    array_push($query2['opponent2'],$opponent);
    array_push($query2['against2'],$aq);
    array_push($query2['opponentscore2'],$opponentscore);
  }

  }
  $query2['matches2'] = $matchid;
if($query2['matches2'] && empty($query2['matches2']) && !$query2['matches2'][0]->year )
{
$query2['matches2'] = array();
}
else
{

for($i=0; $i < sizeof($query2['matches2']); $i++ )
{
  $query2['matches2'][$i]->against = $query2['against2'][$i]->name;
  $query2['matches2'][$i]->opponent = $query2['opponent2'][$i]->name;
  $query2['matches2'][$i]->opponentscore = $query2['opponentscore2'][$i]->score;
}
}
}

// $query['medals']=(array_merge($query1['medals1'],$query2['medals2']));
// $query['matches']=(array_merge($query1['matches1'],$query2['matches2']));
if(empty($query1['medals1']))
{
   $query['medals']=$query2['medals2'];
}
if(empty($query2['medals2']))
{
   $query['medals']=$query1['medals1'];
}
if(!empty($query1['medals1']) && !empty($query2['medals2']))
{
   $query['medals']=(array_merge($query1['medals1'],$query2['medals2']));
}

if(empty($query1['matches1']))
{
   $query['matches']=$query2['matches2'];
}
if(empty($query2['matches2']))
{
   $query['matches']=$query1['matches1'];
}
if(!empty($query1['matches1']) && !empty($query2['matches2']))
{
   $query['matches']=(array_merge($query1['matches1'],$query2['matches2']));
}


  }

  if($studentid != "") {
      $where.=" AND `sfa_student`.`id` = $studentid" ;
$chkstudentid = $this->db->query("SELECT * FROM `sfa_matchplayed` WHERE `student`=$studentid")->result();
if (!empty($chkstudentid))
{
  $query1['medals1']=$this->db->query("SELECT `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_sports`.`name` AS 'sport',`sfa_agegroups`.`name` AS 'agegroup', `sfa_sportscategory`.`title` AS 'sportscategory',`sfa_matchplayed`.`medal` FROM `sfa_match`
  LEFT OUTER JOIN `sfa_sports` ON `sfa_match`.`sports` = `sfa_sports`.`id` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_match`.`agegroup`=`sfa_agegroups`.`id` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_match`.`sportscategory`=`sfa_sportscategory`.`id` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student` $where $where1")->result();

$match = $this->db->query("SELECT DISTINCT `match` FROM `sfa_matchplayed` WHERE `student`=$studentid ")->result();
$matchid = array();
$query1['against1']= array();
$query1['opponent1']= array();
$query1['opponentscore1']= array();
foreach ($match as  $value) {
  $aq=$this->db->query("SELECT DISTINCT `sfa_school`.`name` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_student`.`id` !=$studentid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();

  $ao=$this->db->query("SELECT  `sfa_student`.`name` AS 'opponent' FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_student`.`id` !=$studentid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();

  $oppscore=$this->db->query("SELECT  `sfa_matchplayed`.`reason` AS `score` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_student`.`id` !=$studentid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();

// array_push($matchid,$value->match);
$q="SELECT DISTINCT `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_agegroups`.`name` AS 'agegroup', `sfa_sportscategory`.`title` AS 'sportscategory',`sfa_matchplayed`.`reason` AS 'score',`sfa_matchplayed`.`result`,`sfa_round`.`level` AS 'round',`sfa_match`.`url` FROM `sfa_match`
LEFT OUTER JOIN `sfa_sports` ON `sfa_match`.`sports` = `sfa_sports`.`id` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_match`.`agegroup`=`sfa_agegroups`.`id` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_match`.`sportscategory`=`sfa_sportscategory`.`id` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_matchplayed`.`student`
LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` INNER JOIN `sfa_round` ON `sfa_round`.`id`=`sfa_match`.`round` $where $where1 AND `sfa_matchplayed`.`match` = $value->match";
// echo $q;
$match=$this->db->query($q)->row();
if(!empty($match))
{
array_push($matchid,$match);
array_push($query1['against1'],$aq);
array_push($query1['opponent1'],$ao);
  array_push($query1['opponentscore1'],$oppscore);
}
}

$query1['matches1'] = $matchid;
if($query1['matches1'] && empty($query1['matches1']) && !$query1['matches1'][0]->year )
{
$query1['matches1'] = array();

}
else
{
for($i=0; $i < sizeof($query1['matches1']); $i++ )
{
  $query1['matches1'][$i]->against = $query1['against1'][$i]->name;
  $query1['matches1'][$i]->opponentscore = $query1['opponentscore1'][$i]->score;
  $query1['matches1'][$i]->opponent =   $query1['opponent1'][$i]->opponent;
}
}
}
$chkteam = $this->db->query("SELECT * FROM `sfa_matchplayed` WHERE `student`=0")->result();
if (!empty($chkteam))
{
// echo"in team student";
  $query2['medals2']=$this->db->query("SELECT `sfa_match`.`id`,`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_sports`.`name` AS 'sport',`sfa_agegroups`.`name` AS 'agegroup', `sfa_sportscategory`.`title` AS 'sportscategory',`sfa_matchplayed`.`medal` FROM `sfa_match`
  LEFT OUTER JOIN `sfa_sports` ON `sfa_match`.`sports` = `sfa_sports`.`id` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_match`.`agegroup`=`sfa_agegroups`.`id` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_match`.`sportscategory`=`sfa_sportscategory`.`id` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student` $where $where1")->result();

  $match =$this->db->query("SELECT DISTINCT `sfa_matchplayed`.`match` FROM  `sfa_matchplayed` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_student`.`id`=$studentid")->result();

  $matchid1 = array();
  $query2['against2']= array();
  $query2['opponentscore2']= array();
  foreach ($match as  $value) {
  $q="SELECT DISTINCT  `sfa_match`.`id`,`sfa_matchplayed`.`id` AS 'matchplayedid',`sfa_match`.`gender`,year(`sfa_match`.`matchdate`) AS 'year',`sfa_agegroups`.`name` AS 'agegroup', `sfa_sportscategory`.`title` AS 'sportscategory', `sfa_matchplayed`.`timeformat` AS 'against',`sfa_matchplayed`.`reason` AS 'score',`sfa_matchplayed`.`result`,`sfa_round`.`level` AS 'round',`sfa_match`.`url` FROM `sfa_match`
  LEFT OUTER JOIN `sfa_sports` ON `sfa_match`.`sports` = `sfa_sports`.`id` LEFT OUTER JOIN `sfa_agegroups` ON `sfa_match`.`agegroup`=`sfa_agegroups`.`id` LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_match`.`sportscategory`=`sfa_sportscategory`.`id` LEFT OUTER JOIN `sfa_matchplayed` ON  `sfa_match`.`id` = `sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team`  LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
  INNER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` INNER JOIN `sfa_round` ON `sfa_round`.`id`=`sfa_match`.`round` $where $where1 AND `sfa_matchplayed`.`match` = $value->match ";
 // echo $q;
  $match1=$this->db->query($q)->row();
  if(!empty($match1))
  {
    array_push($matchid1,$match1);
  }

if(!empty($match1->matchplayedid))
{

  $ag2=$this->db->query("SELECT DISTINCT `sfa_school`.`name` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_matchplayed`.`id` !=$match1->matchplayedid AND  `sfa_matchplayed`.`match` =$value->match $where1")->row();
    if(!empty($ag2))
  {
    array_push($query2['against2'],$ag2);
  }


  $oppq="SELECT  `sfa_matchplayed`.`reason` AS `score` FROM `sfa_match` LEFT OUTER JOIN  `sfa_matchplayed` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_teamstudents` ON `sfa_teamstudents`.`team`=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id` = `sfa_teamstudents`.`student`
  LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  WHERE `sfa_matchplayed`.`id` !=$match1->matchplayedid AND  `sfa_matchplayed`.`match` =$value->match $where1";
  $opscore2=$this->db->query($oppq)->row();
  if(!empty($opscore2))
  {
    array_push($query2['opponentscore2'],$opscore2);
  }
}
  }
  $query2['matches2'] = $matchid1;

if($query2['matches2'] && empty($query2['matches2']) && !$query2['matches2'][0]->year )
{
$query2['matches2'] = array();

}
else
{
for($i=0; $i < sizeof($query2['matches2']); $i++ )
{
  $query2['matches2'][$i]->against = $query2['against2'][$i]->name;
  $query2['matches2'][$i]->opponentscore = $query2['opponentscore2'][$i]->score;
}
}
}

if(empty($query1['medals1']))
{
   $query['medals']=$query2['medals2'];
}
if(empty($query2['medals2']))
{
   $query['medals']=$query1['medals1'];
}
if(!empty($query1['medals1']) && !empty($query2['medals2']))
{
   $query['medals']=(array_merge($query1['medals1'],$query2['medals2']));
}

if(empty($query1['matches1']))
{
   $query['matches']=$query2['matches2'];
}
if(empty($query2['matches2']))
{
   $query['matches']=$query1['matches1'];
}
if(!empty($query1['matches1']) && !empty($query2['matches2']))
{
   $query['matches']=(array_merge($query1['matches1'],$query2['matches2']));
}

  }
    return $query;
  }



    public function createEnquiries($name,$email,$mobile,$person){
$data=array("name" => $name,"email" => $email,"mobile" => $mobile,"person" => $person);
$query=$this->db->insert("enquiries", $data);
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  1;
}
    public function getAllSports()
{
         $query=$this->db->query("SELECT `id`, `name`, `status`, `order`, `icon`, `about`, `eligibility`, `rules`, `json` FROM `sfa_sports` WHERE 1")->result();
        return $query;
}
    public function getStudentProfile($id)
{
         $query['studentprofile']=$this->db->query("SELECT `sfa_student`.`id`,CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0)) as `sfastudentid`, `sfa_student`.`name`, `sfa_student`.`school`, `sfa_student`.`address`, `sfa_student`.`content`, `sfa_student`.`email`, `sfa_student`.`image`, `sfa_student`.`location`, `sfa_student`.`sports`, `sfa_student`.`sportscategory`, `sfa_student`.`agegroup`, `sfa_student`.`gender`, `sfa_student`.`isparticipant`, `sfa_student`.`age`, `sfa_student`.`phone`, `sfa_student`.`emergencycontact`, `sfa_student`.`dob`,`sfa_school`.`id` as `schoolid`,`sfa_school`.`name` as `schoolname`,`sfa_agegroups`.`id` as `agegroupid`,`sfa_agegroups`.`name` as `agegroupname`
         FROM `sfa_student`
         LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`
         LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_student`.`agegroup`
         WHERE `sfa_student`.`id`='$id'")->row();

      //    $query1['teamcase']=$this->db->query("SELECT DISTINCT `sfa_match`.`sports` AS `id`,`sfa_sports`.`name` FROM `sfa_teamstudents` LEFT OUTER JOIN `sfa_matchplayed` ON `sfa_teamstudents`.team=`sfa_matchplayed`.`team` LEFT OUTER JOIN `sfa_match` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports` WHERE `sfa_teamstudents`.`student`='$id'")->result();
      //  print_r($query1['teamcase']);
       //
      //    $query1['studentcase']=$this->db->query("SELECT DISTINCT `sfa_match`.`sports` AS `id`,`sfa_sports`.`name` FROM `sfa_matchplayed` LEFT OUTER JOIN `sfa_match` ON `sfa_match`.`id`=`sfa_matchplayed`.`match` LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_match`.`sports` WHERE `sfa_matchplayed`.`student`='$id'")->result();
      //  print_r($query1['studentcase']);
       //
      //    $query['sportsparticipated']=array_merge($query1['teamcase'],$query1['studentcase']);

         $query['sportsparticipated']=$this->db->query("SELECT DISTINCT(`sfa_sports`.`id`), `sfa_sports`.`name` FROM `sfa_sports` LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`sport`=`sfa_sports`.`id` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_studentsport`.`student` WHERE `sfa_student`.`id`='$id'")->result();

        return $query;
}

	public function filtergames($games){
		$query = $this->db->query("SELECT `id`, `name` FROM `sfa_sports` WHERE `id` IN ($games)")->result();
		foreach($query as $row){
            $row->category = $this->db->query("SELECT `sfa_sportscategory`.`id`, `sfa_sportscategory`.`title`,`sfa_sportscategory`.`sports` FROM `sfa_sportscategory` INNER JOIN `sfa_sports` ON `sfa_sportscategory`.`sports` = `sfa_sports`.`id` WHERE `sfa_sports`.`id` = $row->id")->result();
        }
		return $query;
	}

  public function draw()
  {
  $query = $this->db->query("SELECT `draw`.`id`, `draw`.`match_order`, `draw`.`sport`, `draw`.`sportcategory`, `draw`.`agegroup`, `draw`.`gender`,(SELECT `sfa_student`.`name` FROM `sfa_student` WHERE `sfa_student`.`id`=substr(`draw`.`winner`,6, 6)) AS 'winner' , `draw`.`round`, `draw`.`score`, `draw`.`status`,
(SELECT `sfa_student`.`name` FROM `sfa_student` WHERE `sfa_student`.`id`= substr(`draw`.`player1`,6, 6)) AS 'player1',
(SELECT `sfa_student`.`name` FROM `sfa_student` WHERE `sfa_student`.`id`= substr(`draw`.`player2`,6, 6)) AS 'player2'
FROM `draw` WHERE 1 ORDER BY `match_order`")->result();
  return $query;
}

    public function getDrawold($sport,$sportscategory,$gender,$agegroup)
    {
        $rounds = $this->db->query("SELECT distinct `sfa_match`.`round` as `id` FROM `sfa_match` LEFT OUTER JOIN `sfa_round` ON `sfa_match`.`round`=`sfa_round`.`id` WHERE 1 AND `sfa_match`.`sports`='$sport' ORDER BY `sfa_round`.`order` asc")->result();
        // print_r($round);
        // $round = $this->db->query("SELECT `id`, `sports`, `sportcategory`, `year`, `agegroup`, `level` as `roundname`, `root` FROM `sfa_round` WHERE 1")->result();
        $tempround = array();
// print_r($round);
        foreach($rounds as $rou)
        {
            $rou->match=$this->db->query("SELECT `id`,`id` AS 'winner', `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`, `starttime`, `endtime`, `gender`, `matchdate`, `round` FROM `sfa_match` WHERE `round`=$rou->id AND `sports`='$sport' AND `sportscategory`='$sportscategory' AND `sfa_match`.`gender`='$gender' AND `sfa_match`.`agegroup`='$agegroup'")->result();
// print_r($rou->match);

            if(!empty($rou->match))
            {
                          foreach($rou->match as $match)
                    {
                      $q="SELECT `sfa_matchplayed`.`result`,`sfa_student`.`id` as `studentid`,CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0)) as `sfastudentid`,`sfa_student`.`name` as `studentname`,`sfa_school`.`name` as `schoolname`,`sfa_team`.`id` as `teamid`,CONCAT('SFATE',LPAD(`sfa_team`.`id`,6,0)) as `teamsfaid`,`sfa_team`.`title` as `teamname`
      FROM `sfa_match`
      LEFT OUTER JOIN `sfa_matchplayed` ON `sfa_matchplayed`.`match`=`sfa_match`.`id`
      LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_matchplayed`.`student`
      LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_matchplayed`.`team`
      LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`
      WHERE `sfa_match`.`id`=$match->id";

                        $match->player = $this->db->query($q)->result();

$player1 = $match->player[0]->studentid;
$player2 = $match->player[1]->studentid;

if($match->player[0]->result == 1)
{
  $match->winner = $player1;
}
else if($match->player[1]->result == 1)
{
  $match->winner = $player2;
}

                        //print_r($match->player);

                    }

              //$matchpush = $rou->match;
                array_push($tempround,$rou);
            }
           }
//            $base = array();
// foreach($tempround[0] as $round1)
// {
//   echo $round1->winner;
// array_push($base , $round1->winner);
// }
// // print_r($base);
//
// uasort($tempround[1], function($key1, $key2) use ($base) {
//   $a1=array_search($key1, $base);
//   $a2=array_search($key2, $base);
// echo $key1;
//   if ( $a1===false && $a2===false ) { return 0; }
//   else if ( $a1===false && $a2 !== false) { return 1; }
//   else if ( $a1!==false && $a2 === false) {return -1;}
//
//   if( $a1 > $a2 ) { return 1; }
//   else if ( $a1 < $a2 ) { return -1; }
//   else if ( $a1 == $a2 ) { return 0; }
// });
// var_dump($tempround[0]);

          return $tempround ;
	}
    public function getDraw($sport,$sportscategory,$gender,$agegroup)
    {
      $round = $this->db->query("SELECT `id`, `sports`, `sportcategory`, `year`, `agegroup`, `level` as `roundname`, `root` FROM `sfa_round` WHERE 1")->result();
      $tempround = array();

      foreach($round as $rou)
      {
          $rou->match=$this->db->query("SELECT `id`, `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`, `starttime`, `endtime`, `gender`, `matchdate`, `round` FROM `sfa_match` WHERE `round`=$rou->id AND `sports`='$sport' AND `sportscategory`='$sportscategory' AND `sfa_match`.`gender`='$gender' AND `sfa_match`.`agegroup`='$agegroup'")->result();

          if(count($rou->match)!=0)
          {
                        foreach($rou->match as $match)
                  {
                      $match->player = $this->db->query("SELECT `sfa_matchplayed`.`result`,`sfa_student`.`id` as `studentid`,CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0)) as `sfastudentid`,`sfa_student`.`name` as `studentname`,`sfa_school`.`name` as `schoolname`,`sfa_team`.`id` as `teamid`,CONCAT('SFATE',LPAD(`sfa_team`.`id`,6,0)) as `teamsfaid`,`sfa_team`.`title` as `teamname`
      FROM `sfa_match`
      LEFT OUTER JOIN `sfa_matchplayed` ON `sfa_matchplayed`.`match`=`sfa_match`.`id`
      LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_matchplayed`.`student`
      LEFT OUTER JOIN `sfa_team` ON `sfa_team`.`id`=`sfa_matchplayed`.`team`
      LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`
      WHERE `sfa_match`.`id`=$match->id")->result();

                  }
              array_push($tempround,$rou);
          }

         }


          return $tempround;
        }


    public function getSwimmingDraw($sportscategory,$gender,$agegroup,$sports)
    {
         $round = $this->db->query("SELECT `id`, `sports`, `sportcategory`, `year`, `agegroup`, `level` as `roundname`, `root` FROM `sfa_round` WHERE 1")->result();
        foreach($round as $rou)
        {
       $rou->match = $this->db->query("SELECT `id`, `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`, `starttime`, `endtime`, `gender`, `matchdate`, `round` FROM `sfa_match` WHERE `sports`=$sports AND `sportscategory`=$sportscategory AND `gender`=$gender AND `agegroup`=$agegroup AND `round`=$rou->id ")->result();
        if(!empty($rou->match))
        {
            foreach($rou->match as $row)
            {
            $row->matchplayers = $this->db->query("SELECT `id`, `type`, `order`, `team`, `student`, `match`, `result`, `reason` as `scoretime`, `round`,`timeformat` FROM `sfa_matchplayed` WHERE `match`='$row->id' AND `reason`<>'' ORDER BY `scoretime`")->result();
            }
        }
        }
        return $round;
	}


}
?>
