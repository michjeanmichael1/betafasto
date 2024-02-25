<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS7/Estilos Registrar_usuario7.css">

<title>Registro</title>
</head>
<body>

<div class="login-container">
  <style>
  
  </style>
  <img src="Img7/fasto imagen7.PNG" alt="Mi Imagen" width="100" height="150">
  <br><br>

  <form id="validationForm" action="registrar.php" method = "post">
    <input class="login-input" type="text" pattern='^[A-Za-z ]+$'  maxlength="35" placeholder="nombres completos" required id= "nombre" name= "nombre" ">
        
    <input class="login-input" type="number" maxlength="11"  placeholder="cedula" required id= "cedula" name= "cedula" >
    
    <input class="login-input" type="text" maxlength="30" placeholder="municipio" required id= "municipio" name= "municipio">
    
        
    <input class="login-input" type="password" maxlength="16" placeholder="contraseña" required id= "contraseña" name= "contraseña">

    <button class="login-button" type="submit" onclick="validar2()">Guardar</button>
    <button class="login-button" type="submit" id="redireccionar atras">Atrás</button>
    <p class="warnings" id="warnings"></p>
        
    <script>
    document.getElementById('redireccionar atras').addEventListener('click', function() {
    window.location.href = 'ingreso y contraseña7.php';
    });
    </script>
   
   
</form
 <br><br>
    <h6> Fasto / SENA 2024-1</h6>
</div>

<script src="validarnombre2.js"></script>

</body>

</html>