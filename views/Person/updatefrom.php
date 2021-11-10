<ceter><form method="get" action="">
<center><label>ID   <input type="number" name="PS_id"
        value="<?php echo $PersonList->PS_id;?>"/></label><br><center>

        <center> <label>Name   <input type="text" name="PS_name"
    value="<?php echo $PersonList->PS_name;?>"/></label><br><center>

    <center> <label>Address  <input type="text" name="PS_add"
    value="<?php echo $PersonList->PS_add;?>"/></label><br><center>


<input type="hidden"name="controller"value="Person"/>
<input type="hidden" name="oldid" value="<?php echo $Person->PS_id; ?>"/>
<center><button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button><center>


</form>
