<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateVenta
Descripción: Con los datos cambiados desde el modulo actualizarVenta, ya son insertados 
             y cambiados en la base de datos.
*/

include("..\conexion.php");

$id_factura = $_POST['id_factura'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];

$actualizarRegistro = "UPDATE ventas SET 
cantidad = $cantidad
WHERE id_factura = $id_factura AND id_producto = $id_producto";

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
            text: 'Venta actualizada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../ventas.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>