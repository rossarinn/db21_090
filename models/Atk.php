<?php

class Atk

{

    public $ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id;
    public function __construct($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id)
    {
        $this->ATR_TestResult = $ATR_TestResult;
        $this->ATR_id = $ATR_id;
        $this->ATR_color = $ATR_color;
        $this->ATR_date = $ATR_date;
        $this->ATR_time = $ATR_time;
        $this->ATR_symptom = $ATR_symptom;
        $this->Q_id = $Q_id;

    }

    public static function getAll()

    {
        $AtkList = [];
        require("connect_database.php");
        $sql = "SELECT * FROM AtkTestResult";
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $ATR_TestResult = $my_row[ATR_TestResult];
            $ATR_id = $my_row[ATR_id];
            $ATR_color = $my_row[ATR_color];
            $ATR_date = $my_row[ATR_date];
            $ATR_time = $my_row[ATR_time];
            $ATR_symptom = $my_row[ATR_symptom];
            $Q_id = $my_row[Q_id];

            $AtkList[] = new Atk($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id);

        }

        require("connection_close.php");

        return $AtkList;

    }
    public static function Add($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id)

    { 

       require("connect_database.php");

      

       $sql = "INSERT INTO `AtkTestResult` (`ATR_TestResult`, `ATR_id`, `ATR_color`, `ATR_date`, `ATR_time`, `ATR_symptom`, `Q_id`) 
       VALUES ('$ATR_TestResult','$ATR_id','$ATR_color','$ATR_date','$ATR_time','$ATR_symptom','$Q_id')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }

    public static function search($key)
    {
        $AtkList=[];
        require("connect_database.php");
        $sql="SELECT * FROM AtkTestResult  WHERE ( ATR_TestResult like '%$key%' or ATR_id like '%$key%' or ATR_color like '%$key%'
        or ATR_date like '%$key%' or ATR_time like '%$key%' or ATR_symptom like '%$key%' or Q_id like '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $ATR_TestResult = $my_row[ATR_TestResult];
            $ATR_id = $my_row[ATR_id];
            $ATR_color = $my_row[ATR_color];
            $ATR_date = $my_row[ATR_date];
            $ATR_time = $my_row[ATR_time];
            $ATR_symptom = $my_row[ATR_symptom];
            $Q_id = $my_row[Q_id];

            $AtkList[] = new Atk($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id);
        }
        require("connection_close.php");
        return $AtkList;
    }


    public static function get($id)
    {
        
        require("connect_database.php");
        $sql="SELECT * FROM AtkTestResult WHERE ATR_id='$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        
            $ATR_TestResult = $my_row[ATR_TestResult];
            $ATR_id = $my_row[ATR_id];
            $ATR_color = $my_row[ATR_color];
            $ATR_date = $my_row[ATR_date];
            $ATR_time = $my_row[ATR_time];
            $ATR_symptom = $my_row[ATR_symptom];
            $Q_id = $my_row[Q_id];
           
        
        require("connection_close.php");
        return new Atk($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id);

    }


    public static function update($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id)
     {
        require("connect_database.php");
        $sql="UPDATE `AtkTestResult` SET `ATR_TestResult`='$ATR_TestResult',`ATR_id`='$ATR_id',`ATR_color`='$ATR_color' 
        ,`ATR_date`='$ATR_date',`ATR_time`='$ATR_time' ,`ATR_symptom`='$ATR_symptom',`Q_id`='$Q_id' WHERE ATR_id = '$oldid'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

    public static function delete($id)
    {
        
        require("connect_database.php");

        $sql = "DELETE FROM AtkTestResult WHERE ATR_id = '$id'";

        $result = $conn->query($sql);
        require("connection_close.php");

        return ;

    }
}

