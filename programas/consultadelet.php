<?php 
try {
    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');
    $codigoa = $_GET['codigoa'];
    
$sql2 = "DELETE FROM asiste where codigoa = '$codigoa'";
$res2 = $conn->query($sql2);

    $sql1 = "DELETE FROM acta where codigoa = '$codigoa'";
    
    $res1 = $conn->query($sql1);

    


    
} catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
}

?>