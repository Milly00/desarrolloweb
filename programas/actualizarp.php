
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

<link rel="stylesheet" href="css/crearacta.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="../img/logUNICORDOBA vigiladoMENmodalidad 2.png" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Facultades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Programas</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<div class="encabezado">
  

<form  action="consultaupdate.php" method="POST">
  <div class="mb-3">
    <label for="codigoa" class="form-label">Codigo de Acta</label>
    <?php
 $codigoa = $_GET["codigoa"];
     echo "<input type='text' class='form-control' name='codigoa' value='$codigoa' >"
     
     ?>
    
    <label for="creador" class="form-label"> Creador </label>
    <?php

    $uid = $_GET['uid'];

     echo "<input type='text'  class='form-control' name='creador' value='".$uid."'>" 
     ?>

  </div>

  <div class="mb-3">
    <?php 

try {
  //code...
$uid = $_GET['uid'];
$codigoa =$_GET['codigoa'];
    $codigoa;
    $uid;
    $fecha;
    $hri;
    $hrf;
    $asunto;
    $descripcion;


      $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');

      

      $sql1 = "SELECT * FROM acta WHERE codigoa = '$codigoa'";

      $res1 = $conn->query($sql1);

      foreach ($res1 as $fila) {
        $codigoa = $fila["codigoa"];
    $uid = $fila["uid_creador"];
    $fecha = $fila["fecha_creacion"];
    $hri = $fila["hr_inicio"];
    $hrf =  $fila["hr_final"];
    $asunto = $fila["asunto"];
    $descripcion = $fila["descripcion"];

    echo
    "<label for='fechacreacion' class='form-label'>Fecha de creacion</label>";
    
   echo  "<input type='text' class='form-control' name='fechacreacion' placeholder='YYYY/MM/DD' value='$fecha'>";
   echo "</div>" ;
  echo "<div class='mb-3'>";
    echo "<label for='hri' class='form-label'>Hora de inicio</label>";
   echo  "<input type='text' class='form-control' name='hri' placeholder='HH:MM:SS' value='$hri'>";
    
   echo "</div>
  <div class='mb-3'>
    <label for='hrf' class='form-label'>Hora de finalizacion</label>
    <input type='text' class='form-control' name='hrf' placeholder='HH:MM:SS' value='$hrf' >
    
  </div>
  <div class='mb-3'>
    <label for='asunto' class='form-label'>Asunto</label>
    <input value='$asunto' type='text' class='form-control' name='asunto' placeholder='Escriba el asunto'>
    
  </div>

  <div class='mb-3'>
    <label for='descripcion' class='form-label'>Descripcion</label>
    <textarea value='$descripcion' name='descripcion' class='form-control' aria-label='With textarea' placeholder='Escriba aqui una descripcion para el acta'></textarea>    
  </div> "
        ;
  }
  
  $conn = null;



} catch (\Throwable $th) {
  //throw $th;
}

    ?>
  <button type="submit" class="btn btn-success">Actualizar</button>
</form>


  
</div>
</body>
</html>