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
				Please Select Below Fields
			</header>
			<div class="panel-body">
				<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/viewsportsgalleryitem");?>' enctype='multipart/form-data'>
					<div class="panel-body">
						<div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Sports</label>
							<div class="col-sm-4">
								<?php echo form_dropdown( "sports",$sports,set_value( 'sports'), "class='chzn-select form-control'");?>
							</div>
						</div>
						<div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Sports Category</label>
							<div class="col-sm-4">
								<?php echo form_dropdown( "sportscategory",$sportscategory,set_value( 'sportscategory'), "class='chzn-select form-control'");?>
							</div>
						</div>
						<div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Year</label>
							<div class="col-sm-4">
								<?php echo form_dropdown( "year",$year,set_value( 'year'), "class='chzn-select form-control'");?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
							<div class="col-sm-4">
								<button type="submit" class="btn btn-primary">Save</button>
<!--								<a href="<?php echo site_url("site/viewsportsgalleryitem"); ?>" class="btn btn-secondary">Cancel</a>-->
							</div>
						</div>
				</form>
				</div>
		</section>
		</div>
	</div>