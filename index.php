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
    background-color: #808080;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
    <head color = "#FFFFF0">
    <br>
    <br>
    <br>
    <h2><center><font size = "10" >ATK project</font></center></h2>
    <h2><center><font size = "2" > ส่วนที่ 3 </font></center></h2>
    </head> 
      <body>
        <p align = "center">

     <a class="button" href="http://158.108.207.4/db21/">กลับๆๆ</a>
     <a class="button" href="?controller=pages&action=home">HOME</a>
     <a class="button" href="?controller=Person&action=index">Person</a>
     <a class="button" href="?controller=Queue&action=index">Queue</a>
     <a class="button" href="?controller=ATK&action=index">ผลตรวตATK</a>
        </p> 
       
        <?php require_once("./routes.php");?>
        </body>  
</html>

