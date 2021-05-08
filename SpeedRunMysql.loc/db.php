<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connections = mysqli_connect('37.59.55.185', 'b6kSOkaMYw', '3J8G7h06Zr', 'b6kSOkaMYw');
    /*$config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']);
*/
if($connections == false)
{
    echo("No connect");
    echo mysqli_connect_error();
    exit();
}
session_start();
?>