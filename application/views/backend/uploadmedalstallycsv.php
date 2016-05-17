<div class=" row" style="padding:1% 0;">

    <div class="col-md-3">
        <a class="btn btn-default" href="<?php echo site_url('site/exportmedalstallycsv'); ?>" target="_blank"><i class="icon-download"></i>&nbsp;Download CSV Format</a> &nbsp;
    </div>

    <div class="col-md-9">

                  <!-- <div class="col-sm-4 col-md-offset-4">
              <select class="form-control" name="sports">
<option>Select Sport to delete</option>
<option>Badminton</option>
<option>Basketball</option>
<option>Table Tennis</option>
<option>Swimming</option>
              </select>
          </div> -->

        <div class=" pull-right col-md-1 createbtn"><a onclick="myFunction()" class="btn btn-primary pull-right"><i class="icon-trash"></i>&nbsp;Delete Medals Tally Data</a> </div>

    </div>

    <script>
function myFunction() {
    var x;
    if (confirm("Are you sure you want to delete?") == true) {
        location.href="<?php echo site_url('site/deletemedalstallydata'); ?>";
    }
}
</script>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Upload Medals Tally CSV
            </header>
            <div class="panel-body">
                <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/uploadmedalstallycsvsubmit');?>" enctype="multipart/form-data">


                    <div class=" form-group">
                        <label class="col-sm-2 control-label" for="normal-field">Medals Tally CSV File</label>
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
