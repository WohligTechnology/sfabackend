<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/creatematch"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
match Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Match List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="name">Name</th>
<th data-field="sports">Sports</th>
<th data-field="sportscategory">Sports Category</th>
<th data-field="agegroup">Age group</th>
<th data-field="status">Status</th>
<th data-field="timestamp">Time stamp</th>
<th data-field="action">Action</th>

<!--
<th data-field="resulttimestamp">Result timestamp</th>
<th data-field="matchresult">Match Result</th>
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
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.sports + "</td><td>" + resultrow.sportscategory + "</td><td>" + resultrow.agegroup + "</td><td>" + resultrow.status + "</td><td>" + resultrow.timestamp + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editmatch?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletematch?id='); ?>"+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
