<section class="panel">
	<header class="panel-heading">
		Sports Category Details
	</header>
	<div class="panel-body">
		<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editsportscategorysubmit");?>' enctype='multipart/form-data'>
			<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Sports</label>
				<div class="col-sm-4">
					<?php echo form_dropdown( "sports",$sports,set_value( 'sports',$before->sports),"class='chzn-select form-control'");?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Title</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ',$before->title);?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Order</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value(' order ',$before->order);?>'>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Status</label>
				<div class="col-sm-4">
					<?php echo form_dropdown( "status",$status,set_value( 'status',$before->status),"class='chzn-select form-control'");?>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Type</label>
				<div class="col-sm-4">
					<?php echo form_dropdown( "type",$type,set_value( 'type',$before->type),"class='chzn-select form-control'");?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Json</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="json" value='<?php echo set_value(' json ',$before->json);?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href='<?php echo site_url("site/viewsportscategory?id=").$this->input->get('sportsid'); ?>' class='btn btn-secondary'>Cancel</a>
				</div> 			
			</div>
		</form>
	</div>
</section>