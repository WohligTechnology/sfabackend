<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<div class="pull-right">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Banner Slides Details
			</header>
			<div class="panel-body">
				<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createbannerslidessubmit?id=").$this->input->get('id');?>' enctype='multipart/form-data'>
					<div class="panel-body">
						<div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">banner</label>
							<div class="col-sm-4">
								<?php echo form_dropdown( "banner",$banner,set_value( 'banner',$this->input->get('id')), "class='chzn-select form-control'");?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="normal-field">Order</label>
							<div class="col-sm-4">
								<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value(' order ');?>'>
							</div>
						</div>
						<div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Icon</label>
							<div class="col-sm-4">
								<input type="file" id="normal-field" class="form-control" name="icon" value='<?php echo set_value(' icon ');?>'>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="normal-field">Title</label>
							<div class="col-sm-4">
								<input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ');?>'>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="normal-field">Link</label>
							<div class="col-sm-4">
								<input type="text" id="normal-field" class="form-control" name="link" value='<?php echo set_value(' link ');?>'>
							</div>
						</div>
						<div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Image</label>
							<div class="col-sm-4">
								<input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value(' image ');?>'>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
							<div class="col-sm-4">
								<button type="submit" class="btn btn-primary">Save</button>
								<a href="<?php echo site_url("site/viewbannerslides?id=").$this->input->get('id'); ?>" class="btn btn-secondary">Cancel</a>
							</div>
						</div>
				</form>
				</div>
		</section>
		</div>
	</div>