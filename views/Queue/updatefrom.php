<ceter><form method="get" action="">
<center><label>ID   <input type="text" name="Q_id"
        value="<?php echo $QueueList->Q_id;?>"/></label><br><center>

        <center><label>TIME   <input type="number" name="Q_time"
        value="<?php echo $QueueList->Q_time;?>"/></label><br><center>

        <center><label>PERSON ID   <input type="text" name="PS_id"
        value="<?php echo $QueueList->PS_id;?>"/></label><br><center>

        <center><label>SDP ID   <input type="text" name="SDP_ID"
        value="<?php echo $QueueList->SDP_ID;?>"/></label><br><center>

        
<input type="hidden"name="controller"value="Queue"/>
<input type="hidden" name="oldid" value="<?php echo $Queue->Q_id; ?>"/>
<center><button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button><center>


</form>
