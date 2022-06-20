<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>

    <form action="index.php">

    <h1>
        PRIMEIRO EXERCÍCIO 
    </h1>
    
    <input type="number" name ="n1"  placeholder= "digite o numero 1">
    <input type="number" name ="n2"  placeholder= "digite o numero 2">
    <input type="number" name ="n3"  placeholder= "digite o numero 3">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_GET["n1"])){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];

    if($n2 < $n1){
    $result=$n1;
    $n1=$n2;
    $n2=$result;
    }

    if($n3 < $n1){
    $result=$n1;
    $n1=$n3;
    $n3=$result;
    }

    if($n3 < $n2){
    $result=$n2;
    $n2=$n3;
    $n3=$result;
    }

    echo "<br><h2>$n1 > $n2 > $n3</h2>";


}

?>
</body>
</html> 