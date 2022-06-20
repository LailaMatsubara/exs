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
        TERCEIRO EXERCÍCIO 
    </h1>
    
    <input type="number" name ="A"  placeholder= "Digite o valor A">
    <input type="number" name ="B"  placeholder= "Digite o valor B">
    <input type="number" name ="C"  placeholder= "Digite o valor C">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['A'], $_GET['B'], $_GET['C'])) {
    $a = $_GET['A'];
    $b = $_GET['B'];
    $c = $_GET['C'];
    
    $etriangulo = ($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($b + $a));

    $equilatero = $a == $b && $a == $c;
    $escaleno = ($a != $b) && ($b != $c) && ($a != $c);
    $isoceles = false;

    if (!$escaleno && !$equilatero) {
        $isoceles = true;
    }

    if ($etriangulo) {
    
        if ($equilatero) {
            echo "<h2> O triangulo é equilatero</h2>";
        }

        if ($isoceles) {
            echo "<h2> O triangulo é isoceles</h2>";
        }

        if ($escaleno) {
            echo "<h2> O triangulo é escaleno</h2>";
        }

    }else {
        echo "<h2> Não é um traingulo</h2>";
      }

 }
?>
</body>
</html> 