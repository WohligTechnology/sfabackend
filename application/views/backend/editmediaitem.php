<section class="panel">
	<header class="panel-heading">
		Media Item Details
	</header>
	<div class="panel-body">
		<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editmediaitemsubmit");?>' enctype='multipart/form-data'>
			<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Title</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ',$before->title);?>'>
				</div>
			</div>
				<div class=" form-group"> 
				<label class="col-sm-2 control-label" for="normal-field">Thumbnail</label>
				<div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="thumbnail" value='<?php echo set_value(' thumbnail ',$before->thumbnail);?>'>
						<?php if($before->thumbnail == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->thumbnail; ?>" width="140px" height="140px">
						<?php }
					?>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Type</label>
				<div class="col-sm-4">
					<?php echo form_dropdown("type",$type,set_value('type',$before->type),"class='chzn-select form-control'");?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Link</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="link" value='<?php echo set_value(' link ',$before->link);?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Order</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value(' order ',$before->order);?>'>
				</div>
			</div>
			<div class=" form-group">
                      <label class="col-sm-2 control-label">Students</label>
                      <div class="col-sm-4">
                        <?php

                            echo form_dropdown('student[]',$student,$selectedstudent,'id="select3" class="chzn-select form-control" 	data-placeholder="Choose an student..." multiple');
                        ?>
                      </div>
                    </div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Json</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="json" value='<?php echo set_value(' json ',$before->json);?>'>
				</div>
			</div>
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Media</label>
				<div class="col-sm-4">
					<?php echo form_dropdown("media",$media,set_value('media',$before->media),"class='chzn-select form-control'");?>
				</div>
			</div>
              <div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Sport</label>
							<div class="col-sm-4">
								<?php echo form_dropdown("sport",$sport,set_value('sport',$before->sport),"class='chzn-select form-control'");?>
							</div>
						</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href='<?php echo site_url("site/viewmediaitem?id=").$this->input->get(' mediaid '); ?>' class='btn btn-secondary'>Cancel</a>
				</div>
			</div>
		</form>
	</div>
</section>