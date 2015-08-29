<section class="panel">
<header class="panel-heading">
Round Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editroundsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Sports</label>
<div class="col-sm-4">
<?php echo form_dropdown("sports",$sports,set_value('sports',$before->sports),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Sports Category</label>
<div class="col-sm-4">
<?php echo form_dropdown("sportscategory",$sportscategory,set_value('sportscategory',$before->sportscategory),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Year</label>
<div class="col-sm-4">
<?php echo form_dropdown("year",$year,set_value('year',$before->year),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Age group</label>
<div class="col-sm-4">
<?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup',$before->agegroup),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Name</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="level" value='<?php echo set_value('level',$before->level);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Parent</label>
<div class="col-sm-4">
<?php echo form_dropdown("root",$root,set_value('root',$before->root),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewround"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
