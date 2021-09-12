<?php 
try {

    $conn = new PDO('mysql:host=localhost;dbname=desarrolloweb','root', '');

    $id = $_POST['id'];
$codigoa = $_POST['codigoa'];

$sql1 = "SELECT codigoa from acta where  exists (SELECT codigoa from acta)";
$res1 = $conn->query($sql1);
foreach ($res1 as $key ) {
    # code...
    if($key["codigoa"] === $codigoa ){
        $sql = "INSERT INTO asiste (codigoa,uid) values ( '$codigoa','$id')";

    $res = $conn->query($sql);
   
    }
    else{
        echo "<h1> El código de acta aun no existe por lo tanto debe crear primero el acta </h1>";
    }
}    $conn = null;

 
} catch (PDOException $e) {
    print "Error!:".$e->getMessage() . "<br/>";
    die();
}
?>