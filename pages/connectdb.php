<?php
$serverName="localhost";
$databaseName="my_prj";
$username="root";
$password="";

try{
    $conn=new PDO("mysql:host=$serverName;dbname=$databaseName",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection successfully";
}
catch(PDOException $e)
{
    echo "Connection Falied".$e->getMessage();

}

?>