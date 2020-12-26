<?php
    $db = 'Database1.accdb';
    if(!file_exists($db))
    {
        die('could not find database');
    }
    else
    {
        echo('database success');
    }
    $db = new PDO("odbc:DRIVER=(Microsoft Access Driver (*.mdb)}; DBQ=$db; Uid=; Pwd=;");
    $sql = "SELECT * FROM Table1";
    $result = $db->query($sql);
?>
