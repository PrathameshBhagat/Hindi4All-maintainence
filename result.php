<?php

require_once 'redisClient.php';

$jobId=$_GET["jobId"];


$output =  $redis->get('job:' . $jobId); 

if(empty($output)){
    echo json_encode([
        'status' => 'PROCESSING',

        'op'=> $jobId 
           ]);

    
} else {


$output1 = json_decode($output, true);
$output1['status'] = 'COMPLETED';
echo json_encode($output1, JSON_UNESCAPED_UNICODE);
}





?>