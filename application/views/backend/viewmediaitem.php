<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createmediaitem?id=").$this->input->get('id'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
mediaitem Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Media Item List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="title">Title</th>
<th data-field="thumbnail">Thumbnail</th>
<th data-field="type">Type</th>
<!--<th data-field="link">Link</th>-->
<th data-field="order">Order</th>
<!--<th data-field="json">Json</th>-->
<th data-field="media">Media</th>
<th data-field="action">Action</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<?php $this->chintantable->createpagination();?>
</div>
</section>
<script>
function drawtable(resultrow) {
	if(resultrow.type==0){
	resultrow.type="Text";
	}
	else if(resultrow.type==1){
	resultrow.type="Image";
	}
	else if(resultrow.type==2){
	resultrow.type="Audio";
	}
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.title + "</td><td>" + resultrow.thumbnail + "</td><td>" + resultrow.type + "</td><td>" + resultrow.order + "</td><td>" + resultrow.media + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editmediaitem?id=');?>"+resultrow.id+ "&mediaid="+ resultrow.mediaid +"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletemediaitem?id='); ?>"+resultrow.id+ "&mediaid="+ resultrow.mediaid +"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
