<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Upload Draw CSV
            </header>
            <div class="panel-body">
                <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/uploaddrawcsvsubmit');?>" enctype="multipart/form-data">


                    <div class=" form-group">
                        <label class="col-sm-2 control-label" for="normal-field">Draw CSV File</label>
                        <div class="col-sm-4">
                            <input type="file" id="normal-field" class="form-control" name="file">
                        </div>
                    </div>

                    <div class=" form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="<?php echo site_url('site/viewmatch'); ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
