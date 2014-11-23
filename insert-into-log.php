<?php

header('Content-Type: text/plain') ;

include 'CONFIG.php' ;

$table = "log" ;

$event = mysql_real_escape_string($_POST["event"]) ;
$amount = mysql_real_escape_string($_POST["amount"]) ;
$notes = mysql_real_escape_string($_POST["notes"]) ;
$moment = mysql_real_escape_string($_POST["moment"]) ;

if ($amount == "") $amount = 0 ;
if ($moment == "") $moment = "now()" ;

$query = "INSERT INTO $table (event,amount,moment,notes) VALUES ('$event','$amount',$moment,'$notes') ";

$result = mysql_query($query);

$result or die(mysql_error()) ;

$id = mysql_insert_id() ;

echo "$id" ;

mysql_close() ;

?>