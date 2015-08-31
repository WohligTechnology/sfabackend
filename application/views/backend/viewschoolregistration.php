<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createschoolregistration"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
school Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("School Registeration List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="name">Name</th>
<th data-field="email">Email</th>
<th data-field="timestamp">Timestamp</th>
<th data-field="mobile">Mobile</th>
<th data-field="landline">Landline</th>
<th data-field="action">Action</th>
<!--
<th data-field="address">Address</th>
<th data-field="biography">Biography</th>
-->
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
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.email + "</td><td>" + resultrow.timestamp + "</td><td>" + resultrow.mobile + "</td><td>" + resultrow.landline + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editschoolregistration?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deleteschoolregistration?id='); ?>"+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
