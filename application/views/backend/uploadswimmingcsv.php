<div class=" row" style="padding:1% 0;">

    <div class="col-md-3">
        <a class="btn btn-default" href="<?php echo site_url('site/exportswimmingcsv'); ?>" target="_blank"><i class="icon-download"></i>&nbsp;Download CSV Format</a> &nbsp;
    </div>

    <div class="col-md-9">
        <div class=" pull-right col-md-1 createbtn"><a onclick="myFunction()" class="btn btn-primary pull-right"><i class="icon-trash"></i>&nbsp;Delete Swimming Data</a> </div>

    </div>

    <script>
function myFunction() {
    var x;
    if (confirm("Are you sure you want to delete?") == true) {
        location.href="<?php echo site_url('site/deleteswimmingdata'); ?>";
    }
}
</script>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Upload Swimming CSV
            </header>
            <div class="panel-body">
                <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/uploadswimmingcsvsubmit');?>" enctype="multipart/form-data">


                    <div class=" form-group">
                        <label class="col-sm-2 control-label" for="normal-field">Swimming Match CSV File</label>
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
