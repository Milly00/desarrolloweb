<?php
try {

    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');
    
    $codigoc = $_POST['codigoc'];
    $id = $_POST['id'];
    $codigoa = $_POST['codigoa'];
    $final = $_POST['final'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $finicio = $_POST['finicio'];

    $sql1 = "SELECT codigoa from acta where codigoa = '$codigoa'";
$res1 = $conn->query($sql1);
$res1 = $res1->fetch();//Para que no muestre error

foreach ($res1 as $key ) {
    # code...
    if($res1["codigoa"] === $codigoa){
       
     $sql2 = "SELECT codigoc from compromiso where codigoc = '$codigoc'";
    
    $res2 = $conn->query($sql2);
    
    foreach ($res2 as $key) {
      if($key["codigoc"] !== $codigoc){
    $sql = "INSERT INTO compromiso (codigoc,uid,codigoa,f_final,descripcion,estado,f_inicio) values ('$codigoc', '$id', '$codigoa', '$final', '$descripcion', '$estado', '$finicio')";
    
    $res = $conn->query($sql);
    
    echo "<h1> Compromiso creado </h1>"
    
    $conn = null;
      }else{
        echo "<h1> El codigo del compromiso ya existe </h1>";
      }
    $conn = null;
    echo "<h1> Asistente añadido </h1>";
    header("Location: crearacta.php?uid.$uid.");
    }else{
        echo "<h1> El código de acta aun no existe por lo tanto debe crear primero el acta </h1>";
    }
    
   
    }
    
    } catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
    }
?>