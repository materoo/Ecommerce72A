<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../img/72box.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="links">
            <img src="../img/72box.ico" height="50px" width="50px">
            <a href="../index.php" target="_parent" class="link">Home</a>
            <a href="../produtos/cad_pesq_produtos_front.php" target="_parent" class="link">Produtos</a>
            <a href="cad_pesq_usuario_front.php" target="_parent" class="link">Usuários</a>
            <a href="../venda/selecao_produtos_front.php" target="_parent" class="link">Nossos produtos</a>
            <a href="#">Desenvolvedores</a>
        </div>
        <div class="icons">
            <img src="../img/dark_mode.png" alt="Lampada" onclick="darkMode(), trocar2()" class="lampada" id="img"
                height="50px">
            <a href="../carrinho/carrinho_front.php"><img src="../img/carrinho.png" alt="Carrinho"></a>
            <a href="login.php"><img src="../img/perfil.png" alt="Perfil"></a>
        </div>
    </header>
    <div class="login-box">
        <h2>Login</h2>
        <form action="#" method="#">
            <div class="user-box">
                <input type="text" name="nome" required>
                <label>nome</label>
            </div>
            <div class="user-box">
                <input type="password" name="senha" required>
                <label>Senha</label>
            </div>
            <p>Ainda não tem uma conta? <a href="cad_novo_usuario_front.php" class="criar-conta">Criar conta</a></p>
            <input type="submit" value="ENVIAR">
            <input type="reset" value="VOLTAR" class="voltar" onclick="history.back()">
        </form>
    </div>
    <script src="../utils/script.js"></script>
</body>

</html>