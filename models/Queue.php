<?php

class Queue

{

    public $Q_id,$Q_time,$PS_id,$SDP_ID;
    public function __construct($Q_id,$Q_time,$PS_id,$SDP_ID)
    {
        $this->Q_id = $Q_id;
        $this->Q_time = $Q_time;
        $this->PS_id = $PS_id;
        $this->SDP_ID = $SDP_ID;

    }

    public static function getAll()

    {
        $QueueList = [];
        require("connect_database.php");
        $sql = "SELECT * FROM `Queue`";
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $Q_id = $my_row[Q_id];
            $Q_time = $my_row[Q_time];
            $PS_id = $my_row[PS_id];
            $SDP_ID = $my_row[SDP_ID];

            $QueueList[] = new Queue($Q_id,$Q_time,$PS_id,$SDP_ID);

        }

        require("connection_close.php");

        return $QueueList;

    }
    public static function Add($Q_id,$Q_time,$PS_id,$SDP_ID)

    { 

       require("connect_database.php");

      

       $sql = "INSERT INTO `Queue` (`Q_id`, `Q_time`, `PS_id`, `SDP_ID`) VALUES ('$Q_id','$Q_time','$PS_id','$SDP_ID')";

       $result = $conn->query($sql);

       require("connection_close.php");
       
       return  ;

    }

    public static function search($key)
    {
        $QueueList=[];
        require("connect_database.php");
        $sql="SELECT * FROM `Queue`  WHERE ( Q_id like '%$key%' or Q_time like '%$key%' or PS_id like '%$key%'or SDP_ID like '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Q_id = $my_row[Q_id];
            $Q_time = $my_row[Q_time];
            $PS_id = $my_row[PS_id];
            $SDP_ID = $my_row[SDP_ID];

            $QueueList[] = new Queue($Q_id,$Q_time,$PS_id,$SDP_ID);
        }
        require("connection_close.php");
        return $QueueList;
    }


    public static function get($id)
    {
        
        require("connect_database.php");
        $sql="SELECT * FROM `Queue` WHERE Q_id='$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
        $Q_id = $my_row[Q_id];
        $Q_time = $my_row[Q_time];
        $PS_id = $my_row[PS_id];
        $SDP_ID = $my_row[SDP_ID];
           
        
        require("connection_close.php");
        return new Queue($Q_id,$Q_time,$PS_id,$SDP_ID);

    }


    public static function update($Q_id,$Q_time,$PS_id,$SDP_ID,$oldid)
     {
        require("connect_database.php");
        $sql="UPDATE `Queue` SET `Q_id`='$Q_id',`Q_time`='$Q_time',
        `PS_id`='$PS_id',`SDP_ID`='$SDP_ID' WHERE Q_id = '$oldid'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

    public static function delete($id)
    {
        
        require("connect_database.php");

        $sql = "DELETE FROM `Queue` WHERE Q_id = '$id'";

        $result = $conn->query($sql);
        require("connection_close.php");

        return ;

    }
}
