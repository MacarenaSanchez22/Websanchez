
<?php
$mysqli = new mysqli('localhost', 'root', '', 'base');

if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel ="stylesheet" type="text/css" href="../css/style_contacto.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="UTF-8">
<title>Contacto</title>
<script> 
    alert ("Página: CONTACTO")
</script>
<script defer src="../js/javascript.js"></script>
<script src="https://kit.fontawesome.com/31dbc23fd4.js" crossorigin="anonymous"></script>
</head> 
<body>
 
<div class="topnav" id="myTopnav">
 <img src="">
        <a href="..\index.php">Inicio</a>
        <a href="..\trabajos\index.php">Trabajos</a>
        <a href="#"class="active">Contacto </a>
        <a href="..\sobre_mi\index.php">Sobre mí</a>
        <a href="..\juego\index.php">Juego</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
<br><br><br><br>
<div class ="main_contacto">
<p>Página de contacto </p>
<h1>Introduzca su:</h1>
          <label for="pnombre" class="pnombre"></label><br>
          <input type="Text" id="pnombre" name="nombre" placeholder ="Nombre" required/><br>
          <label for="apellido" class ="pnombre"></label><br>
          <input type="Text" id="apellido" name="apellido" placeholder ="Apellido"required/><br> 
          <label for ="mail" class ="pnombre" ></label><br>
          <input type ="email" id="mail" name ="mail" placeholder="Correo electrónico"required/><br><br>
          <textarea rows ="5" cols="25" class ="desc"  name ="desc" placeholder="Observaciones"required></textarea><br>
          <input type ="checkbox" id ="chequeo" name ="chequeo" required>
          <label for ="chequeo" class ="desc">Acepto los terminos y condiciones </label><br> 
          
          <select> 
       <option value="0" name ="pais">País</option> 
       <?php 
        $query = $mysqli -> query ("SELECT * FROM pais ORDER BY paisnombre");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['id'].'">'.$valores['paisnombre'].'</option>'; 
        } 
       ?>
         <br></select>
          <input type="submit" value="Enviar">
        </form>
        <br>
        <img src="../imagenes/decoracion.png" alt="" style =width:400px height:400px">
      </div class ="main_contacto">
</body>
</html>