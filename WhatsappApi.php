<?php 
include 'config.php';
$postData = array(
        'number' => '9173173125',
        'type' => 'text',
        'message' => 'test message',
        'access_token' => '07bb49e65a151134a028073f3fb4cd0e',
        'instance_id' => '632E07A76DBD3',
        
    );


      $Url ='https://betablaster.in/api/send.php';

    $ch = curl_init($Url);
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            
            "Content-Type: application/json"
        ),
        CURLOPT_POSTFIELDS => json_encode('https://betablaster.in/api/send.php?number=9173173125&type=text&message=test%20message&instance_id=632E07A76DBD3&access_token=07bb49e65a151134a028073f3fb4cd0e')
    ));

    $response = curl_exec($ch);

    if($response === FALSE){
            echo $response;

        die(curl_error($ch));
    }
    else
    {
        $data = json_decode($response, true);
       
        print_r($data);
       
    }


?>