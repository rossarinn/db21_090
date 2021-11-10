<form method = "GET" action = "">

<center><label>ผลตรวจ   <select name="ATR_id">
    <?php foreach($AtkList as $s)
    {
        echo "<option value=$s->ATR_id > $s->ATR_id</option>";
    }?>
    </select></label><br><center>

    <center><label>ID   <input type="text" name="PS_add"/></label><br><center>

    <center><label>เกณฑ์สี   <select name="ATR_color">
    <?php foreach($AtkList as $p)
    {
        echo "<option value=$p->ATR_color > $p->ATR_color</option>";
    }?>
    </select></label><br><center>

    <center><label>DATE  <input type="date" name="ATR_date" value="<?php echo date("Y-m-d");?>"/></label><br><center>

<center><label>TIME   <input type="number" name="ATR_time"/></label><br><center>

<center><label>SYMPTOM  <input type="text" name="ATR_symptom"/></label><br><center>
    
<center><label>Q_ID   <input type="text" name="Q_id"/></label><br><center>

    <input type="hidden" name="controller" value="Atk"/><br>
    <center><button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addPerson">Save</button><center>
</form>



