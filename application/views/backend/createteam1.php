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
                Team Details
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createteam1submit");?>' enctype='multipart/form-data'>

                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Title</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ');?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">School</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("school",$school,set_value('school'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Sport</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("sport",$sport,set_value('sport'),'id="sportid" class="test chzn-select form-control"');?>
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
                            <label class="col-sm-2 control-label" for="normal-field">Year</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown("year",$year,set_value('year'),"class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?php echo site_url(" site/viewteam1 "); ?>" class="btn btn-secondary">Cancel</a>
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
                    sport: $('select[name=sport]').val()
                }, function (data) {
                    console.log("abc");
                    populate(data, $sportscategory);
                });
            });
        });
    </script>