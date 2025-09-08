<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevStore</title>
</head>
<?php require_once __DIR__ . "/../app/Model/estoque.php"?>
<body>
    <section id="cabecalho">
        <a href="index.php">DevStore</a>
        <input type="search" placeholder="Busque seu produto:">
        <a href="">Inscreva-se</a> |
        <a href="">Entrar</a>
        <a href="carrinho.php">Carrinho</a>
    </section>
    <h2>Itens disponíveis</h2>
    <section id="produtos">
        <div>
            <p>Mouse Gamer</p>
            <p>Quantidade: 3</p>
            <p>R$ 79,90</p>
        </div>
        <?php foreach ($db as $item): ?>
        <div>
            <p><?= $item["nomeProduto"]?></p>
            <p><?= $item["preco"]?></p>
            <p><?= "Estoque: " . $item["quantidade"]?></p>
        </div>
        <?php endforeach ?>
    </section>
</body>
</html>