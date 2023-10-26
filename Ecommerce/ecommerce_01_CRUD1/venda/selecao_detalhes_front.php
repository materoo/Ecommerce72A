<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>72box</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="shortcut icon" href="../img/72box.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="links">
            <img src="../img/72box.ico" height="50px" width="50px">
            <a href="../index.php" target="_parent" class="link">Home</a>
            <a href="../produtos/cad_pesq_produtos_front.php" target="_parent" class="link">Produtos</a>
            <a href="../usuarios/cad_pesq_usuario_front.php" target="_parent" class="link">Usuários</a>
            <a href="selecao_produtos_front.php" target="_parent" class="link">Nossos produtos</a>
            <a href="#">Desenvolvedores</a>
        </div>
        <div class="icons">
            <img src="../img/dark_mode.png" alt="Lampada" onclick="darkMode(), trocar2()" class="lampada" id="img"
                height="50px">
            <a href="../carrinho/carrinho_front.php"><img src="../img/carrinho.png" alt="Carrinho"></a>
            <a href="../usuarios/login.php"><img src="../img/perfil.png" alt="Perfil"></a>
        </div>
    </header>
    <div class="corpo">
        <?php
            $id_produto = $_GET["id"];
            include "../produtos/cad_getinfo_produto_back.php"; 
        ?>

        <div style="border: 1px solid black">

            <h1><?php echo $linha['descricao']; ?></h1>

            <img src='../img/72box.ico' style='width:300px; height:250px' />
            <br><br>
            Código do produto:<?php echo $linha['id_produto']; ?>
            <br><br>
            Descrição: <?php echo $linha['descricao']; ?>
            <br><br>
            Quantidade : <?php echo $linha['qtde']; ?>
            <br><br>
            Preço: R$ <?php echo number_format($linha['valor'], 2, ',', '.'); ?>
            <br><br>
            Código do fornecedor: <?php echo $linha['cod_fornecedor']; ?>
            <br><br>
            <a href='../carrinho/carrinho_front.php?acao=add&id_produto=<?php echo $id_produto; ?>'>Comprar</a>
            &nbsp;<a href="selecao_produtos_front.php">Voltar</a>
        </div>
    </div>
    <script src="../utils/script.js"></script>

</body>

</html>