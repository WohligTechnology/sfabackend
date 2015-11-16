<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class school_model extends CI_Model
{
public function create($name,$email,$contact,$image,$location,$address,$biography,$authority)
{
$data=array("name" => $name,"email" => $email,"contact" => $contact,"image" => $image,"location" => $location,"address" => $address,"biography" => $biography,"authority" => $authority);
$query=$this->db->insert( "sfa_school", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_school")->row();
return $query;
}
function getsingleschool($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_school")->row();
return $query;
}
public function edit($id,$name,$email,$contact,$image,$location,$address,$biography,$authority)
{
$data=array("name" => $name,"email" => $email,"contact" => $contact,"image" => $image,"location" => $location,"address" => $address,"biography" => $biography,"authority" => $authority);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_school", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_school` WHERE `id`='$id'");
return $query;
}
	public function getschooldropdown()
	{
	    $query=$this->db->query("SELECT * FROM `sfa_school`  ORDER BY `id` ASC")->result();
		$school=array(
		);
		foreach($query as $row)
		{
			$school[$row->id]=$row->name;
		}
		
		return $school;
	}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_school` WHERE `id`='$id'")->row();
		return $query;
	}
    public function createbycsv($file)
	{
        foreach ($file as $row)
        {
            $name=$row['name'];
            $email=$row['email'];
            $contact=$row['contact'];
            $image=$row['image'];
            $address=$row['address'];
            $location=$row['location'];
            $biography=$row['biography'];
            $authority=$row['authority'];
            
            $query1=$this->db->query("SELECT `id` FROM `sfa_school` WHERE `name` LIKE '$name'")->row();
            $schoolid=$query1->id;
            if($schoolid){
            
		$data  = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'image' => $image,
			'address' => $address,
			'location' => $location,
			'biography' => $biography,
			'authority' => $authority
		);
		$query=$this->db->insert( 'sfa_school', $data );
		$id=$this->db->insert_id();
            }
            else{}
            
        }
			return  1;
	}
}
?>
