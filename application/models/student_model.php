<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class student_model extends CI_Model
{
public function create($name,$school,$email,$image,$location,$address,$content)
{
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location,"address" => $address,"content" => $content);
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
public function edit($id,$name,$school,$email,$image,$location,$address,$content)
{
$data=array("name" => $name,"school" => $school,"email" => $email,"image" => $image,"location" => $location,"address" => $address,"content" => $content);
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
            
            $query1=$this->db->query("SELECT `id` FROM `sfa_school` WHERE `name` LIKE '$school'")->row();
            $schoolid=$query1->id;
            
		$data  = array(
			'name' => $name,
			'school' => $schoolid,
			'address' => $address,
			'content' => $content,
			'email' => $email,
			'image' => $image,
			'location' => $location
		);
		$query=$this->db->insert( 'sfa_student', $data );
		$id=$this->db->insert_id();
         
            
        }
			return  1;
	}
}
?>
