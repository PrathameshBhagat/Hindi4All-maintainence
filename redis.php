<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/redis/vendor/autoload.php';


$redis = new Predis\Client([
    'scheme'   => 'tcp',
    'host'     => 'plate-brother-steady-90701.db.redis.io',
    'port'     => 19368,
    'username' => 'default',
    'password' => '6Guimi6N9FyrMwgSazfCTFBDRlv27Tqs',
],
    [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ]
    );

$temp = json_decode(file_get_contents('php://input'), true);

$obj = [ 
    "ID" => uniqid(), 
    "code" => $temp['code']];

$redis->lPush('jobs', json_encode($obj)); 

echo json_encode([ "jobId" => $obj['ID']]);

$op = $redis->lRange('jobs',  0, -1 );

foreach( $op as $jb ){
    
    echo "</br>".$jb."</br>";

}


?>