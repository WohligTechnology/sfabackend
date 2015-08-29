<section class="panel">
	<header class="panel-heading">
		Sports Details
	</header>
	<div class="panel-body">
		<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editsportssubmit");?>' enctype='multipart/form-data'>
			<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Name</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ',$before->name);?>'>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Status</label>
				<div class="col-sm-4">
					<?php echo form_dropdown( "status",$status,set_value( 'status',$before->status),"class='chzn-select form-control'");?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Order</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value(' order ',$before->order);?>'>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Icon</label>
				<div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="icon" value='<?php echo set_value(' icon ',$before->icon);?>'>
					<?php if($before->icon == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->icon; ?>" width="140px" height="140px">
						<?php }
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Json</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="json" value='<?php echo set_value(' json ',$before->json);?>'>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">About</label>
				<div class="col-sm-8">
					<textarea name="about" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'about',$before->about);?></textarea>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Eligibility</label>
				<div class="col-sm-8">
					<textarea name="eligibility" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'eligibility',$before->eligibility);?></textarea>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Rules</label>
				<div class="col-sm-8">
					<textarea name="rules" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'rules',$before->rules);?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href='<?php echo site_url("site/viewsports"); ?>' class='btn btn-secondary'>Cancel</a>
				</div>
			</div>
		</form>
	</div>
</section>