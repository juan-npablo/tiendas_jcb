<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertaProducto
Descripción: Se inserta en la base de datos todos los campos del producto. 
*/
include("..\conexion.php");

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];
$fecha_vencimiento_producto = $_POST['fecha_vencimiento_producto'];
$lote_producto = $_POST['lote_producto'];
$peso_producto = $_POST['peso_producto'];
$id_seccion = $_POST['id_seccion'];

$insertarProducto = "INSERT INTO `productos`(`nombre_producto`, `precio_producto`, 
`fecha_vencimiento_producto`, `lote_producto`, `peso_producto`, `id_seccion`, `id_producto`) 
VALUES ('$nombre_producto','$precio_producto','$fecha_vencimiento_producto','$lote_producto',
'$peso_producto','$id_seccion','$id_producto')";

mysqli_query($conn, $insertarProducto);

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
            text: 'Producto insertado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../productos.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>