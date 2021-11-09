<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    border : none;
    width: 70%;
}

th, td {
    text-align: center;
    padding: 8px;

}

tr:nth-child(even){background-color: #D3D3D3}
tr:hover {background-color: #cdcdcd}
th {
    background-color: #808080;
    color: white;
}
</style>

<style>
.button {
    background-color: #808080;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body bgcolor = "#f0fff0"><center>

<h2><center>PERSON</center></h2>


<table border=1 >


<form method="get" action="">
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="Person"  />
        <button type="submit" name="action" value="search"> Search </button>
    </form>
    

    <br><tr>
        <th>ID </th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>UPDATE</th>
        <th>DELETE</th>
        
<?php foreach($Person_List as $Person)
{
        echo "<tr><td>$Person->PS_id</td>
        <td>$Person->PS_name</td>
        <td>$Person->PS_add</td>
        
       
        <td><a href=?controller=Person&action=updatefrom&id_Person=$Person->PS_id>Update</a></td>
        <td><a href=?controller=Person&action=deleteConfrom&id_Person=$Person->PS_id>Delete</a></td>
        
        </tr>";

}

echo "</table>";
?>
<br>
</center>

<center><a class="button" href="?controller=Person&action=newPerson">Addnew</a></center>



</body>
<br>
<br>
<center><font size = "4" color = "black">BY น.ส.รสริน เณรแตง 6220504763 </font></center>
</html>

