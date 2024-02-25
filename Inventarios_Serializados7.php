<?php
include("mostrar_inventario.php");
$usuarios = "SELECT * FROM tblequipo";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS7/Estilos Registrar_usuario7.css">
<link rel="stylesheet" type="text/css" href="CSS7/Estilos_tablas.css">
<link rel="stylesheet" type="text/css" href="CSS7/Prueba botones7.css">

<title>Inventarios Serializados</title>
<div class="login-container">
  <input class="login-input_buscador" type="text" width="50" height="" placeholder=" Escribe serial" required>
  <img src="Img7/Buscar7.png" alt="Mi Imagen" width="25" height="25">
  <img src="Img7/fasto imagen7.PNG" alt="Mi Imagen" width="20" height="25">
</head>
<body>


  <br><br>
  <h4> Inventario</h4>
   <div class="container-table"> 
   <div class="table__header">Codigo</div>
   <div class="table__header">Descripción</div>
   <div class="table__header">Serial</div>

   <?php $resultado =mysqli_query($conexion,$usuarios);
   while($row=mysqli_fetch_assoc($resultado))  { ?>
    

   <div class="table_item"><?php echo $row["codigo"];?> </div> 
   <div class="table_item"><?php echo $row["descripcion"];?> </div>
   <div class="table_item"><?php echo $row["serial"];?></div>
     
   <?php } mysqli_free_result($resultado);?>

  </div>  


  <a href="mod_inventarios7.php" class="boton">Atrás</a><br><br>
  <a href="mod_inventarios7.php" class="boton">Guardar</a><br><br>
    <br><br>
    <h6> Fasto / SENA 2024-1</h6>

</body>

</html>