<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<a class="btn btn-primary pull-right" href="<?php echo site_url("site/createsportscategory?id=").$this->input->get('id'); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
	</div>	
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
<!--
			<header class="panel-heading">
				sportscategory Details
			</header>
-->
			<div class="drawchintantable">
				<?php $this->chintantable->createsearch("Sports Category List");?>
				<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th data-field="id">ID</th>
							<th data-field="sports">Sports</th>
							<th data-field="title">Title</th>
							<th data-field="order">Order</th>
							<th data-field="status">Status</th>
							<th data-field="type">Type</th>
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
				resultrow.type="Team";
				}
				else if(resultrow.type==1){
				resultrow.type="Single";
				}
				return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.sports + "</td><td>" + resultrow.title + "</td><td>" + resultrow.order + "</td><td>" + resultrow.status + "</td><td>" + resultrow.type + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editsportscategory?id=');?>" + resultrow.id +  "&sportsid="+resultrow.sportsid+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' onclick=\"return confirm('Are you sure you want to delete?');\" href='<?php echo site_url('site/deletesportscategory?id='); ?>" + resultrow.id +   "&sportsid="+resultrow.sportsid+"'><i class='icon-trash '></i></a></td></tr>";
			}
			generatejquery("<?php echo $base_url;?>");
		</script>
	</div>
</div>




            