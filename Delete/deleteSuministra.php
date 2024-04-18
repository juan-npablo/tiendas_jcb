<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: DeleteSuministra
Descripción: Se elimina en la base de datos todos los campos del suministro seleccionado. 
*/
    include("..\conexion.php");
    
    $id_proveedor = $_GET['id_proveedor'];
    $id_producto= $_GET['id_producto'];
    $fechaSuministro = $_GET['fechaSuministro'];
    
    $seleccionarRegistro="DELETE FROM suministra WHERE id_producto ='$id_producto' AND id_proveedor ='$id_proveedor' AND fechaSuministro ='$fechaSuministro'";
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
            text: 'Información de suministro eliminado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../suministra.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>