
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

<link rel="stylesheet" href="css/validaruser.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img class="logo" src="../img/logUNICORDOBA vigiladoMENmodalidad 2.png" alt="" srcset=""></a>
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
<h1> Bienvenido </h1>

<img class="img-b" src="../img//arisa-chattasa-0LaBRkmH4fM-unsplash.jpg" alt="" srcset="">
    
  
  <?php 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
try {

    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');

    $p1 = $_POST['user'];

    $p2 = $_POST['pass'];


    $sql = "SELECT uid , password FROM usuario where uid = '$p1' and password = '$p2'";

    $res = $conn->query($sql);

foreach ($res as $fila) {

    
     if( $p1 === $fila["uid"]  &&  $p2 === $fila["password"] ){
        echo "<div class='buttons row'>";
        echo "<a class='btn btn-outline-primary col' href='../facultades/facultades.php?uid=".$p1."'> Ir a facultades </a>";
        echo "</br>";
        echo "<a class='btn btn-outline-success col' href='../programas/programas.php?uid=".$p1."'> Ir a programas </a>";
        echo "</div>";
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
  
</div>
</body>
</html>