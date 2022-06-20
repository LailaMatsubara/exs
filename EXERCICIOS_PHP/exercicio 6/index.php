<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body style="display:flex; flex-direction:column; justify-content: center;">

    
    <form action="index.php">

    <h1>
        SEXTO EXERCÍCIO 
    </h1>
    
    <input type="text" name ="vinho"  placeholder= "Digite o codigo ">

    <input type="submit" value="Calcular">
</form>
<?php
session_start();
if (isset($_GET['vinho'])) {
    $_GET["vinho"] = strtoupper($_GET["vinho"]);
    if (!isset($_SESSION["vinhos"])) {
        $_SESSION["vinhos"] = 0;
        $_SESSION["tinto"] = 0;
        $_SESSION["branco"] = 0;
        $_SESSION["rose"] = 0;
    }

    if ($_GET['vinho'] == 'T') {
        $_SESSION["vinhos"] += 1;
        $_SESSION["tinto"] += 1;

        echo "<h2>vinho tinto estocado com sucesso</h2>";
    }

    if ($_GET['vinho'] == 'B') {
        $_SESSION["vinhos"] += 1;
        $_SESSION["branco"] += 1;

        echo "<h2>vinho branco estocado com sucesso</h2>";
    }

    if ($_GET['vinho'] == 'R') {
        $_SESSION["vinhos"] += 1;
        $_SESSION["rose"] += 1;

        echo "<h2>vinho rose estocado com sucesso</h2>";
    }


    if ($_GET['vinho'] == 'F') {
        header("Location: finalizar.php");
    }

    if ($_GET['vinho'] != 'T' && $_GET['vinho'] != 'B' && $_GET['vinho'] != 'R' && $_GET['vinho'] != 'F') {
        echo "<h2>Voto Invalido</h2>";
    }
}
?>
</body>
</html> 