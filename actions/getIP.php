<?php
require_once './include/ip.function.php';

$result = getSingleip();
Result::success($result);