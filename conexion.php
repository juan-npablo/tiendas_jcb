<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: Conexión 
Descripción: Se encarga de generar la conexión con la base de datos.
*/	
    $host="localhost";
    $username="root";
    $password="";
    $database="tiendasjcb";

    $conn = mysqli_connect($host, $username, $password, $database);
    if(!$conn){
        die("Conexion fallida". mysqli_connect_error($conn));
    }
?>