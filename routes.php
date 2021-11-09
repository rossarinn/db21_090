<?php
$controllers = array('pages'=>['home','error'],
                        'order'=>['index','newOrder','search','addOrder','delete','deleteConform','updateForm','update'],
                        'detailOrder'=>['index','search','newdetailOrder','adddetailOrder','updateForm','update','deleteConFirm','delete']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                        break;

        case "order":   require_once("./models/order.php");
                        require_once("./models/customer.php");
                        require_once("./models/staff.php");
                        $controller = new OrderController();
                        break;
                        
        case "detailOrder":     require_once("./models/order.php");
                                require_once("./models/detailOrder.php");
                              require_once("./models/customer.php");
                              require_once("./models/staff.php");
                              require_once("./models/product.php");
                              require_once("./models/ColorProduct.php");
                        $controller = new detailOrderController();
                        break;


    }
    $controller->{$action}();

}
if(array_key_exists($controller,$controllers)){

    if(in_array($action,$controllers[$controller]))

        call($controller,$action);

    else

        call('pages','error');

}

else{

    call('pages','error');

}

