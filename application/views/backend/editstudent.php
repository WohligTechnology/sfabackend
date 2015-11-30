<section class="panel">
<header class="panel-heading">
Student Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editstudentsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">School</label>
<div class="col-sm-4">
<?php echo form_dropdown("school",$school,set_value('school',$before->school),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Email</label>
<div class="col-sm-4">
<input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value('email',$before->email);?>'>
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
<label class="col-sm-2 control-label" for="normal-field">Content</label>
<div class="col-sm-8">
<textarea name="content" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'content',$before->content);?></textarea>
</div>
</div>
<div class=" form-group">
				  <label class="col-sm-2 control-label">Sports</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_multiselect('sports[]',$sports,$selectedsport,'id="select3" class="chzn-select form-control" 	data-placeholder="Choose an sports..." multiple');
					?>
				  </div>
				</div>
    <div class=" form-group">
				  <label class="col-sm-2 control-label">Sports Category</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_multiselect('sportscategory[]',$sportscategory,$selectedsportscategory,'id="select3" class="chzn-select form-control" 	data-placeholder="Choose an sportscategory..." multiple');
					?>
				  </div>
				</div>

<div class=" form-group">
				  <label class="col-sm-2 control-label">Age Groups</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_multiselect('agegroup[]',$agegroup,$selectedagegroup,'id="select3" class="chzn-select form-control" 	data-placeholder="Choose an agegroup..." multiple');
					?>
				  </div>
				</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Gender</label>
<div class="col-sm-4">
<?php echo form_dropdown("gender",$gender,set_value('gender',$before->gender),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Is Participant</label>
<div class="col-sm-4">
<?php echo form_dropdown("isparticipant",$isparticipant,set_value('isparticipant',$before->isparticipant),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Age</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="age" value='<?php echo set_value('age',$before->age);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Phone</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="phone" value='<?php echo set_value('phone',$before->phone);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Emergency Contact</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="emergencycontact" value='<?php echo set_value('emergencycontact',$before->emergencycontact);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">dob</label>
<div class="col-sm-4">
<input type="date" id="normal-field" class="form-control" name="dob" value='<?php echo set_value('dob',$before->dob);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewstudent?id=").$this->input->get('schoolid'); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
