<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevStore</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php require_once __DIR__ . "/../app/Model/estoque.php"?>
<body>
    <section id="cabecalho" class="cabecalho">
        <a href="index.php">DevStore</a>
        <input type="search" placeholder="Busque seu produto:">
        <a href="">Inscreva-se</a> |
        <a href="">Entrar</a>
        <a href="carrinho.php">Carrinho</a>
    </section>
    <h2>Itens disponíveis</h2>
    <section id="produtos">
        <div class="container">
            <?php foreach ($db as $item): ?>
            <div class="card">
                <img src="<?= $item["foto"] ?>" alt="<?= $item["nomeProduto"] ?>" width="150">
                <p><?= $item["nomeProduto"]?></p>
                <p><?= $item["preco"]?></p>
                <p><?= "Estoque: " . $item["quantidade"]?></p>
            </div>
            <?php endforeach ?>
        </div>
    </section>
</body>
</html>