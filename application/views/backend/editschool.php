<section class="panel">
<header class="panel-heading">
School Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editschoolsubmit");?>' enctype= 'multipart/form-data'>
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
<label class="col-sm-2 control-label" for="normal-field">Contact</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="contact" value='<?php echo set_value('contact',$before->contact);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Image</label>
<div class="col-sm-4">
<input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value('image',$before->image);?>'>
<?php if($before->image == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->image; ?>" width="140px" height="140px">
						<?php }
					?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Location</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="location" value='<?php echo set_value('location',$before->location);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Address</label>
<div class="col-sm-8">
<textarea name="address" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'address',$before->address);?></textarea>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Biography</label>
<div class="col-sm-8">
<textarea name="biography" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'biography',$before->biography);?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewschool"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
