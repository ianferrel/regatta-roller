<?php

header('Content-Type: text/plain') ;

include 'CONFIG.php' ;

$query = "SELECT id,event,amount,UNIX_TIMESTAMP(moment) AS time,notes " .
         "  FROM log " . 
         "  ORDER BY moment DESC " ;

$result = mysql_query($query);

$result or die("mysql error: " . mysql_error()) ;

echo "[" ;

$first = 1 ;

while ($row = mysql_fetch_assoc($result)) {
    if (!$first) {
     echo ",\n " ;
    } else {
     $first = 0 ;
    }

    echo json_encode($row) ;
}

echo "]\n" ;


mysql_close() ;

?>