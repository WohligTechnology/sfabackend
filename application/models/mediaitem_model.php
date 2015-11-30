<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class mediaitem_model extends CI_Model
{
	public function createmediastudent($value,$id){
		$data  = array(
			'student' => $value,
			'mediaitem' => $id
		);
		$query=$this->db->insert( 'sfa_mediastudents', $data );
		return  1;
	}
	
public function create($title,$thumbnail,$type,$link,$order,$json,$media,$student)
{
	$data=array("title" => $title,"thumbnail" => $thumbnail,"type" => $type,"link" => $link,"order" => $order,"json" => $json,"media" => $media);
	$query=$this->db->insert( "sfa_mediaitem", $data );
	$id=$this->db->insert_id();
	//code here
        foreach($student AS $key=>$value)
        {
            $this->mediaitem_model->createmediastudent($value,$id);
        }
	if(!$query)
	return  0;
	else
	return  $id;
}
	
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("sfa_mediaitem")->row();
return $query;
}
function getsinglemediaitem($id){
$this->db->where("id",$id);
$query=$this->db->get("sfa_mediaitem")->row();
return $query;
}
public function edit($id,$title,$thumbnail,$type,$link,$order,$json,$media)
{
$data=array("title" => $title,"thumbnail" => $thumbnail,"type" => $type,"link" => $link,"order" => $order,"json" => $json,"media" => $media);
$this->db->where( "id", $id );
$query=$this->db->update( "sfa_mediaitem", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `sfa_mediaitem` WHERE `id`='$id'");
return $query;
}
    public function getimagebyid($id)
	{
		$query=$this->db->query("SELECT `thumbnail` FROM `sfa_mediaitem` WHERE `id`='$id'")->row();
		return $query;
	}
}
?>