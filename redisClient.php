<?php

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


?>