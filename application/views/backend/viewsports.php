<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createsports"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
sports Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Sports List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="name">Name</th>
<th data-field="status">Status</th>
<th data-field="order">Order</th>
<th data-field="icon">Icon</th>
<th data-field="action">Action</th>
<!--
<th data-field="about">About</th>
<th data-field="eligibility">Eligibility</th>
<th data-field="rules">Rules</th>
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
	var icon="<a href='<?php echo base_url('uploads').'/'; ?>"+resultrow.icon+"' target='_blank'><img src='<?php echo base_url('uploads').'/'; ?>"+resultrow.icon+"' width='80px' height='80px'></a>";
                if(resultrow.icon=="")
                {
                icon="No Receipt Available";
                }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.status + "</td><td>" + resultrow.order + "</td><td>" + icon + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editsports?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletesports?id='); ?>"+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
