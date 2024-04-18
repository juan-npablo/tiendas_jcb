<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: DeleteFactura
Descripción: Se elimina en la base de datos todos los campos de la factura seleccionada. 
*/
    include("..\conexion.php");
    
    $id_factura = $_GET['id'];
    
    $seleccionarRegistro="DELETE FROM factura WHERE id_factura ='$id_factura'";
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
            text: 'Factura eliminada exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../factura.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>