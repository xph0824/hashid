<?php
require_once "./HashId.php";

$obj = Ap_HashIds_HashId::getInstance();
$id = $obj->encode(1);
var_dump($id);
echo "\r\n";
$id = $obj->decode($id);
var_dump($id);
