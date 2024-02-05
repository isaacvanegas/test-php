<?php

//$conn_string = "host=localhost port=5432 dbname=proyecto user=postgres password=admin";
//$dbconn4 = pg_connect($conn_string);

$conexion=   pg_connect("host=localhost  port=5432  dbname=postgres user=postgres password=admin") or die ('error en la coneccion a la base de datos');

?>
