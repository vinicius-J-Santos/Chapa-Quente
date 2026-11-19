<?php

require_once "../bd.php";

$sqlCate = "SELECT * FROM categoria";
$resultadoCate = $conn->query($sqlCate);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php while($categorias = $resultadoCate->fetch_assoc()): ?>
            <div>
                <h1> <?= htmlspecialchars($categorias["nomeCategoria"]) ?> </h1>
                <div class="lista">
                    <?php
                        $sqlProd = "SELECT * FROM produto";
                        $resultadoProd = $conn->query($sqlProd);
                        while($Produtos=$resultadoProd->fetch_assoc()):
                    ?>
                    <div>
                        <img src="<?php echo "../image" . htmlspecialchars($Produtos["imagemProduto"]) ?>" placeholder="<?php echo htmlspecialchars($Produtos["nomeProduto"]) ?>">
                        <h2><?php echo htmlspecialchars($Produtos["nomeProduto"]) ?></h2>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
</body>
</html>