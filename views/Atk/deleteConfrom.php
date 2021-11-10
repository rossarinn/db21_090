<center><?php echo "<br> คุณแน่ใจแล้วใช่ไหม ว่าจะลบ? (>*<) <br>

<br> $AtkList->ATR_id  <br><br />"; ?><center>



<form method="get" action="">



    <input type="hidden" name="controller" value="Atk" />

    <input type="hidden" name="ATR_id" value="<?php echo $AtkList->ATR_id; ?><br />" />

    <center>  <button type="submit" name="action" value="index">back</button>

    <button type="submit" name="action" value="delete">delete</button><center>

    



</form>


