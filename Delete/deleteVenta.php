<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: DeleteVenta
Descripción: Se elimina en la base de datos todos los campos de la venta seleccionada. 
*/
    include("..\conexion.php");
    
    $id_factura = $_GET['id_factura'];
    
    $seleccionarRegistro="DELETE FROM ventas WHERE id_factura ='$id_factura'";
    mysqli_query($conn,$seleccionarRegistro);
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
            text: 'Venta eliminada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../ventas.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>