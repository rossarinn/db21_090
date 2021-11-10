<center><?php echo "<br> คุณแน่ใจแล้วใช่ไหม ว่าจะลบ? (>*<) <br>

<br> $PersonList->PS_id $PersonList->PS_name <br>"; ?><center>



<form method="get" action="">



    <input type="hidden" name="controller" value="Person" />

    <input type="hidden" name="PS_id" value="<?php echo $PersonList->PS_id; ?>" />

    <center>  <button type="submit" name="action" value="index">back</button>

    <button type="submit" name="action" value="delete">delete</button><center>

    



</form>


