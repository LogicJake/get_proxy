<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
session_start();

require_once './include/Medoo.php';
require_once './include/config.php';
require_once './include/result.class.php';
require_once './include/check.function.php';

// white list
$actionList = ['getIP'];          //所有action列表

if (!isset($_GET['_action'])) {
    Result::error('missing _action');
}
if (!in_array($_GET['_action'], $actionList)) {
    Result::error('_action error');
}

if (!isset($_GET['validcode'])){  
    Result::error('invalid_user');
}
else{
    if(check($_GET['validcode'])){
        require_once "actions/{$_GET['_action']}.php";
    }
    else
        Result::error('invalid_user');
}