<?php
// Conexion cono la base de datos y el servidor
$link = mysqli_connect("127.0.0.1","root","Articuno-1","gender");
// optenemos los valores del formulario
$c_fecha= $_POST["fecha"];
$c_clave= $_POST["clave"];
$c_producto= $_POST["producto"];
$c_cantidad= $_POST["cantidad"];
$c_total= $_POST["total"];
// ingresar la informacion a la tabla 
$sql = "INSERT INTO compras (fecha,clave,producto,cantidad,total)
VALUES ('$c_fecha','$c_clave','$c_producto','$c_cantidad','$c_total')";
//Enviamos los datos a la tabla
$enviar=$link->query($sql);
echo "Registro agregado"
?>