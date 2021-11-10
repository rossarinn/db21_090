<center><?php echo "<br> คุณแน่ใจแล้วใช่ไหม ว่าจะลบ? (>*<) <br>

<br> $QueueList->Q_id  <br>"; ?><center>



<form method="get" action="">



    <input type="hidden" name="controller" value="Queue" />

    <input type="hidden" name="Q_id" value="<?php echo $QueueList->Q_id; ?>" />

    <center>  <button type="submit" name="action" value="index">back</button>

    <button type="submit" name="action" value="delete">delete</button><center>

    



</form>


