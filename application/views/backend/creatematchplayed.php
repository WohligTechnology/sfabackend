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
Match Played Details
</header>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/creatematchplayedsubmit");?>' enctype= 'multipart/form-data'>
<div class="panel-body">
<div class=" form-group" style="display:none">
<label class="col-sm-2 control-label" for="normal-field">Match</label>
<div class="col-sm-4">
<?php echo form_dropdown("match",$match,set_value('match',$this->input->get('id')), "class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Type</label>
<div class="col-sm-4">
<?php echo form_dropdown("type",$type,set_value('type')," id='typeid' class='chzn-select form-control'");?>
</div>
</div>

<div class=" form-group team box">
<label class="col-sm-2 control-label" for="normal-field">Team</label>
<div class="col-sm-4">
<?php echo form_dropdown("team",$team,set_value('team'),"class='chzn-select form-control'");?>
</div>
</div>
<div class=" form-group student box">
<label class="col-sm-2 control-label" for="normal-field">Student</label>
<div class="col-sm-4">
<!--<?php echo form_dropdown("student",$student,set_value('student'),"class='chzn-select form-control'");?>-->
        <select class="student form-control" name="student">

                                </select>
</div>
</div>
    <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Order</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
     <?php if($checkifswim==1){ ?>

    <?php } else {?>
    <div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Result</label>
<div class="col-sm-4">
<?php echo form_dropdown("result",$result,set_value('result'),"class='chzn-select form-control'");?>
</div>
</div>

<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Medal</label>
<div class="col-sm-4">
<?php echo form_dropdown("medal",$medal,set_value('medal'),"class='chzn-select form-control'");?>
</div>
</div>

<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Round</label>
<div class="col-sm-4">
<?php echo form_dropdown("round",$round,set_value('round'),"class='chzn-select form-control'");?>
</div>
</div>
    <?php } ?>
  <div class="form-group">
     <?php if($checkifswim==1){ ?>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="normal-field">Score</label>
                    <div class="col-sm-1">
                        <span class="combodate"><select class="minutes" name="min" style="width: 55px;"><option value=" <?php echo $timearray[0]; ?>" selected="selected"><?php echo $timearray[0];?><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select></span>
                    </div>
                    <div class="col-sm-1">
                        <span class="combodate"><select class="seconds" name="second" style="width: 55px;"><option value=" <?php echo $timearray[1]; ?>" selected="selected"><?php echo $timearray[1];?><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select></span>
                    </div>
                    <div class="col-sm-1">
                        <span class="combodate"><select class="milliseconds" name=millisecond style="width: 55px;"><option value=" <?php echo $timearray[2]; ?>" selected="selected"><?php echo $timearray[2];?><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select></span>
                    </div>
                </div>
            <div class="form-group" style="display:none">
                        <label class="col-sm-2 control-label" for="normal-field">Score</label>
                        <div class="col-sm-4">
                            <input type="text" id="normal-field" id="score" class="form-control" name="reason" value='<?php echo set_value(' reason ',$before->reason);?>'>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="normal-field">Score</label>
                        <div class="col-sm-4">
                            <input type="text" id="normal-field" class="form-control" name="reason" value='<?php echo set_value(' reason ',$before->reason);?>'>
                        </div>
                    </div>
                    <?php } ?>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href="<?php echo site_url("site/viewmatchplayed?id=").$this->input->get('id'); ?>" class="btn btn-secondary">Cancel</a>
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
     function populate1(data, $select) {
            $select.html("");
            $select.append("<option value=''>Choose Student</option>");
            for (var i = 0; i < data.length; i++) {
                $select.append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
            }
        }
        $(document).ready(function () {
              var new_base_url = "<?php echo site_url(); ?>";


            // FOR SHOW HIDE

    $("#typeid").change(function(){

        console.log("ABC");

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
        console.log("BCD");
         // STUDENT BY SPORTS
             $.getJSON(new_base_url + '/site/getStudentByMatch', {
                    match: $('select[name=match]').val()
                }, function (data) {
                    console.log("abc");
                    populate1(data, $student);
                });
    }).change();

            var $sportscategory = $("select.sportscategory");
            var $student = $("select.student");
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
