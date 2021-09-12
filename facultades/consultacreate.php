<?php 
try {
    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');
    $codigoa = $_POST['codigoa'];
    $uid = $_POST['creador'];
    $fecha = $_POST['fechacreacion'];
    $hri = $_POST['hri'];
    $hrf = $_POST['hrf'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];

    
    $sql1 = "SELECT codigoa from acta where  exists (SELECT codigoa from acta)";
$res1 = $conn->query($sql1);
//$res1 = $res1->fetch();//Para que no muestre error

    foreach ($res1 as $key) {

        if($key["codigoa"] === $codigoa){
            echo "<h1> El codigo de acta ya existe </h1>";
        }else{
$sql = "INSERT INTO acta (codigoa,uid_creador,fecha_creacion,hr_inicio,asunto,hr_final,descripcion) values ('$codigoa','$uid','$fecha','$hri', '$asunto', '$hrf', '$descripcion')";

$codigof = $_POST["codigof"];
    $res = $conn->query($sql);

    $sql2 = "INSERT INTO emite (codigof,codigoa) values ('$codigof','$codigoa')";

    $res2 = $conn->query($sql2);

    echo "<h1> Acta creada </h1>";
        }
        # code...
    }


    
} catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
}

?>