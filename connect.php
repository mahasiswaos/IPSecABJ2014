<?php
require './routeros_api.class.php';

$conn = array(
    'ip' => '192.168.56.20',
    'username' => 'admin',
    'password' => '',
    'debug'=> false,
);

$API = new routeros_api();
$API->debug = $con['debug'];
$API->connect($conn['ip'], $conn['username'], $conn['password']);

//$conn['ip']='192.168.56.10';
//$conn['username']='admin';
//$conn['password']='admin';
//$conn['debug']=false;


