<?php

/*
** Routing class
*/

class Routing
{
    public static function buildRoute()
    {

//      define default Controller and Action
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

//        check the content of bad code in a GET request
        $get = $_GET['input'];
        $get = trim($get);
        $get = stripslashes($get);
        $get = htmlspecialchars($get);

//        define the variables if we have $_GET['input'] and the same name of our Controller
        if (!empty($get)) {
            if (is_file(CONTROLLER_PATH . ucfirst($get) . "Controller.php")) {
                $controllerName = ucfirst($get) . "Controller";
                $modelName =  ucfirst($get) . "Model";
            }
        }

        require_once CONTROLLER_PATH . $controllerName . ".php";
        require_once MODEL_PATH . $modelName . ".php";

//        start the action of the new controller
        $controller = new $controllerName();
        $controller->$action();
    }
}