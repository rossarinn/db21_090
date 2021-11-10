<?php
 class QueueController{
    public function index()
    {
      
       $QueueList = Queue::getAll();
        require_once("./views/Queue/index_Queue.php");
    }
    public function newQueue(){
        
      $QueueList = Queue::getAll();
      $PersonList = Person::getAll();
      require_once('./views/Queue/newQueue.php');
  }
  public function addQueue()
  {
      
      $Q_id = $_GET['Q_id'];
      $Q_time = $_GET['Q_time'];
      $PS_id = $_GET['PS_id']; 
      $SDP_ID = $_GET['SDP_ID'];

      Queue::Add($Q_id,$Q_time,$PS_id,$SDP_ID);
      QueueController::index();
  }
  public function search()
  {
      $key = $_GET['key'];
      $QueueList = Queue::search($key);
      require_once("./views/Queue/index_Queue.php");
  }
  public function updateFrom()
  {
      $id = $_GET['Q_id'];
      $QueueList = Queue::get($id);
      
      require_once("./views/Queue/updatefrom.php");
  }
  public function update()
  {
    $Q_id = $_GET['Q_id'];
    $Q_time = $_GET['Q_time'];
    $PS_id = $_GET['PS_id']; 
    $SDP_ID = $_GET['SDP_ID'];

    Queue::Add($Q_id,$Q_time,$PS_id,$SDP_ID);
    QueueController::index();
  }
  public function deleteConfrom()
  {
      $id = $_GET['Q_id'];
      $QueueList = Queue::get($id);
      require_once("./views/Queue/deleteConfrom.php");
  }
  public function delete()
  {
      $id = $_GET['Q_id'];
      echo $id;
      Queue::delete($id);

      QueueController::index();

  }

}
?>
