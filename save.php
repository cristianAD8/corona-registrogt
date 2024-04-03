<?php 

include("conexion.php");

if(isset($_POST['save'])){
    if(
        strlen($_POST['Nit']) >=1&&
        strlen($_POST['Nombre']) >=1&&
        strlen($_POST['Codigo']) >=1&&
        strlen($_POST['Fecha']) >=1&&
        strlen($_POST['Cantidad']) >=1&&
        strlen($_POST['Base']) >=1&&
        strlen($_POST['Linea']) >=1&&
        strlen($_POST['Maquina']) >=1&&
        strlen($_POST['Detalles']) >=1
    ) {
        $Nit = trim($_POST['Nit']);
        $Nombre = trim($_POST['Nombre']);
        $Codigo = trim($_POST['Codigo']);
        $Fecha = trim($_POST['Fecha']);
        $Cantidad = trim($_POST['Cantidad']);
        $Base = trim($_POST['Base']);
        $Linea = trim($_POST['Linea']);
        $Maquina = trim($_POST['Maquina']);
        $Detalles = trim($_POST['Detalles']);
        $consulta = "INSERT INTO datos(Nit, Nombre, Codigo, Fecha, Cantidad, Base, Linea, Maquina, Detalles)
        Values('$Nit', '$Nombre','$Codigo','$Fecha','$Cantidad','$Base','$Linea','$Maquina','$Detalles')";
        $resultado = mysqli_query($conex, $consulta);
    }
}

