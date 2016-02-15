<section class="panel">
    <header class="panel-heading">
        Edit Schedule
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editmatchsubmit");?>' enctype='multipart/form-data'>
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Court</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ',$before->name);?>'>
                </div>
            </div>
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
                <label class="col-sm-2 control-label" for="normal-field">Age group</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup',$before->agegroup),"class='chzn-select form-control'");?>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Status</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown("status",$status,set_value('status',$before->status),"class='chzn-select form-control'");?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Time stamp</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="timestamp" value='<?php echo set_value(' timestamp ',$before->timestamp);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Result timestamp</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="resulttimestamp" value='<?php echo set_value(' resulttimestamp ',$before->resulttimestamp);?>'>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Match Result</label>
                <div class="col-sm-8">
                    <textarea name="matchresult" id="" cols="20" rows="10" class="form-control tinymce">
                        <?php echo set_value( 'matchresult',$before->matchresult);?>
                    </textarea>
                </div>
            </div>
                <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Start Time</label>
                            <div class="col-sm-4">
                                <input type="time" id="normal-field" class="form-control" name="starttime" value='<?php echo set_value(' starttime ',$before->starttime);?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">End Time</label>
                            <div class="col-sm-4">
                                <input type="time" id="normal-field" class="form-control" name="endtime" value='<?php echo set_value(' endtime ',$before->endtime);?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Gender</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("gender",$gender,set_value('gender',$before->gender),"class='chzn-select form-control'");?>
                            </div>
                        </div>
           <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Match Date</label>
                            <div class="col-sm-4">
                                <input type="date" id="normal-field" class="form-control" name="matchdate" value='<?php echo set_value(' matchdate ',$before->matchdate);?>'>
                            </div>
                        </div>
            <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">round</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("round",$round,set_value('round',$before->round),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Url</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="url" value='<?php echo set_value(' url ',$before->url);?>'>
                            </div>
                        </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href='<?php echo site_url("site/viewmatch"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>