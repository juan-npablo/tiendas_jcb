<?php
/* Materia: BASES DE DATOS I
  2022-2
  Profesor: JULIANA FRANCO VILLEGAS
Integrantes:
  -JUAN CAMILO CASTAÑO CASAS ID: 1002939208
  -JUAN PABLO CATAÑO OSORIO  ID: 1004700539
  -BRANDON CASTAÑO GALEANO   ID: 1004628413

Programa: INGENIERÍA EN SISTEMAS Y COMPUTACIÓN
Módulo: DeleteCliente
Descripción: Se elimina en la base de datos todos los campos del cliente seleccionado. 
*/
    include("..\conexion.php");
    
    $id_cliente = $_GET['id'];
    
    $seleccionarRegistro="DELETE FROM clientes  WHERE id_cliente ='$id_cliente'";
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
            text: 'Cliente eliminado exitosamente',
            icon: 'success'
        });
        function volver(){
            window.location.href = '../clientes.php';
        }
        setTimeout(volver, 3000);  
    </script>
</body>
</html>