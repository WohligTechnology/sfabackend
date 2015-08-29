<section class="panel">
<header class="panel-heading">
Media Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editmediasubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Status</label>
<div class="col-sm-4">
<?php echo form_dropdown("status",$status,set_value('status',$before->status),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Icon</label>
<div class="col-sm-4">
<input type="file" id="normal-field" class="form-control" name="icon" value='<?php echo set_value('icon',$before->icon);?>'>
<?php if($before->icon == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->icon; ?>" width="140px" height="140px">
						<?php }
					?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Json</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="json" value='<?php echo set_value('json',$before->json);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewmedia"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
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
