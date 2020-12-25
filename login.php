<?php
try{
    $myPDO = new PDO("pgsql:host=ec2-52-5-176-53.compute-1.amazonaws.com;dbname=dbv43ft67o6q8l","gwlqnlismchdjn","a6e79eaab9db81e59dfeddad1556b6ec93de2b722e273998cffa291f3afb6f90");
    echo "Conected Successfully";
}catch(PDOException $e){
    echo $e->getMessage();
}
