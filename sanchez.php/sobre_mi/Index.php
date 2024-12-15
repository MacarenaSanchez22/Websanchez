<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel ="stylesheet" type="text/css" href="../css/style_sobremi.css">
<meta charset="UTF-8">
<title>Sobre mi</title>
<script> 
    alert ("Página: SOBRE MI")
    </script>
<script defer src="../js/javascript.js"></script>
<script src="https://kit.fontawesome.com/31dbc23fd4.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head> 
<body>
<div class="topnav" id="myTopnav">
       <img src="">
        <a href="..\index.php" >Inicio</a>
        <a href="..\trabajos\index.php">Trabajos</a>
        <a href="..\contacto\index.php">Contacto </a>
        <a href="..\sobre_mi\index.php" class="active">Sobre mí</a>
        <a href="..\juego\index.php">Juego</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
<br><br><br><br>
<div class ="sobre_mi">
<h1>SOBRE MI</h1>
        <hr style="width: 60%;">
        
<p>Datos personales:</p>  

    Nombre: Macarena<br>
    Apellido: Sanchez<br>
    Edad:20<br>
   Localidad: CABA<br>
    Mail: macarena.sanchez@comunidad.ub.edu.ar<br>
   Estudios: Universidad de Belgrano

<form>
    <label for="sexo"><b>Sexo:</b> </label>
    <input type="radio"> Hombre <input type="radio"> Mujer <br><br>
    <label for="email">Email:</label>
    <input type="email"><br><br>
    <label for="Localidad">Localidad:</label>
    <select name="pobla" id="pobla">
        <option value="value">CABA</option>
        <option value="value">Bs. As. G.B.A Norte</option>
        <option value="value">Bs. As. G.B.A Oeste</option>
        <option value="value">Bs. As. G.B.A Sur</option>
    </select><br><br>
    <label for="descripcion">Observación:</label>
    <textarea rows="3" cols="30"></textarea><br><br>
    <input type="checkbox">Deseo recibir información sobre novedades<br><br>
    <input type="submit">
</form>
<img src="../imagenes/decoracion.png" alt="" style =width:400px height:400px ;>
</body>
</div class ="sobre_mi">
</html>