<?php

header('Content-Type: text/plain') ;

include 'CONFIG.php' ;

$table = "log" ;

$id = mysql_real_escape_string($_POST["id"]) ;

$query = "DELETE FROM $table WHERE id = '$id' ";

$result = mysql_query($query);

$result or die (mysql_error() . "\nQuery: " . $query) ;

mysql_close() ;

?>