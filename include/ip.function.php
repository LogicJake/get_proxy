<?php
function getSingleip(){
    global $db;
    $res = $db->select("available",[
            "IP",
            "PORT"
    ],[
        "STATUS" => 0
    ]);
    $num = count($res);
    $index = rand(0,$num-1);
    $proxy = $res[$index];
    return $proxy;
}
function getipList(){
    global $db;
    $res = $db->select("available",[
            "IP",
            "PORT"
    ],[
        "STATUS" => 0
    ]);
    return $res;
}