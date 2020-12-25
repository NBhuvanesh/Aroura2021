<?php
try{
    $myPDO = new PDO("pgsql:host;dbname=testdb", "name", "passsword");
    echo "Conected Successfully";
}catch(PDOException $e){
    echo $e->getMessage();
}