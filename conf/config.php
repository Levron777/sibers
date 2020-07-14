<?php

/*
* config file for connection all the main configuration files, classes of controllers, models, views
*/

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("MODEL_PATH", ROOT . "/models/");
define("VIEW_PATH", ROOT . "/views/");
define("PAGINATION", ROOT . "/conf/");

require_once("db.php");
require_once("route.php");
require_once PAGINATION . 'Pagination.php';
require_once MODEL_PATH . 'Model.php';
require_once VIEW_PATH . 'View.php';
require_once CONTROLLER_PATH . 'Controller.php';

//starting routing (conf/route.php)
Routing::buildRoute();