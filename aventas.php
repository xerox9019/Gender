<?php
// Conexion cono la base de datos y el servidor
$link = mysqli_connect("127.0.0.1","root","Articuno-1","gender");
// optenemos los valores del formulario
$v_clave= $_POST["clave"];
$v_producto= $_POST["producto"];
$v_cantidad= $_POST["cantidad"];
$v_precio= $_POST["precio"];
$v_efectivo= $_POST["efectivo"];
$v_cambio= $_POST["cambio"];
// ingresar la informacion a la tabla 
$sql = "INSERT INTO compras (fecha,clave,producto,cantidad,total)
VALUES ('$v_clave','$v_producto','$v_cantidad','$v_precio','$v_efectivo','v_cambio')";
//Enviamos los datos a la tabla
$enviar=$link->query($sql);
echo "Registro agregado"
?>