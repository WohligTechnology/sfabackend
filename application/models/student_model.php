<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class student_model extends CI_Model
{
public function create($name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob)
{
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location, "agegroup" => $agegroup[0],"address" => $address,"content" => $content,"gender" => $gender,"isparticipant" => $isparticipant,"age" => $age,"phone" => $phone,"emergencycontact" => $emergencycontact,"dob" => $dob);
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
edit($id,$name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob)
{
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location, "agegroup" => $agegroup[0],"address" => $address,"content" => $content,"gender" => $gender,"isparticipant" => $isparticipant,"age" => $age,"phone" => $phone,"emergencycontact" => $emergencycontact,"dob" => $dob);
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
		);
		foreach($query as $row)
		{
			$student[$row->id]=$row->name;
		}
		
		return $student;
	}
	public function getstudentdropdownbyschool($media)
	{
	    $query=$this->db->query("select `sfa_student`.`id`, `sfa_student`.`name` from `sfa_student` inner join `sfa_media` ON `sfa_student`.`school` = `sfa_media`.`school` where `sfa_media`.`id` = $media ORDER BY `id` ASC")->result();
		$student=array(
		);
		foreach($query as $row)
		{
			$student[$row->id]=$row->name;
		}
		
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
            
            
            $name=$row['name'];
            $school=$row['school'];
            $address=$row['address'];
            $content=$row['content'];
            $email=$row['email'];
            $image=$row['image'];
            $location=$row['location'];
            $sports=$row['sports'];
            $sportscategory=$row['sportscategory'];
            $agegroup=$row['agegroup'];
            $gender=$row['gender'];
            $phone=$row['phone'];
            $emergencycontact=$row['emergencycontact'];
            $dob=$row['dob'];
            $team=$row['team'];
            $year=$row['year'];
            $from = new DateTime($dob);
            $to   = new DateTime('today');
            $calculatedage=$from->diff($to)->y;
            
            $date = date_create($dob);
            $dob=date_format($date, 'Y-m-d');
            
            //GENDER
            
            if($gender=="male"){
            $genderid=1;
            }else{
            $genderid=2;
            }
             $schoolfetch= substr($school, 8, 3);
             $schoolproperid=intval($schoolfetch);
            
            $query1=$this->db->query("SELECT * FROM `sfa_school` WHERE `id`= '$schoolproperid'")->row();
            $schoolid=$query1->id;
           
            $checkstudent=$this->db->query("SELECT * FROM `sfa_student` WHERE `name`= '$name' AND `school`='$schoolid' AND `email`='$email' AND `gender`='$genderid' AND `dob`='$dob'")->row();
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
			'dob' => $dob
		);
		$query=$this->db->insert( 'sfa_student', $data );
		$id=$this->db->insert_id();
            
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
            $query3=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` LIKE '$agegroup'")->row();
            $agegroupid=$query3->id;
            
            
            if(empty($query3)){
                 $data  = array(
                'name' => $agegroup,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_agegroups', $data );
                $agegroupid=$this->db->insert_id();
                
                $data=array("agegroup" => $agegroupid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
                
                 // STUDENT AGEGROUP MAPPING
                
                 $data  = array(
                'student' => $id,
                'sport' => $sportsid,
                'agegroup' => $agegroupid
                );
                $query=$this->db->insert( 'sfa_studentagegroup', $data );
                $studentagegroupid=$this->db->insert_id();
            }
            else{
               $data=array("agegroup" => $agegroupid);
            $this->db->where( "id", $id );
            $query=$this->db->update( "sfa_student", $data );
                
                // STUDENT AGEGROUP MAPPING
                
                 $data  = array(
                'student' => $id,
                'sport' => $sportsid,
                'agegroup' => $agegroupid
                );
                $query=$this->db->insert( 'sfa_studentagegroup', $data );
                $studentagegroupid=$this->db->insert_id();
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
                'emergencycontact' => $emergencycontact
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
            $query3=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` LIKE '$agegroup'")->row();
            $agegroupid=$query3->id;
            
            
            if(empty($query3)){
                 $data  = array(
                'name' => $agegroup,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_agegroups', $data );
                $agegroupid=$this->db->insert_id();
                
                $data=array("agegroup" => $agegroupid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
                
                  // STUDENT AGEGROUP MAPPING
                
                 $data  = array(
                'student' => $id,
                'sport' => $sportsid,
                'agegroup' => $agegroupid
                );
                $query=$this->db->insert( 'sfa_studentagegroup', $data );
                $studentagegroupid=$this->db->insert_id();
            }
            else{
               $data=array("agegroup" => $agegroupid);
            $this->db->where( "id", $id );
            $query=$this->db->update( "sfa_student", $data );
                
                  // STUDENT AGEGROUP MAPPING
                
                 $data  = array(
                'student' => $id,
                'sport' => $sportsid,
                'agegroup' => $agegroupid
                );
                $query=$this->db->insert( 'sfa_studentagegroup', $data );
                $studentagegroupid=$this->db->insert_id();
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
        
		 $query=$this->db->query("SELECT `sfa_student`.`id` FROM `sfa_student` 
LEFT OUTER JOIN `sfa_studentagegroup` ON `sfa_studentagegroup`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_sportcategorystudent` ON `sfa_sportcategorystudent`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  $where");
        echo "SELECT `sfa_student`.`id` FROM `sfa_student` 
LEFT OUTER JOIN `sfa_studentagegroup` ON `sfa_studentagegroup`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_sportcategorystudent` ON `sfa_sportcategorystudent`.`student`=`sfa_student`.`id`

LEFT OUTER JOIN `sfa_school` ON `sfa_school`.`id`=`sfa_student`.`school`  $where";
     if($query->num_rows() >0){
         
         echo count($query);
     }
        else{
            
            echo "nulll h";
        }
        print_r($query);
        
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
}
?>