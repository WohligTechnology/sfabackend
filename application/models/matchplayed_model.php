<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class matchplayed_model extends CI_Model
{
public function create($match,$type,$order,$team,$student,$result,$round,$reason)
{
$data=array("match" => $match,"type" => $type,"order" => $order,"team" => $team,"student" => $student,"result" => $result,"round" => $round,"reason" => $reason);
$query=$this->db->insert( "sfa_matchplayed", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_matchplayed")->row();
return $query;
}
function getsinglematchplayed($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_matchplayed")->row();
return $query;
}
public function edit($id,$match,$type,$order,$team,$student,$result,$round,$reason)
{
    $data=array("match" => $match,"type" => $type,"order" => $order,"team" => $team,"student" => $student,"result" => $result,"round" => $round,"reason" => $reason);
    $this->db->where( "id", $id );
    $query=$this->db->update( "sfa_matchplayed", $data );
    
     $matchdetails=$this->db->query("SELECT `id`, `sports`, `sportscategory`, `agegroup`, `timestamp`, `status`, `resulttimestamp`, `matchresult`, `name`, `starttime`, `endtime`, `gender`, `matchdate`, `round` FROM `sfa_match` WHERE `id`='$match'")->row();
    $sports=$matchdetails->sports;
    $sportscategory=$matchdetails->sportscategory;
    $agegroup=$matchdetails->agegroup;
    $sports=$matchdetails->sports;
    $name=$matchdetails->name;
    $gender=$matchdetails->gender;
    $round=$matchdetails->round;
    $roundvalue=substr($round, -1);
    $newround=$round+1;
    if($result==1)
    {
      
            $checkplayercount=$this->db->query("SELECT `sfa_match`.`id`,count(`sfa_match`.`id`) as `count` FROM `sfa_match` INNER JOIN `sfa_matchplayed` ON `sfa_matchplayed`.`match`=`sfa_match`.`id` WHERE `sfa_match`.`sports`=$sports AND `sfa_match`.`agegroup`=$agegroup AND `sfa_match`.`sportscategory`=$sportscategory GROUP BY `sfa_match`.`id` HAVING `count`=1");
//        $c=$checkplayercount->num_rows();
//        echo " palyer count ";
//        echo $c;
        if($checkplayercount->num_rows == 0 )
        {
         $data=array("sports" => $sports,"sportscategory" => $sportscategory,"agegroup" => $agegroup,"status" => 1,"gender" => $gender,"round" => $newround);
            $query=$this->db->insert( "sfa_match", $data );
            $newmatchid=$this->db->insert_id();
                $idofmatch=$newmatchid;
                // MATCH PLAYERS
//                echo "payed";
            $data=array("match" => $idofmatch,"type" => $type,"team" => $team,"student" => $student,"result" => 0,"round" => $newround);
            $query=$this->db->insert( "sfa_matchplayed", $data );
            $id=$this->db->insert_id();
        }
        else if($checkplayercount->num_rows==1)
        {
            $newmatch=$this->db->query("SELECT * FROM `sfa_match` WHERE `sports`= $sports AND `agegroup`= $agegroup AND `sportscategory`= $sportscategory AND `gender` = $gender AND `round`=$newround")->row();
            $newmatchid=$newmatch->id;
              // INSERT ONE MORE PLAYER INTO MATCH
            $data=array("match" => $newmatchid,"type" => $type,"team" => $team,"student" => $student,"result" => 0,"round" => $newround);
            $query=$this->db->insert( "sfa_matchplayed", $data );
            $id=$this->db->insert_id();
        }
        
    }
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_matchplayed` WHERE `id`='$id'");
return $query;
}
    public function getsport($id)
{
    $getswimming=$this->db->query("SELECT * FROM `sfa_sports` WHERE `name` LIKE '%swimming%'")->row();
    $getothersport=$this->db->query("SELECT `sports` FROM `sfa_match` WHERE `id`= '$id'")->row();
    $getothersportid=$getothersport->sports;
        
    $swimmingid=$getswimming->id;
    if($getothersportid==$swimmingid)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
		public function gettypedropdown()
	{
		$type=array(
			"" => "Choose Type",
			"0" => "Student",
			"1" => "Team"
		);
//		foreach($query as $row)
//		{
//			$return[$row->id]=$row->name;
//		}
		
		return $type;
	}	
	public function getresultdropdown()
	{
		$type=array(
			"0" => "Not yet",
			"1" => "Won",
			"2" => "Lost",
			"3" => "Draw"
		);
//		foreach($query as $row)
//		{
//			$return[$row->id]=$row->name;
//		}
		
		return $type;
	}
}
?>
