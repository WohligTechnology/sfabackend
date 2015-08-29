<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createsportsgalleryitem"); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
sportsgalleryitem Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Sports Gallery Item List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="sports">Sports</th>
<th data-field="sportscategory">Sports Category</th>
<th data-field="year">Year</th>
<th data-field="type">Type</th>
<!--<th data-field="order">Order</th>-->
<th data-field="status">Status</th>
<th data-field="image">Image</th>
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
	if(resultrow.type==0){
	resultrow.type="Text";
	}
	else if(resultrow.type==1){
	resultrow.type="Image";
	}
	else if(resultrow.type==2){
	resultrow.type="Video";
	}
	var image="<a href='<?php echo base_url('uploads').'/'; ?>"+resultrow.image+"' target='_blank'><img src='<?php echo base_url('uploads').'/'; ?>"+resultrow.image+"' width='80px' height='80px'></a>";
                if(resultrow.image=="")
                {
                image="No Receipt Available";
                }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.sports + "</td><td>" + resultrow.sportscategory + "</td><td>" + resultrow.year + "</td><td>" + resultrow.type + "</td><td>" + resultrow.status + "</td><td>" + image + "</td><td>" + resultrow.title + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editsportsgalleryitem?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletesportsgalleryitem?id='); ?>"+resultrow.id+"&sports="+resultrow.sportsid+"&sportscategory="+resultrow.sportscategoryid+"&year="+resultrow.yearid+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
