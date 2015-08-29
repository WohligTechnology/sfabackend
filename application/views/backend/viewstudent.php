<div class="row" style="padding:1% 0">
<div class="col-md-12">
<a class="btn btn-primary pull-right"  href="<?php echo site_url("site/createstudent?id=").$this->input->get('id'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<!--
<header class="panel-heading">
student Details
</header>
-->
<div class="drawchintantable">
<?php $this->chintantable->createsearch("Student List");?>
<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="name">Name</th>
<th data-field="school">School</th>
<th data-field="email">Email</th>
<th data-field="image">Image</th>
<th data-field="location">Location</th>
<!--
<th data-field="address">Address</th>
<th data-field="content">Content</th>
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
		var image="<a href='<?php echo base_url('uploads').'/'; ?>"+resultrow.image+"' target='_blank'><img src='<?php echo base_url('uploads').'/'; ?>"+resultrow.image+"' width='80px' height='80px'></a>";
                if(resultrow.image=="")
                {
                image="No Receipt Available";
                }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.school + "</td><td>" + resultrow.email + "</td><td>" + image + "</td><td>" + resultrow.location + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editstudent?id=');?>"+resultrow.id+ "&schoolid=" + resultrow.schoolid + "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletestudent?id='); ?>"+resultrow.id+ "&schoolid=" +resultrow.schoolid + "'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
</div>
</div>
