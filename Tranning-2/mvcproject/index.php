<?php 
require './Core/Connection.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';


$controllerName = $_REQUEST['controller'] ?? 'home';
// echo $controllerName;
$controllerNewName = ucfirst(strtolower($controllerName)) . 'Controller';
// echo 'hello';
// echo '<br/>';
$actionName = $_REQUEST['action'] ?? 'index';
// echo $controllerNewName;
// echo '<br/>';
// echo $actionName;
require "./Controllers/${controllerNewName}.php";
$controllerObject =  new $controllerNewName;
echo '<br/>';
$controllerObject -> $actionName();

