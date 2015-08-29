<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createbannerslides?id=").$this->input->get('id'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
bannerslides Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Banner Slides List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="banner">banner</th>
<th data-field="order">Order</th>
<th data-field="icon">Icon</th>
<th data-field="title">Title</th>
<th data-field="link">Link</th>
<th data-field="image">Image</th>
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
	var image="<a href='<?php echo base_url('uploads').'/'; ?>"+resultrow.image+"' target='_blank'><img src='<?php echo base_url('uploads').'/'; ?>"+resultrow.image+"' width='80px' height='80px'></a>";
                if(resultrow.image=="")
                {
                image="No Receipt Available";
                }
	var icon="<a href='<?php echo base_url('uploads').'/'; ?>"+resultrow.icon+"' target='_blank'><img src='<?php echo base_url('uploads').'/'; ?>"+resultrow.icon+"' width='80px' height='80px'></a>";
                if(resultrow.icon=="")
                {
                image="No Receipt Available";
                }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.banner + "</td><td>" + resultrow.order + "</td><td>" + icon + "</td><td>" + resultrow.title + "</td><td>" + resultrow.link + "</td><td>" + image + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editbannerslides?id=');?>" + resultrow.id + "&bannerid="+resultrow.bannerid+ "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletebannerslides?id='); ?>" + resultrow.id + "&bannerid="+resultrow.bannerid+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>




               
