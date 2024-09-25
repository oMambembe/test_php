<?php
if (isset($_POST['quantidade'])) {
    // Receber a quantidade de ingressos do formulário
    $quantidadeIngressos = $_POST['quantidade'];
    $precoIngresso = 14.50;

    // Calcular o valor total
    $valorTotal = $quantidadeIngressos * $precoIngresso;

    // Formatar o resultado para exibição
    $resultado = "O valor total para " . $quantidadeIngressos . " ingressos é: R$ " . number_format($valorTotal, 2, ',', '.');

    // Redirecionar de volta para a página principal com o resultado
    header("Location: index.php?resultado=" . urlencode($resultado));
    exit();
} else {
    // Caso o campo quantidade não esteja definido
    header("Location: index.php");
    exit();
}
