<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/creatematchplayed"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
matchplayed Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Match Played List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="match">Match</th>
<th data-field="type">Type</th>
<th data-field="order">Order</th>
<th data-field="team">team</th>
<th data-field="student">Student</th>
<th data-field="result">Result</th>
<th data-field="round">Round</th>
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
	if (resultrow.result==0){
	resultrow.result="Won";
	}
	else if(resultrow.result==1){
	resultrow.result="Lost";
	}
	else if(resultrow.result==2){
	resultrow.result="Draw";
	}
	if (resultrow.type==0){
	resultrow.type="Student";
	}
	else if(resultrow.type==1){
	resultrow.type="Team";
	}
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.match + "</td><td>" + resultrow.type + "</td><td>" + resultrow.order + "</td><td>" + resultrow.team + "</td><td>" + resultrow.student + "</td><td>" + resultrow.result + "</td><td>" + resultrow.round + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editmatchplayed?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletematchplayed?id='); ?>"+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
