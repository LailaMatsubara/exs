<?php
session_start();
if (isset($_SESSION["votos"])) {
  $qtdVotos = $_SESSION["votos"];

  $candidato1 = $_SESSION["candidato1"];
  $candidato2 = $_SESSION["candidato2"];
  $candidato3 = $_SESSION["candidato3"];

  $brancos = $_SESSION["brancos"];
  $nulos = $_SESSION["nulos"];

  $votosValidos = $qtdVotos - $brancos - $nulos;

  $porcentagem_candidato1 = $candidato1 * 100 / $qtdVotos;
  $porcentagem_candidato2 = $candidato2 * 100 / $qtdVotos;
  $porcentagem_candidato3 = $candidato3 * 100 / $qtdVotos;

  $porcentagem_brancos = $brancos / $qtdVotos;
  $porcentagem_nulos = $nulos / $qtdVotos;

  $vencedor = "Empate";

  if (($porcentagem_candidato1 > $porcentagem_candidato2) && ($porcentagem_candidato1 > $porcentagem_candidato3)) {
    $vencedor = "Vencedor foi o candidato 1";
  }

  if (($porcentagem_candidato2 > $porcentagem_candidato1) && ($porcentagem_candidato2 > $porcentagem_candidato3)) {
    $vencedor = "Vencedor foi o candidato 2";
  }

  if (($porcentagem_candidato3 > $porcentagem_candidato1) && ($porcentagem_candidato3 > $porcentagem_candidato2)) {
    $vencedor = "Vencedor foi o candidato 3";
  }

  echo "<p>Teve $qtdVotos</p>";
  echo "<p>A quantida de votos validos foi $votosValidos</p>";

  echo "<br/>";
  echo "<p>A quantida de votos no candidato1 foi $candidato1 e a porcentagem foi " . number_format($porcentagem_candidato1, 2, ',', '.') . "%</p>";
  echo "<p>A quantida de votos no candidato2 foi $candidato2 e a porcentagem foi " . number_format($porcentagem_candidato2, 2, ',', '.') . "%</p>";
  echo "<p>A quantida de votos no candidato2 foi $candidato3 e a porcentagem foi " . number_format($porcentagem_candidato3, 2, ',', '.') . "%</p>";

  echo "<br/>";
  echo "<p>A quantida de votos brancos foi $brancos e a porcentagem foi " . number_format($porcentagem_brancos, 2, ',', '.') . "%</p>";
  echo "<p>A quantida de votos nulos foi $nulos e a porcentagem foi " . number_format($porcentagem_nulos, 2, ',', '.') . "%</p>";

  echo "<br/>";
  echo "<h2>O resultado foi $vencedor</h2>";


  unset($_SESSION["votos"], $_SESSION["candidato1"], $_SESSION["candidato2"], $_SESSION["candidato3"], $_SESSION["brancos"], $_SESSION["nulos"]);
}
else {
  header("Location: index.php");
}

?>