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
Sports Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createsportssubmit");?>' enctype= 'multipart/form-data'>
<div class="panel-body">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Status</label>
<div class="col-sm-4">
<?php echo form_dropdown("status",$status,set_value('status'),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Icon</label>
<div class="col-sm-4">
<input type="file" id="normal-field" class="form-control" name="icon" value='<?php echo set_value('icon');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Json</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="json" value='<?php echo set_value('json');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">About</label>
<div class="col-sm-8">
<textarea name="about" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'about');?></textarea>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Eligibility</label>
<div class="col-sm-8">
<textarea name="eligibility" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'eligibility');?></textarea>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Rules</label>
<div class="col-sm-8">
<textarea name="rules" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'rules');?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href="<?php echo site_url("site/viewsports"); ?>" class="btn btn-secondary">Cancel</a>
</div>
</div>
</form>
</div>
</section>
</div>
</div>
