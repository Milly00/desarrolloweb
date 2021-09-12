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

    $sql1 = "SELECT codigoa FROM acta where codigoa = '$codigoa'";
    $res1 = $conn->query($sql1);

    foreach ($res1 as $key) {

        
$sql = "UPDATE acta SET codigoa = '$codigoa',uid_creador ='$uid',fecha_creacion = '$fecha',hr_inicio = '$hri',asunto = '$asunto',hr_final = '$hrf',descripcion = '$descripcion' where codigoa = '$codigoa'";

    $res = $conn->query($sql);

    echo "<h1> Acta actualizada</h1>";
        
        # code...
    }


    
} catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
}

?>