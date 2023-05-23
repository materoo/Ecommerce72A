<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Alteração de Produtos</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/formulario.css">
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

    <div class="corpo">
        <center>
            <?php
                $id_usuario = $_GET["id_usuario"];
                include "cad_getinfo_usuario_back.php";
            ?>
            <form action="cad_altera_usuario_back.php" method="post">
                <h2>Alteração de Usuarios</h2>
                <label>
                    Código do usuario <br>
                    <input type="text" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>" readonly><br>
                </label>
                <label>
                    Nome<br>
                    <input type="text" name="nome" maxlength=20 value="<?php echo $linha['nome']; ?>"><br>
                </label>
                <label>
                    E-mail<br>
                    <input type="email" name="email" value="<?php echo $linha['email']; ?>"><br>
                </label>
                <label>
                    Senha<br>
                    <input type="text" name="senha" maxlength=15 value="<?php echo $linha['senha']; ?>"><br>
                </label>
                <label>
                    Telefone<br>
                    <input type="text" name="telefone" maxlength=11 value="<?php echo $linha['telefone']; ?>"><br>
                </label>
                <br>
                <input type="submit" value="Gravar">
                <input type="reset" value="Voltar" onclick="history.back()">
            </form>
        </center>
    </div>

    <script src="../utils/script.js"></script>

</body>

</html>