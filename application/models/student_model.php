<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class student_model extends CI_Model
{
public function create($name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob)
{
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location,"address" => $address,"content" => $content,"sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"gender" => $gender,"isparticipant" => $isparticipant,"age" => $age,"phone" => $phone,"emergencycontact" => $emergencycontact,"dob" => $dob);
$query=$this->db->insert( "sfa_student", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_student")->row();
return $query;
}
function getsinglestudent($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_student")->row();
return $query;
}
public function edit($id,$name,$school,$email,$image,$location,$address,$content,$sports,$sportscategory,$agegroup,$gender,$isparticipant,$age,$phone,$emergencycontact,$dob)
{
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location,"address" => $address,"content" => $content,"sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"gender" => $gender,"isparticipant" => $isparticipant,"age" => $age,"phone" => $phone,"emergencycontact" => $emergencycontact,"dob" => $dob);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_student", $data );
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
            $from = new DateTime($dob);
            $to   = new DateTime('today');
            $calculatedage=$from->diff($to)->y;
            
            //GENDER
            
            if($gender=="male"){
            $genderid=1;
            }else{
            $genderid=2;
            }
            
            $query1=$this->db->query("SELECT `id` FROM `sfa_school` WHERE `name` LIKE '$school'")->row();
            $schoolid=$query1->id;
            //sports
            $query2=$this->db->query("SELECT `id` FROM `sfa_sports` WHERE `name` LIKE '$sports'")->row();
            $sportsid=$query2->id;
            //sportscategory
            $query3=$this->db->query("SELECT `id` FROM `sfa_sportscategory` WHERE `title` LIKE '$sportscategory'")->row();
            $sportscategoryid=$query3->id;
            
            //agegroups
            $query3=$this->db->query("SELECT `id` FROM `sfa_agegroups` WHERE `name` LIKE '$agegroup'")->row();
            $agegroupid=$query3->id;
          
            
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
			'gender' => $genderid
		);
		$query=$this->db->insert( 'sfa_student', $data );
		$id=$this->db->insert_id();
         //sports
            if($sportsid !=""){
                $data=array("sports" => $sportsid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
            }
            else
            {
                $data  = array(
                'name' => $sports,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_sports', $data );
                $newsportid=$this->db->insert_id();
                
                $data=array("sports" => $newsportid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
            }
            //sportscategory
            if($sportscategoryid !=""){
            $data=array("sportscategory" => $sportscategoryid);
            $this->db->where( "id", $id );
            $query=$this->db->update( "sfa_student", $data );
            }
            else{
                if($newsportid!=""){
                     $data  = array(
                    'title' => $sportscategory,
                    'status' => 1,
                    'sports' => $sports
                    );
                    $query=$this->db->insert( 'sfa_sportscategory', $data );
                    $newsportcatid=$this->db->insert_id();
                }
                else{
                    $data  = array(
                    'title' => $sportscategory,
                    'status' => 1,
                    'sports' => $newsportid
                    );
                    $query=$this->db->insert( 'sfa_sportscategory', $data );
                    $newsportcatid=$this->db->insert_id();
                }
                
                $data=array("sportscategory" => $newsportcatid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
            }
            //agegroup
            if($agegroupid !=""){
            $data=array("agegroup" => $agegroupid);
            $this->db->where( "id", $id );
            $query=$this->db->update( "sfa_student", $data );
            }
            else{
                $data  = array(
                'name' => $agegroup,
                'status' => 1
                );
                $query=$this->db->insert( 'sfa_agegroups', $data );
                $newagegrpid=$this->db->insert_id();
                
                $data=array("agegroup" => $newagegrpid);
                $this->db->where( "id", $id );
                $query=$this->db->update( "sfa_student", $data );
            }
        }
			return  1;
	}
    public function getgenderdropdown()
	{
		$return=array(
            "1" => "Male",
			"2" => "Female"
		);
		
		return $return;
	}
    
    public function getisparticipantdropdown()
	{
		$isparticipant=array(
			"1" => "Yes",
			"2" => "No"	
		);
		return $isparticipant;
	}
}
?>
