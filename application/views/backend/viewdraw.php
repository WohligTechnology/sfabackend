<div class="row" style="padding:1% 0">
<div class="col-md-12">

<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/uploaddrawcsv"); ?>"><i class="icon-plus"></i>Upload Draw </a> &nbsp;
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
<?php $this->chintantable->createsearch("Schedule");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="sport">Sport</th>
<th data-field="sportcategory">Sports Category</th>
<th data-field="agegroup">Age group</th>
<th data-field="gender">gender</th>
<th data-field="winner">winner</th>
<th data-field="round">round</th>
<th data-field="player1">player1</th>
<th data-field="player2">player2</th>
<!--
<th data-field="action">Action</th> -->

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
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.sport + "</td><td>" + resultrow.sportcategory + "</td><td>" + resultrow.agegroup + "</td><td>" + resultrow.gender + "</td><td>" + resultrow.winner + "</td><td>" + resultrow.round + "</td><td>" + resultrow.player1 + "</td><td>" + resultrow.player2 + "</td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
