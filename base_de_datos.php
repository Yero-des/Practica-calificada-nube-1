<?php 

/* 
Credenciales para la conexion con postgreSQL
--------------------------------
*/

$host = "containers-us-west-189.railway.app";
$port = "5654";
$dbname = "railway";
$user = "postgres";
$password = "4BiKbOJpFaRswBw1pjRJ";

try {
  $data_base = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  $data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Ocurrió un error con la base de datos: ".$e->getMessage();
}

?>