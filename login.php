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
