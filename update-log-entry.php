<?php

header('Content-Type: text/plain') ;

include 'CONFIG.php' ;

$table = "log" ;

$id = mysql_real_escape_string($_POST["id"]) ;
$field = mysql_real_escape_string($_POST["field"]) ;
$value = mysql_real_escape_string($_POST["value"]) ;

if ($field == "moment") {
 $value = "FROM_UNIXTIME(" . mysql_real_escape_string($_POST["value"]) . ")" ;
} else {
 $value = "'" . $value . "'" ;
}

$query = "UPDATE $table SET $field = $value WHERE id = '$id' ";

$result = mysql_query($query);

$result or die (mysql_error() . "\nQuery: " . $query) ;

mysql_close() ;

?>