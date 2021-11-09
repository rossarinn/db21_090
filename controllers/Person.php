<?php class detailOrderController{
    public function index()
    {
      
        $detailOrder_List=detailOrder::getAll();
        require_once("./views/detailOrder/index_detailOrder.php");
    }
    public function newdetailOrder(){
        
        $customerList = customer::getAll();
        $staffList = staff::getAll();
        $colorproductList = colorproduct::getAll();
        $productList = product::getAll();
        $orderList = Order::getAll();
        require_once('./views/detailOrder/newdetailOrder.php');
    }
    public function adddetailOrder()
    {
        
        $no_id = $_GET['no_id'];
        $date = $_GET['date'];
        $con_payment = $_GET['con_payment']; 
        $เงื่อนไข = $_GET['เงื่อนไข'];
        $stock_id1 = $_GET['stock_id1'];
        $s_id = $_GET['s_id'];
        $c_id = $_GET['c_id'];
        $p_id = $_GET['p_id'];
        $cp_color = $_GET['cp_color'];
        $n_pจำนวน = $_GET['n_pจำนวน'];
        $n_pscreen = $_GET['n_pscreen'];
        $id_order = $_GET['id_order'];


        detailOrder::Add($no_id,$date,$con_payment,$เงื่อนไข,$stock_id1,$s_id,$c_id,$p_id,$cp_color,$n_pจำนวน,$n_pscreen,$id_order);
        detailOrderController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $detailOrder_List = detailOrder::search($key);
        require_once("./views/detailOrder/index_detailOrder.php");
    }
    public function updateForm()
    {
        $id = $_GET['no_id'];
        $detailOrder = detailOrder::get($id);
        $customerList = customer::getAll();
        $staffList = staff::getAll();
        $colorproductList = colorproduct::getAll();
        $productList = product::getAll();
        $orderList = Order::getAll();
        
        require_once("./views/detailOrder/updateForm.php");
    }
    public function update()
    {
        $no_id = $_GET['no_id'];
        $date = $_GET['date'];
        $con_payment = $_GET['con_payment']; 
        $เงื่อนไข = $_GET['เงื่อนไข'];
        $stock_id1 = $_GET['stock_id1'];
        $s_id = $_GET['s_id'];
        $c_id = $_GET['c_id'];
        $p_id = $_GET['p_id'];
       
        $cp_color = $_GET['cp_color'];
        $n_pจำนวน = $_GET['n_pจำนวน'];
        $n_pscreen = $_GET['n_pscreen'];
        $id_order = $_GET['id_order'];
        $oldid = $_GET['oldid'];
        detailOrder::update($no_id,$date,$con_payment,$เงื่อนไข,$stock_id1,$s_id,$c_id,$p_id,$cp_color,$n_pจำนวน,$n_pscreen,$id_order,$oldid);
        detailOrderController::index();
        
    }
    public function deleteConFirm()
    {
        $id = $_GET['no_id'];
        $detailOrder = detailOrder::get($id);
        $customerList = customer::getAll();
        $staffList = staff::getAll();
        $colorproductList = colorproduct::getAll();
        $productList = product::getAll();
        $orderList = Order::getAll();
        require_once("./views/detailOrder/deleteConFirm.php");
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
