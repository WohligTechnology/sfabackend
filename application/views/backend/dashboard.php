<?php
echo getconfig("projectname");
?>

    <div class="row state-overview">
        <div class="col-lg-3 col-sm-3">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-building"></i>
                </div>
                <div class="value">
                    <p>Total Schools </p>
                    <h1><?php  echo $schoolcount; ?></h1>

                </div>

            </section>
        </div>

        <div class="col-lg-3 col-sm-3">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-book"></i>
                </div>
                <div class="value">
                    <p>Total Students </p>
                    <h1><?php  echo $studentcount; ?></h1>

                </div>

            </section>
        </div>
        <div class="col-lg-3 col-sm-3">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-book"></i>
                </div>
                <div class="value">
                    <p>Total Filter Students </p>
                    <h1 class="totalstudentsfilter"><?php  echo $studentcount; ?></h1>

                </div>

            </section>
        </div>
    </div>

    <!--<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/getStudentCount");?>'>-->
       <div class="row">
            <div class="col-md-12">
                 <div class=" form-group">
                    <label class="col-sm-1 control-label" for="normal-field">School</label>
                    <div class="col-sm-4">
                        <?php echo form_dropdown("school",$school,set_value('school'),"class='chzn-select form-control'");?>
                    </div>
                </div>
            </div>
        </div>
    <div class="mg20">
        <div class="row">
            <div class="col-md-3">
                <div class=" form-group">
                    <label class="col-sm-3 control-label" for="normal-field">Gender</label>
                    <div class="col-sm-9">
                        <?php echo form_dropdown("gender",$gender,set_value('gender'),"class='chzn-select form-control'");?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" form-group">
                    <label class="col-sm-3 control-label" for="normal-field">Sport</label>
                    <div class="col-sm-9">
                        <?php echo form_dropdown("sport",$sport,set_value('sport'),'id="sportid" class="test chzn-select form-control"');?>
        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" form-group">
                    <label class="col-sm-3 control-label" for="normal-field">Sports Category</label>
                    <div class="col-sm-9">
                        <select class="sportscategory form-control" name="sportscategory">
        
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" form-group">
                    <label class="col-sm-3 control-label" for="normal-field">Age group</label>
                    <div class="col-sm-9">
                        <?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup'),"class='chzn-select form-control'");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class=" form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-9">
            
        </div>
    </div>
-->
<div class="mg20">
    <button type="submit" class="btn btn-primary getfilter pull-left">Save</button>
</div>
    </div>
    <div class="row state-overview">



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

            $(".getfilter").click(function () {
                $.getJSON("<?php echo site_url("site/getStudentCount");?>", {
                        school: $("select[name=school]").val(),
                        gender: $("select[name=gender]").val(),
                        sport: $("select[name=sport]").val(),
                        sportscategory: $("select[name=sportscategory]").val(),
                        agegroup: $("select[name=agegroup]").val()
                    },
                    function (data) {
                        console.log(data);
                        $(".totalstudentsfilter").text(data);
                    });
            });


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