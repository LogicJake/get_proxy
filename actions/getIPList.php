<?php
require_once './include/ip.function.php';
$result = getipList();
Result::success($result);