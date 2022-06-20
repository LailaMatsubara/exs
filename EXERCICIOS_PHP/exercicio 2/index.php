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
        SEGUNDO EXERCÍCIO 
    </h1>
    
    <input type="number" name ="n1"  placeholder= "Digite um número">
    
    <input type="submit" value="Calcular">
</form>

<?php

if (isset($_GET['n1'])) {
    $number = $_GET['n1'];

    $isEven = ($number % 2) == 0;


    if ($isEven) {
        echo "<h2> O número $number é par</h2>";
    } else {
        echo "<h2> O número $number é impar</h2>";
    }

}
?>
</html> 