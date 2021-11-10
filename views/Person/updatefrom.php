<ceter><form method="get" action="">
    <label>ID   <input type="number" name="PS_id"
        value="<?php echo $PersonList->PS_id;?>"/></label><br>

    <label>Name   <input type="text" name="PS_name"
    value="<?php echo $PersonList->PS_name;?>"/></label><br>

    <label>Address  <input type="text" name="PS_add"
    value="<?php echo $PersonList->PS_add;?>"/></label><br>


<input type="hidden"name="controller"value="Person"/>
<input type="hidden" name="oldid" value="<?php echo $Person->PS_id; ?>"/>
<button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button>


</form>
