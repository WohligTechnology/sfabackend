<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class sportsgalleryitem_model extends CI_Model
{
public function create($sports,$sportscategory,$year,$type,$order,$status,$image,$title)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"year" => $year,"type" => $type,"order" => $order,"status" => $status,"image" => $image,"title" => $title);
$query=$this->db->insert( "sfa_sportsgalleryitem", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
	public function check($sports,$sportscategory,$year)
{
$query=$this->db->query("SELECT * FROM `sfa_sportsgalleryitem` WHERE `sports`='$sports' AND `sportscategory`='$sportscategory' AND `year`='$year'")->result();
return $query;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_sportsgalleryitem")->row();
return $query;
}
function getsinglesportsgalleryitem($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_sportsgalleryitem")->row();
return $query;
}
public function edit($id,$sports,$sportscategory,$year,$type,$order,$status,$image,$title)
{
$data=array("sports" => $sports,"sportscategory" => $sportscategory,"year" => $year,"type" => $type,"order" => $order,"status" => $status,"image" => $image,"title" => $title);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_sportsgalleryitem", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_sportsgalleryitem` WHERE `id`='$id'");
return $query;
}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_sportsgalleryitem` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
