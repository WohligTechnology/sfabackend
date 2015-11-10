<section class="panel">
	<header class="panel-heading">
		Banner Slides Details
	</header>
	<div class="panel-body">
		<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editbannerslidessubmit?id=").$this->input->get('id');?>' enctype='multipart/form-data'>
			<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
			<div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">banner</label>
				<div class="col-sm-4">
					<?php echo form_dropdown( "banner",$banner,set_value( 'banner',$before->banner),"class='chzn-select form-control'");?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Order</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value(' order ',$before->order);?>'>
				</div>
			</div>
			<div class=" form-group"> Size 108 x 112 pixels (WxH)
				<label class="col-sm-2 control-label" for="normal-field">Icon</label>
				<div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="icon" value='<?php echo set_value(' icon ',$before->icon);?>'>
						<?php if($before->icon == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->icon; ?>" width="140px" height="140px">
						<?php }
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Title</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ',$before->title);?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">Link</label>
				<div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="link" value='<?php echo set_value(' link ',$before->link);?>'>
				</div>
			</div>
			<div class=" form-group"> Size 2000 x 868 pixels (WxH)
				<label class="col-sm-2 control-label" for="normal-field">Image</label>
				<div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value(' image ',$before->image);?>'>
						<?php if($before->image == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->image; ?>" width="140px" height="140px">
						<?php }
					?>
				</div>
			</div>
           <div class=" form-group">
				<label class="col-sm-2 control-label" for="normal-field">Description</label>
				<div class="col-sm-8">
					<textarea name="description" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'description',$before->description);?></textarea></div>
			</div>
			   <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Startdate</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="startdate" value='<?php echo set_value(' startdate',$before->startdate);?>'>
                            </div>
                        </div>
                         <div class="form-group" style="display:none">
                            <label class="col-sm-2 control-label" for="normal-field">Enddate</label>
                            <div class="col-sm-4">
                                <input type="date" id="normal-field" class="form-control" name="enddate" value='<?php echo set_value(' enddate',$before->enddate);?>'>
                            </div>
                        </div>
                     
			<div class="form-group">
				<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href='<?php echo site_url("site/viewbannerslides?id=".$before->banner); ?>' class='btn btn-secondary'>Cancel</a>
				</div>
			</div>
		</form>
	</div>
</section>