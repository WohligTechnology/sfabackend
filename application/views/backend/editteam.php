<section class="panel">
<header class="panel-heading">
Team Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editteamsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<input type="text" id="normal-field" class="form-control" name="studentid" value="<?php echo set_value('studentid',$this->input->get('studentid'));?>" style="display:none">
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Title</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value('title',$before->title);?>'>
</div>
</div>
      <div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">School</label>
<div class="col-sm-4">
<?php echo form_dropdown("school",$school,set_value('school',$before->school),"class='chzn-select form-control'");?>
</div>
</div>
    <div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Sport</label>
<div class="col-sm-4">
<?php echo form_dropdown("sport",$sport,set_value('sport',$before->sport),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group" style="display:none">
<label class="col-sm-2 control-label" for="normal-field">schoolid</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="schoolid" value='<?php echo set_value('schoolid',$this->input->get('schoolid'));?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Sports Category</label>
<div class="col-sm-4">
<?php echo form_dropdown("sportscategory",$sportscategory,set_value('sportscategory',$before->sportscategory),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Age group</label>
<div class="col-sm-4">
<?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup',$before->agegroup),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Year</label>
<div class="col-sm-4">
<?php echo form_dropdown("year",$year,set_value('year',$before->year),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewteam1"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
