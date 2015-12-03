<?php
echo getconfig("projectname");
?>
    <!--
<div><span style="font-size: x-large;">Total Number of Schools : <?php
echo $schoolcount;
?></span>
</div>
<div><span style="font-size: x-large;">Total Number of Students : <?php
echo $studentcount;
?></span>
</div>
-->

    <div class="row state-overview">
        <div class="col-lg-3 col-sm-3">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-building"></i>
                </div>
                    <div class="value">
                        <p>Total Number of Schools </p>
                        <h1><?php  echo $schoolcount; ?></h1>

                    </div>
              
            </section>
        </div>
   
        <div class="col-lg-3 col-sm-3">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-female"></i>
                </div>
                    <div class="value">
                        <p>Total Number of Students </p>
                        <h1><?php  echo $studentcount; ?></h1>

                    </div>
              
            </section>
        </div>
    </div>


    <div class="row">
        <div class=" form-group">
            <label class="col-sm-1 control-label" for="normal-field">School</label>
            <div class="col-sm-4">
                <?php echo form_dropdown("school",$school,set_value('school'),"class='chzn-select form-control'");?>
            </div>
        </div>
        <div class=" form-group">
            <label class="col-sm-1 control-label" for="normal-field">Gender</label>
            <div class="col-sm-2">
                <?php echo form_dropdown("gender",$gender,set_value('gender'),"class='chzn-select form-control'");?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" form-group">
            <label class="col-sm-1 control-label" for="normal-field">Sport</label>
            <div class="col-sm-2">
                <?php echo form_dropdown("sport",$sport,set_value('sport'),"class='chzn-select form-control'");?>
            </div>
        </div>



        <div class=" form-group">
            <label class="col-sm-1 control-label" for="normal-field">Sports Category</label>
            <div class="col-sm-2">
                <?php echo form_dropdown("sportscategory",$sportscategory,set_value('sportscategory'),"class='chzn-select form-control'");?>
            </div>
        </div>
        <div class=" form-group">
            <label class="col-sm-1 control-label" for="normal-field">Age group</label>
            <div class="col-sm-2">
                <?php echo form_dropdown("agegroup",$agegroup,set_value('agegroup'),"class='chzn-select form-control'");?>
            </div>
        </div>
    </div>