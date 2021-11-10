<ceter><form method="get" action="">
<center><label>ผลตรวจ <select name="ATR_TestResult">
    <?php foreach($AtkList as $s) {
        echo "<option value = $s->ATR_TestResult";
        if($s->ATR_TestResult==$Atk->ATR_TestResult){echo " selected='selected'";}
         echo ">$s->ATR_TestResult</option>";}?>
    </select></label><br><center>

        <center> <label>ID   <input type="text" name="ATR_id"
    value="<?php echo $AtkList->ATR_id;?>"/></label><br><center>

<center><label>เกณฑ์สี <select name="ATR_color">
    <?php foreach($AtkList as $p) {
        echo "<option value = $p->ATR_color";
        if($p->ATR_color==$Atk->ATR_color){echo " selected='selected'";}
         echo ">$p->ATR_color</option>";}?>
    </select></label><br><center>

    <center> <label>DATE  <input type="date" name="ATR_date" 
        value="<?php echo date("Y-m-d");?>"/></label><br><center>

        <center> <label>TIME   <input type="text" name="ATR_time"
    value="<?php echo $AtkList->ATR_time;?>"/></label><br><center>

    <center> <label>SYMPTOM   <input type="text" name="ATR_symptom"
    value="<?php echo $AtkList->ATR_symptom;?>"/></label><br><center>

    <center> <label>Q_ID   <input type="text" name="Q_id"
    value="<?php echo $AtkList->Q_id;?>"/></label><br><center>

<input type="hidden"name="controller"value="Atk"/>
<input type="hidden" name="oldid" value="<?php echo $Atk->ATR_id; ?>"/>
<center><button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button><center>


</form>
