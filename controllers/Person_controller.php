<?php class PersonController{
    public function index()
    {
      
       $PersonList = Person::getAll();
        require_once("./views/Person/index_Person.php");
    }
    public function newPerson(){
        
      $PersonList = Person::getAll();
      require_once('./views/Person/newPerson.php');
  }
  public function addPerson()
  {
      
      $PS_id = $_GET['PS_id'];
      $PS_name = $_GET['PS_name'];
      $PS_add = $_GET['PS_add']; 
      

      Person::Add($PS_id,$PS_name,$PS_add);
      PersonController::index();
  }
  public function search()
  {
      $key = $_GET['key'];
      $Person_List = Person::search($key);
      require_once("./views/Person/index_Person.php");
  }
  public function updatefrom()
  {
      $id = $_GET['PS_id'];
      $PersonList = Person::getAll();
      
      require_once("./views/Person/updatefrom.php");
  }
  public function update()
  {
      $PS_id = $_GET['PS_id'];
      $PS_name = $_GET['PS_name'];
      $PS_add = $_GET['PS_add']; 
      

      Person::Add($PS_id,$PS_name,$PS_add);
      PersonController::index();
      
  }
  public function deleteConfrom()
  {
      $id = $_GET['PS_id'];
      $PersonList = Person::getAll();
      require_once("./views/Person/deleteConfrom.php");
  }
  public function delete()

  {

      $id=$_GET['PS_id'];
      echo $id;
      Person::delete($id);

      PersonController::index();

  }

}
?>
