<div class="row" style="padding:1% 0">
<div class="col-md-12">
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
articles Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Newsletter List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="email">Email</th>
<th data-field="timestamp">Timestamp</th>
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
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.email + "</td><td>" + resultrow.timestamp + "</td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
