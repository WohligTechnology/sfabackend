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
	    
	    $query['sportname'] = $this->db->query("Select `sfa_sports`.`id`, `sfa_sports`.`name`,`sfa_school`.`id` as `schoolid`, `sfa_school`.`name` as `schoolname` from `sfa_sports` inner join `sfa_student` ON `sfa_sports`.`id` = `sfa_student`.`sports` inner join `sfa_school` ON `sfa_student`.`school` = `sfa_school`.`id` where `sfa_school`.`id` = $id")->result();
	    
	    
        
        return $query;
        
    }
 
    
    public function createEnquiries($name,$email,$mobile,$person)
{
$data=array("name" => $name,"email" => $email,"mobile" => $mobile,"person" => $person);
$query=$this->db->insert( "enquiries", $data );
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
        
        $query['sportsparticipated']=$this->db->query("SELECT DISTINCT(`sfa_sports`.`id`), `sfa_sports`.`name` FROM `sfa_sports` LEFT OUTER JOIN `sfa_studentsport` ON `sfa_studentsport`.`sport`=`sfa_sports`.`id` LEFT OUTER JOIN `sfa_student` ON `sfa_student`.`id`=`sfa_studentsport`.`student` WHERE `sfa_student`.`id`='$id'")->result();
        
        return $query;
}
    
    
}
?>
