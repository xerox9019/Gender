<?php
// Conexion cono la base de datos y el servidor
$link = mysqli_connect("127.0.0.1","root","Articuno-1","gender");
// optenemos los valores del formulario
$r_fecha= $_POST["fecha"];
$r_telefono= $_POST["telefono"];
$r_monto= $_POST["monto"];
;
// ingresar la informacion a la tabla 
$sql = "INSERT INTO recargas (fecha,telefono,monto)
VALUES ('$r_fecha','$r_telefono','$r_telefono')";
//Enviamos los datos a la tabla
$enviar=$link->query($sql);
echo "Registro agregado"
?>