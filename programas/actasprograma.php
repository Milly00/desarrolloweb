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
<link rel="stylesheet" href="css/actasprograma.css">
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
    <?php
    try {
        
       $uid = $_GET['uid'];
       $codigop = $_GET['codigop'];

        echo "<a class='btn btn-success' href='crearacta.php?uid=".$uid."&codigop=".$codigop."'> Crear acta</a>";

    } catch (\Throwable $th) {
        //throw $th;
    }
    ?>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo Acta</th>
      <th scope="col">Creador</th>
      <th scope="col">Fecha creacion</th>
      <th scope="col">Hora inicio</th>
      <th scope="col">Hora finalizacion</th>
      <th scope="col">Asunto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>
<?php 

try {
    //code...
$conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');

$codigop = $_GET['codigop'];

$uid = $_GET['uid'];

$sql = "SELECT codigop FROM usuario WHERE uid = '$uid' ";
$res = $conn->query($sql);

foreach ($res as $key ) {

    if ($codigop === $key['codigop']) {
       

        echo "<h1> Bienvenido </h1>";

        $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');
  
        $codigop = $_GET['codigop'];
  
        $sql1 = "SELECT * FROM acta NATURAL JOIN emite WHERE codigop = '$codigop' ";
  
        $res1 = $conn->query($sql1);
  
        foreach ($res1 as $fila) {
           echo "<tr>";
          echo "<td>".$fila["codigoa"]."</td>";
          echo "<td>".$fila["uid_creador"]."</td>";
          echo "<td>".$fila["fecha_creacion"]."</td>";
          echo "<td>".$fila["hr_inicio"]."</td>";
          echo "<td>".$fila["hr_final"]."</td>";
          echo "<td>".$fila["asunto"]."</td>";
          echo "<td>".$fila["descripcion"]."</td>";
  
          echo "<td>". "<a style='color:red' href='consultadelete.php?codigoa=".$fila['codigoa']."'> Eliminar </a>"."</td>";
          echo "<td>". "<a href='actualizar.php?codigoa=".$fila['codigoa']."&uid=".$fila["uid_creador"]."'> Editar </a>"."</td>";


      echo "</tr>";
    }
    } else {       
      echo "<h1></h1>";

        $conn = null;
       
    }
}


} catch (\Throwable $th) {
    //throw $th;
}


?>

</tbody>
</table>
    <a href="" ></a>
</body>
</html>
