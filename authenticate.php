<?php
session_start();
require_once '../app/Mage.php';
umask(0);
Mage::app();

header('Content-type: application/json');
try
{
    
$host = "http://lcom44.lanet.com/sm_papa/index.php/api/soap/?wsdl";

$client = new SoapClient("http://lcom44.lanet.com/sm_papa/index.php/api/soap/?wsdl");
$apiuser = 'sm_papa'; 
$apikey = 'pG53Awbm46NJYEpAxzsKrBRngkJPCKNm7WbqSY78'; 

}
 catch (Exception $e)
{ //while an error has occured
			
            echo "Error: ".$e->getMessage(); //we print this               
			exit();
        }
?>
