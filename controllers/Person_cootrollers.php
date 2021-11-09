<?php class PersonController{
    public function index()
    {
      
        $Person_List=Person::getAll();
        require_once("./views/Person/index_Person.php");
    }
    public function newdetailOrder(){
        
        $customerList = customer::getAll();
        $staffList = staff::getAll();
        $colorproductList = colorproduct::getAll();
        $productList = product::getAll();
        $orderList = Order::getAll();
        require_once('./views/detailOrder/newdetailOrder.php');
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
    public function updateFrom()
    {
        $id = $_GET['PS_id'];
        $detailOrder = detailOrder::get($id);
        $customerList = customer::getAll();
        $staffList = staff::getAll();
        $colorproductList = colorproduct::getAll();
        $productList = product::getAll();
        $orderList = Order::getAll();
        
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
    public function deleteConFrom()
    {
        $id = $_GET['PS_id'];
        $detailOrder = detailOrder::get($id);
        $customerList = customer::getAll();
        $staffList = staff::getAll();
        $colorproductList = colorproduct::getAll();
        $productList = product::getAll();
        $orderList = Order::getAll();
        require_once("./views/Person/deleteConfrom.php");
    }
    public function delete()

    {

        $id=$_GET['no_id'];
        echo $id;
        detailOrder::delete($id);

        detailOrderController::index();

    }

}
?>
