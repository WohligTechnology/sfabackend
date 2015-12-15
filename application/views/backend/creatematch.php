<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <div class="pull-right">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Create Schedule
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/creatematchsubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Court</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ');?>'>
                            </div>
                        </div>
<!--
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Sports</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("sports",$sports,set_value('sports'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Sports Category</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("sportscategory",$sportscategory,set_value('sportscategory'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
-->
                         <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Sport</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("sports",$sports,set_value('sports'),'id="sportid" class="test chzn-select form-control"');?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Sport</label>
                            <div class="col-sm-4">
                                <select class="sportscategory form-control" name="sportscategory">

                                </select>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Age group</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Status</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("status",$status,set_value('status'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Match Result</label>
                            <div class="col-sm-8">
                                <textarea name="matchresult" id="" cols="20" rows="10" class="form-control tinymce">
                                    <?php echo set_value( 'matchresult');?>
                                </textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Start Time</label>
                            <div class="col-sm-4">
                                <input type="time" id="normal-field" class="form-control" name="starttime" value='<?php echo set_value(' starttime ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">End Time</label>
                            <div class="col-sm-4">
                                <input type="time" id="normal-field" class="form-control" name="endtime" value='<?php echo set_value(' endtime ');?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Gender</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("gender",$gender,set_value('gender'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                      <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Match Date</label>
                            <div class="col-sm-4">
                                <input type="date" id="normal-field" class="form-control" name="matchdate" value='<?php echo set_value(' matchdate ');?>'>
                            </div>
                        </div>
                          <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">round</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("round",$round,set_value('round'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?php echo site_url(" site/viewmatch "); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                </form>
                </div>
        </section>
        </div>
    </div>
     <script>
        function populate(data, $select) {
            $select.html("");
            $select.append("<option value=''>Choose Sport Category</option>");
            for (var i = 0; i < data.length; i++) {
                $select.append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
            }
        }
        $(document).ready(function () {

            var $sportscategory = $("select.sportscategory");
            var new_base_url = "<?php echo site_url(); ?>";
            $("#sportid").change(function () {
                $.getJSON(new_base_url + '/site/getSportCategoryBySport', {
                    sport: $('select[name=sports]').val()
                }, function (data) {
                    console.log("abc");
                    populate(data, $sportscategory);
                });
            });
        });
    </script>