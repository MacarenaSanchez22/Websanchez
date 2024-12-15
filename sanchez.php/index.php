<?php
$mysqli = new mysqli('localhost', 'root', '', 'base');

if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script> 
      alert ("PÁGINA PRINCIPAL")
    </script>
    <link rel="stylesheet" href="css/style_inicio.css">
    <script defer src="js/javascript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/31dbc23fd4.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="topnav" id="myTopnav">
              <img src="" >
                <a href="#" class="active">Inicio</a>
                <a href="trabajos/index.php">Trabajos</a>
                <a href="contacto/index.php">Contacto </a>
                <a href="sobre_mi/index.php">Sobre mí</a>
                <a href="juego/index.php">Juego</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
<br><br><br><br>
<h1>PAGINA PRINCIPAL</h1>
<p>Bienvenidos</p>
<p>Esta es mi página</p>
<br>
<div class = "main_inicio">
<img src="imagenes/perro.jpg" alt="perrito" style =width:250px height:170px ;>
<h2>Introduzca su:</h2>
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" required />
    </div><br>
    <button type="submit" name="login" value="login">Log In</button></form>
    
<img src="imagenes/decoracion.png" alt="" style =width:400px height:400px ;>
</div>
</body>
</html>