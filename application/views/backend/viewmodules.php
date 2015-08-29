<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createmodules"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
Modules Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Modules List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="name">Name</th>
<th data-field="status">Status</th>
<!--<th data-field="url">Url</th>-->
<th data-field="type">Type</th>
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
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.status + "</td><td>" + resultrow.type + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editmodules?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletemodules?id='); ?>"+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
