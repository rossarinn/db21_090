<?php

class Person

{

    public $PS_id,$PS_name,$PS_add;
    public function __construct($PS_id,$PS_name,$PS_add)
    {
        $this->PS_id = $PS_id;
        $this->PS_name = $PS_name;
        $this->PS_add = $PS_add;

    }

    public static function getAll()

    {
        $PersonList = [];
        require("connect_database.php");
        $sql = "SELECT * FROM Person";
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $PS_id = $my_row[PS_id];
            $PS_name = $my_row[PS_name];
            $PS_add = $my_row[PS_add];

            $PersonList[] = new Person($PS_id,$PS_name,$PS_add);

        }

        require("connection_close.php");

        return $PersonList;

    }
    public static function Add($PS_id,$PS_name,$PS_add)

    { 

       require("connect_database.php");

      

       $sql = "INSERT INTO `Person` (`PS_id`, `PS_name`, `PS_add`) VALUES ('$PS_id','$PS_name','$PS_add')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }

    public static function search($key)
    {
        $PersonList=[];
        require("connect_database.php");
        $sql="SELECT * FROM Person  WHERE ( PS_id like '%$key%' or PS_name like '%$key%' or PS_add like '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $PS_id = $my_row[PS_id];
            $PS_name = $my_row[PS_name];
            $PS_add = $my_row[PS_add];
            
            $PersonList[] = new Person($PS_id,$PS_name,$PS_add);
        }
        require("connection_close.php");
        return $PersonList;
    }


    public static function get($id)
    {
        
        require("connect_database.php");
        $sql="SELECT * FROM Person WHERE PS_id='$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
        $PS_id = $my_row[PS_id];
        $PS_name = $my_row[PS_name];
        $PS_add = $my_row[PS_add];
           
        
        require("connection_close.php");
        return new Person($PS_id,$PS_name,$PS_add);

    }


    public static function update($PS_id,$PS_name,$PS_add,$oldid)
     {
        require("connect_database.php");
        $sql="UPDATE `Person` SET `PS_id`='$PS_id',`PS_name`='$PS_name',
        `PS_add`='$PS_add' WHERE PS_id = '$oldid'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

    public static function delete($id)
    {
        
        require("connect_database.php");

        $sql = "DELETE FROM Person WHERE PS_id = '$id'";

        $result = $conn->query($sql);
        require("connection_close.php");

        return ;

    }
}
