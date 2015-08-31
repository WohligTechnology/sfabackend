<section class="panel">
<header class="panel-heading">
School Registration Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editschoolregistrationsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Email</label>
<div class="col-sm-4">
<input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value('email',$before->email);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Contact Person</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="contactperson" value='<?php echo set_value('contactperson',$before->contactperson);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Establish Date</label>
<div class="col-sm-4">
<input type="date" id="normal-field" class="form-control" name="establishdate" value='<?php echo set_value('establishdate',$before->establishdate);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Contact Person</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="contactperson" value='<?php echo set_value('contactperson',$before->contactperson);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Address</label>
<div class="col-sm-8">
<textarea name="address" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'address',$before->address);?></textarea>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Type</label>
<div class="col-sm-8">
	<?php echo form_dropdown( "type",$type,set_value( 'type',$before->type), "class='chzn-select form-control'");?>
</div>
</div>
     <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Mobile</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="mobile" value='<?php echo set_value('mobile',$before->mobile);?>'>
</div>
</div>
    <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Landline</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="landline" value='<?php echo set_value('landline',$before->landline);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewschoolregistration"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
