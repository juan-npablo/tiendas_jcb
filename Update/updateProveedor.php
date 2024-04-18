<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateProveedor
Descripción: Con los datos cambiados desde el modulo actualizarProveedor, ya son insertados 
             y cambiados en la base de datos.
*/
include("..\conexion.php");

$id_proveedor = $_POST['id_proveedor'];
$nombre_proveedor = $_POST['nombre_proveedor'];
$calle_proveedor = $_POST['calle_proveedor'];
$departamento_proveedor = $_POST['departamento_proveedor'];
$telefono_proveedor = $_POST['telefono_proveedor'];
$ciudad_proveedor = $_POST['ciudad_proveedor'];

$actualizarRegistro = "UPDATE proveedores SET 
nombre_proveedor ='$nombre_proveedor',
calle_proveedor = '$calle_proveedor',
departamento_proveedor = '$departamento_proveedor',
telefono_proveedor = '$telefono_proveedor',
ciudad_proveedor = '$ciudad_proveedor'
WHERE id_proveedor = $id_proveedor";

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
            text: 'Proveedor actualizado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../proveedores.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>