<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createteam1"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 

</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
team Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Team List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="title">Title</th>
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
	var studentid ="<?php echo $this->input->get('id'); ?>";
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.title + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editteam1?id=');?>"+resultrow.teamid+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' onclick=\"return confirm('Are you sure you want to delete?');\" href='<?php echo site_url('site/deleteteam1?id='); ?>"+resultrow.teamid+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
