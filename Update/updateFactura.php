<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateFactura
Descripción: Con los datos cambiados desde el modulo actualizarFactura, ya son insertados 
             y cambiados en la base de datos.
*/
include("..\conexion.php");

$id_factura = $_POST['id_factura'];
$total_factura = $_POST['total_factura'];
$id_cliente = $_POST['id_cliente'];
$id_metodoPago = $_POST['id_metodoPago'];
$fechaPago_factura = $_POST['fechaPago_factura'];

$actualizarRegistro = "UPDATE factura SET 
total_factura = '$total_factura',
id_cliente ='$id_cliente',
id_metodoPago ='$id_metodoPago',
fechaPago_factura = '$fechaPago_factura'
WHERE id_factura = $id_factura";

mysqli_query($conn,$actualizarRegistro);
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
            text: 'Factura actualizada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../factura.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>