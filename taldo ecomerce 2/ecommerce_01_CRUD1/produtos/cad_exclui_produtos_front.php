<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Exclusão de Produtos</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="shortcut icon" href="../img/72box.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="links">
            <img src="../img/72box.ico" height="50px" width="50px">
            <a href="../index.php" target="_parent" class="link">Home</a>
            <a href="cad_pesq_produtos_front.php" target="_parent" class="link">Produtos</a>
            <a href="../usuarios/cad_pesq_usuario_front.php" target="_parent" class="link">Usuários</a>
            <a href="../venda/selecao_produtos_front.php" target="_parent" class="link">Nossos produtos</a>
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
        <center>
            <?php
                $id_produto = $_GET["id_produto"];
                include "cad_getinfo_produto_back.php"; 
            ?>
            <form action="cad_exclui_produtos_back.php" method="post">
                <h2>Confirmação: Exclusão de Produtos</h2>
                <label>
                    Cod. Produto<br>
                    <input type="text" name="id_produto" value="<?php echo $linha['id_produto']; ?>" readonly><br>
                </label>
                <label>
                    Nome<br>
                    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" readonly><br>
                </label>
                <label>
                    Descrição<br>
                    <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>" readonly><br>
                </label>
                <label>
                    Quantidade<br>
                    <input type="text" name="qtde" value="<?php echo $linha['qtde']; ?>" readonly><br>
                </label>
                <label>
                    Preço<br>
                    <input type="text" name="valor" value="<?php echo $linha['valor']; ?>" readonly><br>
                </label>
                <label>
                    Cod. Fornecedor<br>
                    <input type="text" name="cod_fornecedor" value="<?php echo $linha['cod_fornecedor']; ?>" readonly><br>
                </label>
                <br>
                <input type="submit" value="Confirma exclusão">
                <input type="button" value="Editar"
                    onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $id_produto ?>';">
                <input type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';">
            </form>
        </center>
    </div>

    <script src="../utils/script.js"></script>

</body>

</html>