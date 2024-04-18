<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertarVenta
Descripción: Se inserta en la base de datos todos los campos de la venta. 
*/
include("..\conexion.php");

$id_factura = $_POST['id_factura'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];

$insertarVenta = "INSERT INTO `ventas`(`id_factura`, `id_producto`, `cantidad`) VALUES 
('$id_factura','$id_producto','$cantidad')";

mysqli_query($conn, $insertarVenta);

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
            text: 'Venta insertada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../ventas.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>