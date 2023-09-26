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
  $base_de_datos = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Ocurrió un error con la base de datos: ".$e->getMessage();
}

?>