<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateSuministra
Descripción: Con los datos cambiados desde el modulo actualizarSuministra, ya son insertados 
             y cambiados en la base de datos.
*/
include("..\conexion.php");

$id_proveedor = $_POST['id_proveedor'];
$id_producto = $_POST['id_producto'];
$fechaSuministro = $_POST['fechaSuministro'];
$unidades = $_POST['unidades'];

$actualizarRegistro = "UPDATE suministra SET 
`unidades` = '$unidades'
WHERE id_producto ='$id_producto' AND id_proveedor ='$id_proveedor' AND fechaSuministro ='$fechaSuministro'";

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
            text: 'Suministro actualizado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../suministra.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>