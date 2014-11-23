<?php

// Run create-log-table.sql to create the table `log'

// Change these values for your MySQL configuration.

$user     = "<USERNAME>";
$password = "<PASSWORD>";
$database = "<DATABASE>";

mysql_connect("localhost",$user,$password);

@mysql_select_db($database) or die( "Unable to select database");

?>
