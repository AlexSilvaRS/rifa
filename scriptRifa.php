<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $premio = $_POST["premio"];
    $data = $_POST["data"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

   
    echo "<p><strong>Prêmio:</strong> $premio</p>";
    echo "<p><strong>Data:</strong> $data</p>";
    echo "<p><strong>Valor:</strong> R$ " . number_format($preco, 2, ',', '.') . "</p>";
    echo "<p><strong>Quantidade de Números:</strong> $quantidade</p>";
    echo "<h2>Números da Rifa:</h2>";
    echo "<ul>";

    for ($i = 1; $i <= $quantidade; $i++) {
        echo "<li>Número $i</li>";
    }
    echo "</ul>";
}
