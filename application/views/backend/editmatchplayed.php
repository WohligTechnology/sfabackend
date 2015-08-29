<section class="panel">
<header class="panel-heading">
Match Played Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editmatchplayedsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Match</label>
<div class="col-sm-4">
<?php echo form_dropdown("match",$match,set_value('match',$before->match),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Type</label>
<div class="col-sm-4">
<?php echo form_dropdown("type",$type,set_value('type',$before->type),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">team</label>
<div class="col-sm-4">
<?php echo form_dropdown("team",$team,set_value('team',$before->team),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Student</label>
<div class="col-sm-4">
<?php echo form_dropdown("student",$student,set_value('student',$before->student),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Result</label>
<div class="col-sm-4">
<?php echo form_dropdown("result",$result,set_value('result',$before->result),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Round</label>
<div class="col-sm-4">
<?php echo form_dropdown("round",$round,set_value('round',$before->round),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Reason</label>
<div class="col-sm-8">
<textarea name="reason" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'reason',$before->reason);?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewmatchplayed"); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
