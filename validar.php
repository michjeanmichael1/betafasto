<?php
ob_start();
$cedula=$_POST ['cedula'];
$contraseña=$_POST ['contraseña'];
//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","betafasto");
$consulta="SELECT * FROM tblusuario WHERE cedula='$cedula' and contraseña='$contraseña' ";
$resultado = mysqli_query ($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
    header ("location:mod_inventarios7.php" );
ob_end_flush();
}
else {
    
    echo '<script> alert("Cedula o contraseña incorrecta");
    window.history.go(-1);
    </script>'; 
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>