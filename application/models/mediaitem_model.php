<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class mediaitem_model extends CI_Model
{
public function create($title,$thumbnail,$type,$link,$order,$json,$media)
{
$data=array("title" => $title,"thumbnail" => $thumbnail,"type" => $type,"link" => $link,"order" => $order,"json" => $json,"media" => $media);
$query=$this->db->insert( "sfa_mediaitem", $data );
$id=$this->db->insert_id();
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
}
?>
