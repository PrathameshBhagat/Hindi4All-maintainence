<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'redisClient.php';

$temp = json_decode(file_get_contents('php://input'), true);

$obj = [ 
    "ID" => uniqid(), 
    "code" => $temp['code']];

$redis->lPush('jobs', json_encode($obj)); 

echo json_encode([ "jobId" => $obj['ID']]);

$op = $redis->lRange('jobs',  0, -1 );

// foreach( $op as $jb ){
    
//     echo "</br>".$jb."</br>";

// }


?>