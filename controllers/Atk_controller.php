<?php 
class AtkController{
    public function index()
    {
       $AtkList = Atk::getAll();
       echo "66666";
        require_once("./views/Atk/index_Atk.php");
    }
    public function newAtk(){
        
      $AtkList = Atk::getAll();
      require_once('./views/Atk/newAtk.php');
  }
  public function addAtk()
  {
      
      $ATR_TestResult = $_GET['ATR_TestResult'];
      $ATR_id = $_GET['ATR_id'];
      $ATR_color = $_GET['ATR_color']; 
      $ATR_date = $_GET['ATR_date'];
      $ATR_time = $_GET['ATR_time'];
      $ATR_symptom = $_GET['ATR_symptom'];
      $Q_id = $_GET['Q_id'];

      Atk::Add($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id);
      AtkController::index();
  }
  public function search()
  {
      $key = $_GET['key'];
      $AtkList = Atk::search($key);
      require_once("./views/Atk/index_Atk.php");
  }
  public function updateFrom()
  {
      $id = $_GET['ATR_id'];
      $AtkList = Atk::get($id);
      
      require_once("./views/Atk/updatefrom.php");
  }
  public function update()
  {
    $ATR_TestResult = $_GET['ATR_TestResult'];
    $ATR_id = $_GET['ATR_id'];
    $ATR_color = $_GET['ATR_color']; 
    $ATR_date = $_GET['ATR_date'];
    $ATR_time = $_GET['ATR_time'];
    $ATR_symptom = $_GET['ATR_symptom'];
    $Q_id = $_GET['Q_id'];

    Atk::Add($ATR_TestResult,$ATR_id,$ATR_color,$ATR_date,$ATR_time,$ATR_symptom,$Q_id);
    AtkController::index();
      
  }
  public function deleteConfrom()
  {
      $id = $_GET['ATR_id'];
      $AtkList = Atk::get($id);
      require_once("./views/Atk/deleteConfrom.php");
  }
  public function delete()
  {
      $id = $_GET['Atk'];
      echo $id;
      Atk::delete($id);

      AtkController::index();

  }

}
?>

