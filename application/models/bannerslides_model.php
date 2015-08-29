<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class bannerslides_model extends CI_Model
{
public function create($banner,$order,$icon,$title,$link,$image)
{
$data=array("banner" => $banner,"order" => $order,"icon" => $icon,"title" => $title,"link" => $link,"image" => $image);
$query=$this->db->insert( "sfa_bannerslides", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_bannerslides")->row();
return $query;
}
function getsinglebannerslides($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_bannerslides")->row();
return $query;
}
public function edit($id,$banner,$order,$icon,$title,$link,$image)
{
$data=array("banner" => $banner,"order" => $order,"icon" => $icon,"title" => $title,"link" => $link,"image" => $image);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_bannerslides", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_bannerslides` WHERE `id`='$id'");
return $query;
}
	 public function getbannerdropdown()
	{
		$query=$this->db->query("SELECT * FROM `sfa_banner`  ORDER BY `id` ASC")->result();
		$banner=array(
		);
		foreach($query as $row)
		{
			$banner[$row->id]=$row->name;
		}
		
		return $banner;
	}
	public function geticonbyid($id){
		$query=$this->db->query("SELECT `icon` FROM `sfa_bannerslides` WHERE `id`='$id'")->row();
		return $query;
	}
	public function getimagebyid($id){
		$query=$this->db->query("SELECT `image` FROM `sfa_bannerslides` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>
