<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateMetodoPago
Descripción: Con los datos cambiados desde el modulo actualizarMetodoPago, ya son insertados 
             y cambiados en la base de datos.
*/
include("..\conexion.php");

$id_metodoPago = $_POST['id_metodoPago'];
$nombre_metodoPago = $_POST['nombre_metodoPago'];

$actualizarRegistro = "UPDATE metodospago SET 
nombre_metodoPago ='$nombre_metodoPago'
WHERE id_metodoPago = $id_metodoPago";

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
            text: 'Método de pago actualizado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../metodosPago.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>