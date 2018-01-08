<?php

session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "seecs";
$DB_name = "research";

$allowDuplicate = true;

$myIP = '000.000.000.000';
$userId = '';

try
{
     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     //Check User Ip
        if ($_SERVER['HTTP_HOST'] == 'localhost:8080'){
          $myIP = '000.000.000.000'; //for debuging
        }else{
          $myIP = get_client_ip();
        }

        $stmt = $DB_con->prepare("SELECT * FROM visitor where ip =:ip;");
        $stmt->bindparam(":ip", $myIP);
        $stmt->execute();
        if($stmt->rowCount()>0) { //if Ip exsist in DB
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          $userId = $result['id'];
          if($allowDuplicate == false){
            // echo "Welcome back!";
          }
        }
        else{ //If new user insert in db
          $stmt = $DB_con->prepare("INSERT into visitor  (`ip`) VALUES ( :ip ); ");
          $stmt->bindparam(":ip", $myIP);
          $stmt->execute();
          $userId = $DB_con->lastInsertId();

        }

}
catch(PDOException $e)
{
     echo $e->getMessage();
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
    }
