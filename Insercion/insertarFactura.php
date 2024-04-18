<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertaFactura 
Descripción: Se inserta en la base de datos todos los campos de la factura. 
*/
include("..\conexion.php");

$id_factura = $_POST['id_factura'];
$total_factura = $_POST['total_factura'];
$id_cliente = $_POST['id_cliente'];
$id_metodoPago = $_POST['id_metodoPago'];
$fechaPago_factura = $_POST['fechaPago_factura'];

$insertarFactura = "INSERT INTO `factura`(`id_factura`, `total_factura`, 
`id_cliente`, `id_metodoPago`, `fechaPago_factura`) VALUES  ('$id_factura',
'$total_factura','$id_cliente','$id_metodoPago','$fechaPago_factura')";

mysqli_query($conn, $insertarFactura);

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
            text: 'Factura insertada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../factura.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>