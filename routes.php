<?php
$controllers = array('pages'=>['home','error'],
                      'Person'=>['index','newPerson','search','addPerson','delete','deleteConfrom','updateFrom','update']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                        break;

        case "Person":  $controller = new PersonController();
                        require_once("./models/Person.php");
                        echo "hah1253";
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

