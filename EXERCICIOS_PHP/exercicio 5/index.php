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
       QUINTO EXERCÍCIO 
    </h1>
    
    <input type="number" name ="voto"  placeholder= "Digite o código ">
    <input type="submit" value="Calcular">
</form>

<?php

session_start();
if (isset($_GET['voto'])) {
  if (!isset($_SESSION["votos"])) {
    $_SESSION["votos"] = 0;
    $_SESSION["candidato1"] = 0;
    $_SESSION["candidato2"] = 0;
    $_SESSION["candidato3"] = 0;

    $_SESSION["nulos"] = 0;
    $_SESSION["brancos"] = 0;
  }

  if ($_GET['voto'] == 1) {
    $_SESSION["votos"] += 1;
    $_SESSION["candidato1"] += 1;

    echo "<h2>Voto computado com sucesso</h2>";
  }

  if ($_GET['voto'] == 2) {
    $_SESSION["votos"] += 1;
    $_SESSION["candidato2"] += 1;
    echo "<h2>Voto computado com sucesso</h2>";
  }

  if ($_GET['voto'] == 3) {
    $_SESSION["votos"] += 1;
    $_SESSION["candidato3"] += 1;
    echo "<h2>Voto computado com sucesso</h2>";
  }

  if ($_GET['voto'] == 4) {
    $_SESSION["votos"] += 1;
    $_SESSION["brancos"] += 1;
    echo "<h2>Voto computado com sucesso</h2>";
  }

  if ($_GET['voto'] == 9) {
    $_SESSION["votos"] += 1;
    $_SESSION["nulos"] += 1;
    echo "<h2>Voto computado com sucesso</h2>";
  }

  if ($_GET['voto'] == 0) {
    header("Location: finalizar.php");
  }

  if ($_GET['voto'] != 1 && $_GET['voto'] != 2 && $_GET['voto'] != 3 && $_GET['voto'] != 4 && $_GET['voto'] != 9) {
    echo "<h2>Voto Invalido</h2>";
  }
}



?>
</body>
</html> 