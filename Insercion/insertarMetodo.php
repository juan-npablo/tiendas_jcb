<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertaMetodo
Descripción: Se inserta en la base de datos la forma de pago que el cliente efecturá para llevar su compra. 
*/
include("..\conexion.php");

$id_metodoPago = $_POST['id_metodoPago'];
$nombre_metodoPago = $_POST['nombre_metodoPago'];

$insertarPago= "INSERT INTO `metodospago`(`id_metodoPago`, `nombre_metodoPago`) 
VALUES  ('$id_metodoPago','$nombre_metodoPago')";

mysqli_query($conn, $insertarPago);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <script type="text/javascript">
        swal({
            title: 'Completado',
            text: 'Metodo de pago insertado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../metodosPago.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>