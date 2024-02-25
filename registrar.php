<?php
$conexion=mysqli_connect("localhost","root","","betafasto");

$nombre =$_POST ["nombre"];
$cedula =$_POST ["cedula"];
$municipio =$_POST ["municipio"];
$contraseña =$_POST ["contraseña"];
//consulta
$insertar = "INSERT INTO tblusuario (nombre, cedula, municipio, contraseña)
VALUES ('$nombre','$cedula','$municipio','$contraseña')";

//verificar antes de cargar
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM tblusuario WHERE cedula = '$cedula' " );
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script> alert("El usuario ya se encuentra registrado");
    window.history.go(-1);
    </script>';
    exit;
}
//ejecutar consulta
$resultado = mysqli_query ($conexion, $insertar);

if (!$resultado) {
    echo '<script> alert("Error al registrarse");
    window.history.go(-1);
    </script>';   
}else{
    echo '<script> alert("Registro exitoso mi compa");
    window.history.go(-1);
    
    </script>';

}
//cerrar cesion
mysqli_close($conexion);


