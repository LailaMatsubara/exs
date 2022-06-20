<?php
session_start();
if (isset($_SESSION["vinhos"])) {
    $qtdVinhos = $_SESSION["vinhos"];

    $tinto = $_SESSION["tinto"];
    $branco = $_SESSION["branco"];
    $rose = $_SESSION["rose"];

    $porcentagem_tinto = $tinto * 100 / $qtdVinhos;
    $porcentagem_branco = $branco * 100 / $qtdVinhos;
    $porcentagem_rose = $rose* 100 / $qtdVinhos;




    echo "<p>Teve $qtdVinhos</p>";

    echo "<br/>";
    echo "<p>A quantida de votos no tinto foi $tinto e a porcentagem foi " . number_format($porcentagem_tinto, 2, ',', '.') . "%</p>";
    echo "<p>A quantida de votos no branco foi $branco e a porcentagem foi " . number_format($porcentagem_branco, 2, ',', '.') . "%</p>";
    echo "<p>A quantida de votos no rose foi $rose e a porcentagem foi " . number_format($porcentagem_rose, 2, ',', '.') . "%</p>";

    unset($_SESSION["vinhos"], $_SESSION["tinto"], $_SESSION["branco"], $_SESSION["rose"]);
}
else {
    header("Location: index.php");
}

?>