<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];

}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
<style>
.button {
    background-color: #000000;
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
    <head color = "#000000">
    <br>
    <br>
    <br>
    <h2><center><font size = "10" >Premiumshop</font></center></h2>
    </head> 
      <body>
        <p align = "center">

     <a class="button" href="http://158.108.207.4/db21/">ปล่อยมันไป อย่างที่เป็น~~~</a>
     <a class="button" href="?controller=pages&action=home">HOME</a>
     <a class="button" href="?controller=order&action=index">ORDER</a>
     <a class="button" href="?controller=detailOrder&action=index">DETAIL ORDER</a>
     
        </p> 
       
        <?php require_once("./routes.php");?>
        </body>  
</html>

