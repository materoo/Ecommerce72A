<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Produtos</title>
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
            <form action="cad_novo_produtos_back.php" method="post">
                <h2>Cadastro de Produtos</h2>
                <label>
                    <strong>Nome:</strong><br>
                    <input type="text" name="nome" required /><br><br/>
                </label>
                <label>
                    <strong>Descrição:</strong><br>
                    <input type="text" name="descricao" required /><br><br>
                </label>
                <label>
                    <strong>Quantidade:</strong><br>
                    <input type="text" name="qtde" required /><br><br>
                </label>
                <label>
                    <strong>Preço:</strong><br>
                    <input type="text" name="valor" required /><br><br>
                </label>
                <label>
                    <strong>Cod. Fornecedor:</strong><br>
                    <input type="text" name="cod_fornecedor" required /><br><br>
                </label>
                <input type="submit" name="button" id="button" value="Enviar" />
                <a href='cad_pesq_produtos_front.php' class="btnVoltar">Voltar</a><br><br>
            </form>
        </center>
    </div>

    <script src="../utils/script.js"></script>

</body>

</html>