<section class="panel">
<header class="panel-heading">
Match Played Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editmatchplayedsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" form-group" style="display:none">
<label class="col-sm-2 control-label" for="normal-field">Match</label>
<div class="col-sm-4">
<?php echo form_dropdown("match",$match,set_value('match',$before->match),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Type</label>
<div class="col-sm-4">
<?php echo form_dropdown("type",$type,set_value('type',$before->type)," id='typeid' class='chzn-select form-control'");?>
</div>
</div>

<div class=" form-group team box">
<label class="col-sm-2 control-label" for="normal-field">team</label>
<div class="col-sm-4">
<?php echo form_dropdown("team",$team,set_value('team',$before->team),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group student box">
<label class="col-sm-2 control-label" for="normal-field">Student</label>
<div class="col-sm-4">
<?php echo form_dropdown("student",$student,set_value('student',$before->student),"class='chzn-select form-control'");?>
</div>
</div>
    <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Result</label>
<div class="col-sm-4">
<?php echo form_dropdown("result",$result,set_value('result',$before->result),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Round</label>
<div class="col-sm-4">
<?php echo form_dropdown("round",$round,set_value('round',$before->round),"class='chzn-select form-control'");?>
</div>
</div>
   <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Result</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="reason" value='<?php echo set_value('reason',$before->reason);?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href='<?php echo site_url("site/viewmatchplayed?id=").$this->input->get('matchid'); ?>' class='btn btn-secondary'>Cancel</a>
</div>
</div>
</form>
</div>
</section>
 <script>
        function populate(data, $select) {
            $select.html("");
            $select.append("<option value=''>Choose Sport Category</option>");
            for (var i = 0; i < data.length; i++) {
                $select.append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
            }
        }
        $(document).ready(function () {

            // FOR SHOW HIDE
            
    $("#typeid").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="0"){
                $(".box").not(".student").hide();
                $(".student").show();
            }
            else if($(this).attr("value")=="1"){
                $(".box").not(".team").hide();
                $(".team").show();
            }
           
            else{
                $(".box").hide();
            }
        });
    }).change();
            
            var $sportscategory = $("select.sportscategory");
            var new_base_url = "<?php echo site_url(); ?>";
            $("#hj").change(function () {
                $.getJSON(new_base_url + '/site/getType', {
                    type: $('select[name=type]').val()
                }, function (data) {
                    console.log("abc");
                    populate(data, $sportscategory);
                });
            });
        });
    </script>
