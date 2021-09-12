<?php 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/inicio.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="img/logUNICORDOBA vigiladoMENmodalidad 2.png" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          
          <a class="nav-link" href="index.php" >Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page" href="facultades/facultades.php" aria-disabled="true">Facultades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page" href="programas/programas.php" aria-disabled="true">Programas</a>
         
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>

<div class="ingresouser">
  <h1>Creación de actas</h1>
  <p>Ingresa tus credenciales para crear un acta, elige si crearas un acta para un programa o facultad marcando la opcion deseada</p>
<form action="validar/validaruser.php" method="POST">
  <div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="user" aria-describedby="emailHelp">
  </div>
  <div class="mb-6">
    <label for="pass" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="pass">
  </div>
 
  <button type="submit" class="btn btn-success">Ingresar</button>
</form>
</div>
</body>
</html>