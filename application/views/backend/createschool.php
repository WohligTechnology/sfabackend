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
School Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createschoolsubmit");?>' enctype= 'multipart/form-data'>
<div class="panel-body">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Email</label>
<div class="col-sm-4">
<input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value('email');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Contact</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="contact" value='<?php echo set_value('contact');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Image</label>
<div class="col-sm-4">
<input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value('image');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Location</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="location" value='<?php echo set_value('location');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Address</label>
<div class="col-sm-8">
<textarea name="address" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'address');?></textarea>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Biography</label>
<div class="col-sm-8">
<textarea name="biography" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'biography');?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href="<?php echo site_url("site/viewschool"); ?>" class="btn btn-secondary">Cancel</a>
</div>
</div>
</form>
</div>
</section>
</div>
</div>
