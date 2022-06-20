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
        QUARTO EXERCÍCIO 
    </h1>
    
    <input type="text" name ="nome"  placeholder= "Digite seu nome ">
    <input type="text" name ="altura"  placeholder= "Digite sua altura">
    <input type="number" name ="peso"  placeholder= "Digite seu peso">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['altura'], $_GET['peso'], $_GET['nome'])) {
  $peso = $_GET['peso'];
  $altura = $_GET['altura'];
  $nome = $_GET['nome'];

  $imc = $peso / ($altura * $altura);
  $menssagem = "";


  if ($imc < 19) {
      $menssagem = "IMC < =19, Está abaixo do peso ideal!;";
  } else if ($imc < 25) {
      $menssagem = "IMC <= 25, Está com o peso ideal!;";
  } else if ($imc < 30) {
      $menssagem = "IMC <= 30, Está com sobrepeso!;";
  } else if ($imc < 40) {
      $menssagem = "IMC <= 40, Está obeso!;";
  } else {
      $menssagem = "IMC > 40, Obesidade mórbida!;";
  }

  echo "<h2>Olá $nome, seu imc é " . number_format($imc, 2, '.', ',') . ", $menssagem </h2>";
}
?>
</body>
</html> 