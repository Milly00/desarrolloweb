
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
   
  <!------------------------------------------- FORMULARIO ACTAS -------------------------------------- -->  
  
  <?php 


try {

    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');

    $p1 = $_GET['uid'];



    $sql = "SELECT uid_creador FROM creador where uid_creador = '$p1'";

    $res = $conn->query($sql);

foreach ($res as $fila) {

     if( $p1 === $fila["uid_creador"]){
        echo "<h1> Creación de acta </h1>";
        
    } else {
        echo "<p> Usuario no encontrado </p>";
    }
}
    $conn = null;
} catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
}
 ?>

<form  action="consultacreate.php" method="POST">
  <div class="mb-3">
    <label for="codigoa" class="form-label">Codigo de Acta</label>
    <input type="text" class="form-control" name="codigoa" >
    
    <label for="creador" class="form-label"> Codigo facultad </label>
    <?php

    $codigof = $_GET['codigof'];

     echo "<input type='text'  class='form-control' name='codigof' value='".$codigof."'>" 
     ?>

    <label for="creador" class="form-label"> Creador </label>
    <?php

    $uid = $_GET['uid'];

     echo "<input type='text'  class='form-control' name='creador' value='".$uid."'>" 
     ?>

  </div>

  <div class="mb-3">
    <label for="fechacreacion" class="form-label">Fecha de creacion</label>
    
    <input type="text" class="form-control" name="fechacreacion" placeholder="YYYY/MM/DD" >
  </div>
  <div class="mb-3">
    <label for="hri" class="form-label">Hora de inicio</label>
    <input type="text" class="form-control" name="hri" placeholder="HH:MM:SS" >
    
  </div>
  <div class="mb-3">
    <label for="hrf" class="form-label">Hora de finalizacion</label>
    <input type="text" class="form-control" name="hrf" placeholder="HH:MM:SS" >
    
  </div>
  <div class="mb-3">
    <label for="asunto" class="form-label">Asunto</label>
    <input type="text" class="form-control" name="asunto" placeholder="Escriba el asunto">
    
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <textarea name="descripcion" class="form-control" aria-label="With textarea" placeholder="Escriba aqui una descripcion para el acta"></textarea>    
  </div>

  
  <button type="submit" class="btn btn-primary">Crear acta</button>
</form>
 <!------------------------------------------- LISTA ASISTENTESs -------------------------------------- -->  

 <h1> Lista de asistente</h1>
"<form action='crearlistasistente.php' method='POST' >
<div class="mb-3">
    <label for="codigoa" class="form-label">Codigo acta</label>
    <input type="text" class="form-control" name="codigoa" placeholder="Escriba el asunto">
    
  </div>

  <div class="mb-3">
    <label for="id" class="form-label">Id asistente</label>
    <input type="text" class="form-control" name="id" placeholder="Escriba el asunto">
    
  </div>

  <button type="submit" class="btn btn-primary" >Agregar asistente</button>


  
  
</form>
<!------------------------------------------------- COMPROMISOS-------------------------------------------->
<h1>Listado de compromisos</h1>

 "<form action='crearcompromisos.php' method='POST' >
<div class="mb-3">
    <label for="codigoc" class="form-label">Codigo compromiso</label>
    <input type="text" class="form-control" name="codigoc" placeholder="Escriba el asunto">
    
  </div>

  <div class="mb-3">
    <label for="id" class="form-label">Id asistente</label>
    <input type="text" class="form-control" name="id" placeholder="Escriba el asunto">
    
  </div>
  <div class="mb-3">
    <label for="codigoa" class="form-label">Codigo acta</label>
    <input type="text" class="form-control" name="codigoa" placeholder="Escriba el asunto">
    
  </div>

  <div class="mb-3">
    <label for="finicio" class="form-label">Fecha de inicio</label>
    
    <input type="text" class="form-control" name="finicio" placeholder="YYYY/MM/DD" >
  </div>

  <div class="mb-3">
    <label for="final" class="form-label">Fecha de finalizacion</label>
    
    <input type="text" class="form-control" name="final" placeholder="YYYY/MM/DD" >
  </div>

  <div class="mb-3">
    <label for="asunto" class="form-label">Asunto</label>
    <input type="text" class="form-control" name="asunto" placeholder="Escriba el asunto">
    
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <textarea name="descripcion" class="form-control" aria-label="With textarea" placeholder="Escriba aqui una descripcion para el acta"></textarea>    
  </div>

  <button  type="submit" class="btn btn-primary">Agregar</button>

  
</form>
  
</div>
</body>
</html>