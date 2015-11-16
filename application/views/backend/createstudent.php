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
Student Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createstudentsubmit");?>' enctype= 'multipart/form-data'>
<div class="panel-body">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">School</label>
<div class="col-sm-4">
<?php echo form_dropdown("school",$school,set_value('school'),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Email</label>
<div class="col-sm-4">
<input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value('email');?>'>
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
<label class="col-sm-2 control-label" for="normal-field">Content</label>
<div class="col-sm-8">
<textarea name="content" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'content');?></textarea>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Sports</label>
<div class="col-sm-4">
<?php echo form_dropdown("sports",$sports,set_value('sports'),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Sports Category</label>
<div class="col-sm-4">
<?php echo form_dropdown("sportscategory",$sportscategory,set_value('sportscategory'),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Age Groups</label>
<div class="col-sm-4">
<?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup'),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Phone</label>
<div class="col-sm-4">
<?php echo form_dropdown("phone",$phone,set_value('phone'),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Emergency Contact</label>
<div class="col-sm-8">
<textarea name="emergencycontact" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'emergencycontact');?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">dob</label>
<div class="col-sm-4">
<input type="date" id="normal-field" class="form-control" name="dob" value='<?php echo set_value('dob');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href="<?php echo site_url("site/viewstudent?id=").$this->input->get('id'); ?>" class="btn btn-secondary">Cancel</a>
</div>
</div>
</form>
</div>
</section>
</div>
</div>
