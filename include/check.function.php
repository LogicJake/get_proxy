<?php
function check($validcode){
    global $db;
    $res = $db->has("user",[
        "validcode" => $validcode
        ]);
    return $res;
}