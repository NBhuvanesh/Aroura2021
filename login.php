<?php
    $db = 'database.accdb';
    if(!file_exists($db))
    {
        die('could not find database');
    }
    else
    {
        echo('database success');
    }
    $db = new PDO("odbc:DRIVER=(Microsoft Access Driver (*.mdb)}; DBQ=$db; Uid=; Pwd=;");
?>
