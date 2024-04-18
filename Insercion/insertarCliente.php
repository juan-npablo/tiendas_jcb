<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: InsertaCliente 
Descripción: Se inserta en la base de datos todos los campos del cliente. 
*/	

include("..\conexion.php");

$id_cliente = $_POST['id_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$apellido_cliente = $_POST['apellido_cliente'];
$telefono_cliente = $_POST['telefono_cliente'];
$calle_cliente = $_POST['calle_cliente'];
$ciudad_cliente = $_POST['ciudad_cliente'];
$departamento_cliente = $_POST['departamento_cliente'];

$insertarClientes = "INSERT INTO `clientes`(`id_cliente`, `nombre_cliente`, `apellido_cliente`,
`calle_cliente`, `ciudad_cliente`, `departamento_cliente`, `telefono_cliente`) VALUES 
('$id_cliente','$nombre_cliente','$apellido_cliente','$calle_cliente',
'$ciudad_cliente','$departamento_cliente','$telefono_cliente')";

mysqli_query($conn, $insertarClientes);

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
            text: 'Cliente insertado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../clientes.php';
        }
        setTimeout(volver, 2000);  
    </script>
</body>
</html>