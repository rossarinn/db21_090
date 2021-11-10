<?php echo "<br> คุณแน่ใจนะคะว่าคุณจะลบ? (>*<) <br>

<br> $PersonList->PS_id $PersonList->PS_name <br>"; ?>



<form method="get" action="">



    <input type="hidden" name="controller" value="Person" />

    <input type="hidden" name="PS_id" value="<?php echo $PersonList->PS_id; ?>" />

    <button type="submit" name="action" value="index">back</button>

    <button type="submit" name="action" value="delete">delete</button>

    



</form>


