<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingressos para o Show do Gwar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="https://i.ytimg.com/vi/vqkJMqmw4YI/maxresdefault.jpg" style="position: absolute; width: 100%; height: 100%; z-index: -1; object-fit: cover;">
    <div class="container">
        <h1>Ingressos para o Show do Gwar</h1>
        <p class="info-show">Show de Thrash Metal com Gwar</p>
        <p class="data-show">Data: 18/07/1988 às 18:45</p>

        <!-- Formulário para inserir a quantidade de ingressos -->
        <form method="POST" action="calculo_ingressos.php">
            <label for="quantidade">Quantidade de Ingressos:</label>
            <input type="number" id="quantidade" name="quantidade" min="1" required>
            <button type="submit">Calcular</button>
        </form>

        <!-- Exibição do resultado após o cálculo -->
        <div class="resultado">
            <?php
            if (isset($_GET['resultado'])) {
                echo '<p>' . $_GET['resultado'] . '</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>



