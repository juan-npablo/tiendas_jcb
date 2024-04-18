<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: UpdateEmpleado
Descripción: Con los datos cambiados desde el modulo actualizarEmpleado, ya son insertados 
             y cambiados en la base de datos.
*/	
include("..\conexion.php");

$id_empleado = $_POST['id_empleado'];
$nombre_empleado = $_POST['nombre_empleado'];
$apellidos_empleado = $_POST['apellidos_empleado'];
$fechaNacimiento_empleado = $_POST['fechaNacimiento_empleado'];
$calle_empleado = $_POST['calle_empleado'];
$ciudad_empleado = $_POST['ciudad_empleado'];
$departamento_empleado = $_POST['departamento_empleado'];
$telefono_empleado = $_POST['telefono_empleado'];
$id_sucursal = $_POST['id_sucursal'];

$actualizarRegistro = "UPDATE empleados SET 
nombre_empleado ='$nombre_empleado',
apellidos_empleado = '$apellidos_empleado',
calle_empleado = '$calle_empleado',
fechaNacimiento_empleado = '$fechaNacimiento_empleado',
ciudad_empleado ='$ciudad_empleado',
departamento_empleado = '$departamento_empleado',
telefono_empleado = '$telefono_empleado',
id_sucursal = '$id_sucursal'

WHERE id_empleado = $id_empleado";

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
            text: 'Empleado actualizado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../empleados.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>