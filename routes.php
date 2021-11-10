<?php
$controllers = array('pages'=>['home','error'],
                      'Person'=>['index','newPerson','search','addPerson','delete','deleteConfrom','updateFrom','update'],
                      'Atk'=>['index','newAtk','search','addAtk','delete','deleteConfrom','updateFrom','update'],
                      'Queue'=>['index','newQueue','search','addQueue','delete','deleteConfrom','updateFrom','update']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        break;

        case "Person":  require_once("./models/Person.php");
                        $controller = new PersonController();
                        
                        break;

        case "Atk":     require_once("./models/Atk.php");
                        //require_once("./models/Queue.php");
                        $controller = new AtkController();
                        
                        break;
                        
        case "Queue":   require_once("./models/Person.php");
                        require_once("./models/Queue.php");
                        $controller = new QueueController();
                        
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

