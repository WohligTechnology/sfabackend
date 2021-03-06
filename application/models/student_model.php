<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class student_model extends CI_Model
{
public function create($name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob,$isverified)
{
    if($age !="")
    {
    }
    else{
        $from = new DateTime($dob);
        $to   = new DateTime('today');
        $age=$from->diff($to)->y;
    }

$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location, "agegroup" => $agegroup[0],"address" => $address,"content" => $content,"gender" => $gender,"isparticipant" => $isparticipant,"age" => $age,"phone" => $phone,"emergencycontact" => $emergencycontact,"dob" => $dob,"isverified" => $isverified);
$query=$this->db->insert( "sfa_student", $data );
	$studentid=$this->db->insert_id();
    foreach($sports AS $key=>$value)
        {
            $this->student_model->createstudentsport($value,$studentid);
        }
    foreach($sportscategory AS $key=>$value)
        {
            $this->student_model->createstudentsportscategory($value,$studentid);
        }
    foreach($agegroup AS $key=>$value)
        {
            $this->student_model->createstudentagegroup($value,$studentid);
        }
            $id=$this->db->insert_id();
            if(!$query)
            return  0;
            else
            return  $id;
}
     public function createstudentagegroup($value,$studentid)
	{
		$data  = array(
			'agegroup' => $value,
			'student' => $studentid
		);
		$query=$this->db->insert( 'sfa_studentagegroup', $data );
		return  1;
	}
    public function createstudentsportscategory($value,$studentid)
	{
	    $sport = $this->db->query("select `sfa_sports`.`id` from `sfa_sports` inner join `sfa_sportscategory` ON `sfa_sports`.`id` = `sfa_sportscategory`.`sports` where `sfa_sportscategory`.`id` = $value")->row();
		$data  = array(
			'sport' => $sport->id,
			'sportscategory' => $value,
			'student' => $studentid
		);
		$query=$this->db->insert( 'sfa_sportcategorystudent', $data );
		return  1;
	}
    public function createstudentsport($value,$studentid)
	{
		$data  = array(
			'sport' => $value,
			'student' => $studentid
		);
		$query=$this->db->insert( 'sfa_studentsport', $data );
		return  1;
	}
public function beforeedit($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_student")->row();
return $query;
}
function getsinglestudent($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_student")->row();
return $query;
}

public function
edit($id,$name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob,$isverified)
{
    if($age !="")
    {
    }
    else{
        $from = new DateTime($dob);
        $to   = new DateTime('today');
        $age=$from->diff($to)->y;
    }
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location, "agegroup" => $agegroup[0],"address" => $address,"content" => $content,"gender" => $gender,"isparticipant" => $isparticipant,"age" => $age,"phone" => $phone,"emergencycontact" => $emergencycontact,"dob" => $dob,"isverified" => $isverified);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_student", $data );
    $this->db->query("DELETE FROM `sfa_studentagegroup` WHERE `student`='$id'");
		$this->db->query("DELETE FROM `sfa_studentsport` WHERE `student`='$id'");
		$this->db->query("DELETE FROM `sfa_sportcategorystudent` WHERE `student`='$id'");

     foreach($sports AS $key=>$value)
        {
            $this->student_model->createstudentsport($value,$id);
        }
    foreach($sportscategory AS $key=>$value)
        {
            $this->student_model->createstudentsportscategory($value,$id);
        }
    foreach($agegroup AS $key=>$value)
        {
            $this->student_model->createstudentagegroup($value,$id);
        }

return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_student` WHERE `id`='$id'");
return $query;
}
	public function getstudentdropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_student`  ORDER BY `id` ASC")->result();
		$student=array(
            "" => "Choose Student"
		);
		foreach($query as $row)
		{
			$student[$row->id]=$row->name;
		}

		return $student;
	}
    public function getstudentdropdownbyschool()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_student`  ORDER BY `id` ASC")->result();
		$student=array(
            "" => "Choose Student"
		);
		foreach($query as $row)
		{
			$student[$row->id]=$row->name;
		}

		return $student;
	}
	public function getisverifieddropdown()
	{
		$student=array(
            "" => "Choose Verification",
            "1" => "Yes",
            "2" => "No"

		);

		return $student;
	}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_student` WHERE `id`='$id'")->row();
		return $query;
	}

      public function createbycsv($file)
	{
        foreach ($file as $row)
        {

            $name=trim($row['name']);
            $school=trim($row['school']);
            $address=trim($row['address']);
            $content=trim($row['content']);
            $email=trim($row['email']);
            $image=trim($row['image']);
            $location=trim($row['location']);
            $sports=trim($row['sports']);
            $sportscategory=trim($row['sportscategory']);
            $agegroup=trim($row['agegroup']);
            $gender=trim($row['gender']);
            $phone=trim($row['phone']);
            $emergencycontact=trim($row['emergencycontact']);
            $dob=trim($row['dob']);
            $team=trim($row['team']);
            $year=trim($row['year']);
            $isverified=trim($row['isverified']);
            $from = new DateTime($dob);
            $to   = new DateTime('today');
            $calculatedage=$from->diff($to)->y;

            $date = date_create($dob);
            $dob=date_format($date, 'Y-m-d');

            //GENDER

            if($gender=="male"){
            $genderid=1;
            }else if($gender=="female"){
            $genderid=2;
            }

            // IS VERIFIED

            if($isverified=="yes"){
            $isverified=1;
            }else if($isverified=="no"){
            $isverified=2;
            }else if($isverified==""){
            $isverified='';
            }
             $schoolfetch= substr($school, 8, 3);
             $schoolproperid=intval($schoolfetch);

            $query1=$this->db->query("SELECT * FROM `sfa_school` WHERE `id`= '$schoolproperid'")->row();
            $schoolid=$query1->id;

            $checkstudent=$this->db->query("SELECT * FROM `sfa_student` WHERE `name`= '$name' AND `school`='$schoolid'")->row();
            if(empty($checkstudent))
            {


            // INSER INTO STUDENTS
		$data  = array(
			'name' => $name,
			'school' => $schoolid,
			'address' => $address,
			'content' => $content,
			'email' => $email,
			'image' => $image,
			'location' => $location,
			'age' => $calculatedage,
			'isparticipant' => 1,
			'phone' => $phone,
			'emergencycontact' => $emergencycontact,
			'gender' => $genderid,
			'dob' => $dob,
			'isverified' => $isverified
		);
		$query=$this->db->insert( 'sfa_student', $data );
		$id=$this->db->insert_id();

            //sports
            $query2=$this->db->query("SELECT `id` FROM `sfa_sports` WHERE `name` LIKE '$sports'")->row();
            $sportsid=$query2->id;



         //sports
            if(empty($query2))
            {
                $data  = array(
                'name' => $sports,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_sports', $data );
                $sportsid=$this->db->insert_id();

                $data=array("sports" => $sportsid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                // STUDENT SPORT MAPPING

                 $data  = array(
                'student' => $id,
                'sport' => $sportsid
                );
                $query=$this->db->insert( 'sfa_studentsport', $data );
                $studentsportid=$this->db->insert_id();

                //INSERT SPORT CATEGORY IF SPORT IS PRESENT

                 //sportscategory
                $sportscategory=explode(",",$sportscategory);
                foreach($sportscategory as $key => $sportscategory)
			     {
                $sportscategory=trim($sportscategory);
                $query3=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` LIKE '$sportscategory'")->row();
                $sportscategoryid=$query3->id;

                if(empty($query3)){
                $data  = array(
                'sports' => $sportsid,
                'status' => 1,
                'title' => $sportscategory
                );
                $query=$this->db->insert( 'sfa_sportscategory', $data );
                $sportscategoryid=$this->db->insert_id();

                $data=array("sportscategory" => $sportscategoryid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                else{
                $data=array("sportscategory" => $sportscategoryid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                }

            }
            else
            {
                $data=array("sports" => $sportsid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                // STUDENT SPORT MAPPING

                 $data  = array(
                'student' => $id,
                'sport' => $sportsid
                );
                $query=$this->db->insert( 'sfa_studentsport', $data );
                $studentsportid=$this->db->insert_id();

                //INSERT SPORT CATEGORY IF SPORT IS PRESENT
                 $sportscategory=explode(",",$sportscategory);
                foreach($sportscategory as $key => $sportscategory)
			     {
                    $sportscategory=trim($sportscategory);
                $query3=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` LIKE '$sportscategory'")->row();
                $sportscategoryid=$query3->id;

                if(empty($query3)){
                $data  = array(
                'sports' => $sportsid,
                'status' => 1,
                'title' => $sportscategory
                );
                $query=$this->db->insert( 'sfa_sportscategory', $data );
                $sportscategoryid=$this->db->insert_id();



                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                else{
                $data=array("sportscategory" => $sportscategoryid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                }


            }

              if($agegroup !="") {
            //agegroups
            $query10=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` LIKE '$agegroup'")->row();

            if(empty($query10))
            {
                echo $agegroup;
                 $data  = array(
                'name' => $agegroup,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_agegroups', $data );
                $agegroupid=$this->db->insert_id();

                $data=array("agegroup" => $agegroupid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

            }
            else
            {
                $agegroupid=$query10->id;
                echo $agegroupid;
                $data=array("agegroup" => $agegroupid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

            }
              }
                 $querygetagegroup=$this->db->query("SELECT `agegroup` FROM `sfa_student` WHERE `id` = '$id'")->row();
                $agegroupid=$querygetagegroup->agegroup;
                 //TEAM
            if(!empty($team)){
            $queryteam=$this->db->query("SELECT * FROM `sfa_team` WHERE `title` LIKE '$team'")->row();
            $teamid=$queryteam->id;
            if(empty($queryteam)){
                $data  = array(
                'title' => $team,
                'agegroup' => $agegroupid,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_team', $data );
                $teamid=$this->db->insert_id();

                $data  = array(
                'team' => $teamid,
                'student' => $id
                );
                $query=$this->db->insert( 'sfa_teamstudents', $data );
                $teamstudentid=$this->db->insert_id();

            }
            else{
                $data  = array(
                'team' => $teamid,
                'student' => $id
                );
                $query=$this->db->insert( 'sfa_teamstudents', $data );
                $teamstudentid=$this->db->insert_id();

            }
                if(!empty($year))
                {

                    $queryyear=$this->db->query("SELECT * FROM `sfa_year` WHERE `name` LIKE '$year'")->row();
                    $yearid=$queryyear->id;
                    if(empty($queryyear))
                    {
                        $data  = array(
                        'name' => $year,
                        'status' => 1
                        );
                        $query=$this->db->insert( 'sfa_year', $data );
                        $yearid=$this->db->insert_id();

                        $data=array("year" => $yearid);
                        $this->db->where( "id", $teamid );
                        $query=$this->db->update( "sfa_team", $data );

                    }
                    else
                    {
                        $data=array(
                        'year' => $yearid
                        );
                        $this->db->where( "id", $teamid );
                        $query=$this->db->update( "sfa_team", $data );

                    }
                }
            }
            // TEAM END
        }

            else{
                $id=$checkstudent->id;
                $data = array(
                'address' => $address,
                'content' => $content,
                'image' => $image,
                'location' => $location,
                'isparticipant' => 1,
                'phone' => $phone,
                'emergencycontact' => $emergencycontact,
                'isverified' => $isverified,
                'image' => $image,
                'email' => $email,
                'gender' => $genderid,
                'age' => $calculatedage,
                'dob' => $dob
                );

                $this->db->where('id', $id);
                $this->db->update('sfa_student', $data);

//                $query=$this->db->query("DELETE FROM `sfa_sports` WHERE `id`='$id'");
//                $query=$this->db->query("DELETE FROM `sfa_sportscategory` WHERE `sports`='$sports'");
                  //sports
            $query2=$this->db->query("SELECT `id` FROM `sfa_sports` WHERE `name` LIKE '$sports'")->row();
            $sportsid=$query2->id;



         //sports
            if(empty($query2)){
                $data  = array(
                'name' => $sports,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_sports', $data );
                $sportsid=$this->db->insert_id();

                $data=array("sports" => $sportsid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                // STUDENT SPORT MAPPING


                 $data  = array(
                'student' => $id,
                'sport' => $sportsid
                );
                $query=$this->db->insert( 'sfa_studentsport', $data );
                $studentsportid=$this->db->insert_id();

                //INSERT SPORT CATEGORY IF SPORT IS PRESENT

                 //sportscategory
                $sportscategory=explode(",",$sportscategory);
                foreach($sportscategory as $key => $sportscategory)
			     {
                $sportscategory=trim($sportscategory);
                $query3=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` LIKE '$sportscategory'")->row();
                $sportscategoryid=$query3->id;

                if(empty($query3)){
                $data  = array(
                'sports' => $sportsid,
                'status' => 1,
                'title' => $sportscategory
                );
                $query=$this->db->insert( 'sfa_sportscategory', $data );
                $sportscategoryid=$this->db->insert_id();



                 $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }

                else{

                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                }

            }
            else
            {
                $data=array("sports" => $sportsid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                // STUDENT SPORT MAPPING

                 $data  = array(
                'student' => $id,
                'sport' => $sportsid
                );
                $query=$this->db->insert( 'sfa_studentsport', $data );
                $studentsportid=$this->db->insert_id();

                //INSERT SPORT CATEGORY IF SPORT IS PRESENT
                 $sportscategory=explode(",",$sportscategory);
                foreach($sportscategory as $key => $sportscategory)
			     {
                    $sportscategory=trim($sportscategory);
                $query3=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` LIKE '$sportscategory'")->row();
                $sportscategoryid=$query3->id;

                if(empty($query3)){
                $data  = array(
                'sports' => $sportsid,
                'status' => 1,
                'title' => $sportscategory
                );
                $query=$this->db->insert( 'sfa_sportscategory', $data );
                $sportscategoryid=$this->db->insert_id();

                $data=array("sportscategory" => $sportscategoryid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                else{
                $data=array("sportscategory" => $sportscategoryid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );

                $data  = array(
                'sport' => $sportsid,
                'student' => $id,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_sportcategorystudent', $data );
                $sportcategorystudentid=$this->db->insert_id();
                }
                }


            }
              if($agegroup !="") {

            //agegroups
            $query10=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` LIKE '$agegroup'")->row();
//            print_r($query10);
            if(empty($query10))
            {
                echo $agegroup;
                 $data  = array(
                'name' => $agegroup,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_agegroups', $data );
                $agegroupid=$this->db->insert_id();

                $data=array("agegroup" => $agegroupid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
            }
            else
            {
                $agegroupid=$query10->id;
                 echo $agegroupid;
                $data=array("agegroup" => $agegroupid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
            }
              }
                 //TEAM
            if(!empty($team)){
            $queryteam=$this->db->query("SELECT * FROM `sfa_team` WHERE `title` LIKE '$team'")->row();
            $teamid=$queryteam->id;
            if(empty($queryteam)){
                $data  = array(
                'title' => $team,
                'agegroup' => $agegroupid,
                'sportscategory' => $sportscategoryid
                );
                $query=$this->db->insert( 'sfa_team', $data );
                $teamid=$this->db->insert_id();

                $data  = array(
                'team' => $teamid,
                'student' => $id
                );
                $query=$this->db->insert( 'sfa_teamstudents', $data );
                $teamstudentid=$this->db->insert_id();

            }
            else{
                $data  = array(
                'team' => $teamid,
                'student' => $id
                );
                $query=$this->db->insert( 'sfa_teamstudents', $data );
                $teamstudentid=$this->db->insert_id();

            }
                if(!empty($year))
                {

                    $queryyear=$this->db->query("SELECT * FROM `sfa_year` WHERE `name` LIKE '$year'")->row();
                    $yearid=$queryyear->id;
                    if(empty($queryyear))
                    {
                        $data  = array(
                        'name' => $year,
                        'status' => 1
                        );
                        $query=$this->db->insert( 'sfa_year', $data );
                        $yearid=$this->db->insert_id();

                        $data=array("year" => $yearid);
                        $this->db->where( "id", $teamid );
                        $query=$this->db->update( "sfa_team", $data );

                    }
                    else
                    {
                        $data=array(
                        'year' => $yearid
                        );
                        $this->db->where( "id", $teamid );
                        $query=$this->db->update( "sfa_team", $data );

                    }
                }
            }
            }
        }
			return  1;
	}
    public function getgenderdropdown()
	{
		$return=array(
            "" => "Choose Gender",
            "1" => "Male",
			"2" => "Female"
		);

		return $return;
	}
    public function getStudentCount($school,$gender,$sport,$sportscategory,$agegroup)
	{

        $where = " WHERE 1 AND";
        if($school != "")
        {
            $where .= " `sfa_student`.`school` = '$school'  AND";
        }
        if($gender != "")
        {
            $where .= " `sfa_student`.`gender` = '$gender'  AND";
        }
        if($sport != "")
        {
            $where .= " `sfa_studentsport`.`sport`= '$sport'  AND";
        }
        if($sportscategory != "")
        {
            $where .= " `sfa_sportcategorystudent`.`sportscategory`='$sportscategory'  AND";
        }
        if($agegroup != "")
        {
            $where .= " `sfa_studentagegroup`.`agegroup` ='$agegroup'  AND";
        }






        $where .= " 1 ";

        $querystr =  "SELECT COUNT(`id`) as `count` FROM (SELECT `sfa_student`.`id` FROM `sfa_student`
LEFT OUTER JOIN `sfa_studentagegroup` ON `sfa_studentagegroup`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_sportcategorystudent` ON `sfa_sportcategorystudent`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`   $where GROUP BY `id` ) as `tab1`";
		$query=$this->db->query($querystr)->row();
        return $query->count;

	}

    public function getisparticipantdropdown()
	{
		$isparticipant=array(
			"1" => "Yes",
			"2" => "No"
		);
		return $isparticipant;
	}
     function exportstudentcsv()
	{
		$this->load->dbutil();
		$query=$this->db->query("SELECT CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0)) as `id`, `sfa_student`.`name` as `name`, `sfa_school`.`name` as `schoolname`, `sfa_student`.`address` as `address`, `sfa_student`.`content` as `content`,`sfa_student`.`email` as `email`, `sfa_student`.`image` as `image`, `sfa_student`.`location` as `location`, GROUP_CONCAT(DISTINCT(`sfa_sports`.`name`)) as `sport`, GROUP_CONCAT(DISTINCT(`sfa_sportscategory`.`title`)) as `sportscategory`, GROUP_CONCAT(DISTINCT(`sfa_agegroups`.`name`)) as `agegroups`, IF(`sfa_student`.`gender` = '1', 'Male', 'Female') as `gender`, `sfa_student`.`isparticipant` as `isparticipant`, `sfa_student`.`age` as `age`, `sfa_student`.`phone` as `phone`, `sfa_student`.`emergencycontact` as `emergencycontact`, `sfa_student`.`dob` as `dateofbirth` FROM `sfa_student`
LEFT OUTER JOIN `sfa_studentagegroup` ON `sfa_studentagegroup`.`student`=`sfa_student`.`id`
LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_studentagegroup`.`agegroup`

LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`student`=`sfa_student`.`id`
LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_studentsport`.`sport`

LEFT OUTER JOIN `sfa_sportcategorystudent` ON `sfa_sportcategorystudent`.`student`=`sfa_student`.`id`
LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_sportcategorystudent`.`sportscategory`

LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school` GROUP BY `sfa_student`.`id`
");

       $content= $this->dbutil->csv_from_result($query);
        //$data = 'Some file data';
$timestamp=new DateTime();
        $timestamp=$timestamp->format('Y-m-d_H.i.s');
        if ( ! write_file("./csvgenerated/studentfile_$timestamp.csv", $content))
        {
             echo 'Unable to write the file';
        }
        else
        {
            redirect(base_url("csvgenerated/studentfile_$timestamp.csv"), 'refresh');
             echo 'File written!';
        }
	}
    function exportstudentsportcsv()
	{
		$this->load->dbutil();
		$query=$this->db->query("SELECT CONCAT('SFAST',LPAD(`sfa_student`.`id`,6,0)) as `Student sfa id`,`sfa_student`.`name` as `Name`,IF(`sfa_student`.`gender` = '1', 'Male', 'Female') as `gender`,GROUP_CONCAT(DISTINCT(`sfa_sports`.`name`)) as `Sports Name`,GROUP_CONCAT(DISTINCT(`sfa_sportscategory`.`title`)) as `Sports Category Name` ,CONCAT('SFASC',LPAD(`sfa_school`.`id`,6,0)) as `School sfa id`,`sfa_school`.`name` as `School Name`,`sfa_student`.`address` as `address`,`sfa_student`.`content` as `content`,`sfa_student`.`email` as `email`,`sfa_student`.`image`,`sfa_student`.`location`,`sfa_student`.`age`,`sfa_student`.`phone`,`sfa_student`.`emergencycontact`,`sfa_student`.`dob`,`sfa_agegroups`.`name` as `Age Group Name`
FROM `sfa_student`
LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`student`=`sfa_student`.`id`
LEFT OUTER JOIN `sfa_sports` ON `sfa_sports`.`id`=`sfa_studentsport`.`sport`
LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`
LEFT OUTER JOIN `sfa_sportcategorystudent` ON `sfa_sportcategorystudent`.`student`=`sfa_student`.`id`
LEFT OUTER JOIN `sfa_sportscategory` ON `sfa_sportscategory`.`id`=`sfa_sportcategorystudent`.`sportscategory`
LEFT OUTER JOIN `sfa_agegroups` ON `sfa_agegroups`.`id`=`sfa_student`.`agegroup`

GROUP BY `sfa_student`.`id`");

       $content= $this->dbutil->csv_from_result($query);
        //$data = 'Some file data';
$timestamp=new DateTime();
        $timestamp=$timestamp->format('Y-m-d_H.i.s');
        if ( ! write_file("./csvgenerated/studentfile_$timestamp.csv", $content))
        {
             echo 'Unable to write the file';
        }
        else
        {
            redirect(base_url("csvgenerated/studentfile_$timestamp.csv"), 'refresh');
             echo 'File written!';
        }
	}
}
?>
