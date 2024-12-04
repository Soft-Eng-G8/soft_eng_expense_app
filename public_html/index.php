<?php

require_once __DIR__ . '/../controllers/BaseController.php';
require_once __DIR__ . '/../models/BaseModel.php';
require_once __DIR__ . '/../utils/http.php';

$vars=get_input_vars();
if(isset($vars['module'])) $controller = ucfirst($vars['module']) . 'Controller';
else $controller = 'expenseController';
if(isset($vars['action'])) $action = $vars['action'];
else $action = 'index';


require_once __DIR__ . '/../controllers/' . $controller . '.php';

$instance = new $controller();
call_user_func([$instance, $action], $vars['id']);

?>
