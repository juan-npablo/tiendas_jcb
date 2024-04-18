<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertaProveedor
Descripción: Se inserta en la base de datos todos los campos del proveedor. 
*/
include("..\conexion.php");

$id_proveedor = $_POST['id_proveedor'];
$nombre_proveedor = $_POST['nombre_proveedor'];
$calle_proveedor = $_POST['calle_proveedor'];
$ciudad_proveedor = $_POST['ciudad_proveedor'];
$departamento_proveedor = $_POST['departamento_proveedor'];
$telefono_proveedor = $_POST['telefono_proveedor'];


$insertarProveedor = "INSERT INTO `proveedores`(`id_proveedor`, `nombre_proveedor`,
`calle_proveedor`, `departamento_proveedor`, `telefono_proveedor`, `ciudad_proveedor`) 
VALUES  ('$id_proveedor','$nombre_proveedor','$calle_proveedor',
'$departamento_proveedor','$telefono_proveedor', '$ciudad_proveedor')";

mysqli_query($conn, $insertarProveedor);

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
            text: 'Proveedor insertado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../proveedores.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>