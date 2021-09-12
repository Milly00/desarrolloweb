
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

<link rel="stylesheet" href="css/programas.css">

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
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
try {

    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');

    $sql = "SELECT * FROM programa";

    $p1 = $_GET['uid'];

    $sql1 = "SELECT codigof FROM usuario where uid = '$p1'";
    

    $res = $conn->query($sql);


    
    
    foreach ($res as $fila) {
      
      echo "<tr>";
      echo "<td>".$fila["codigop"]."</td>";
      echo "<td>".$fila["nombre"]."</td>";
      echo "<td>". "<a class='btn btn-success' href='actasprograma.php?codigop=".$fila['codigop']."&uid=".$p1."'> Ver actas </a>"."</td>";
      echo "</tr>";
    }

    $conn = null;

    
} catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
}
 ?>
  </tbody>
</table>
</div>
</body>
</html>