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
}
?>
