<?php
$serverName = "RAJALAKSHMI\SQLEXPRESS";
$connectionInfo = array( "Database"=>"CMS");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( !$conn ) {
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}

session_start();
?>