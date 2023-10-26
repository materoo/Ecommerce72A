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
            <form action="cad_exclui_usuario_back.php" method="post">
                <h2>Confirmação: Exclusão de Usuario</h2>
                <label>
                    Cod. Usuario<br>
                    <input type="text" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>" readonly><br>
                </label>
                <label>
                    Nome<br>
                    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" readonly><br>
                </label>
                <label>
                    Email<br>
                    <input type="email" name="email" value="<?php echo $linha['email']; ?>" readonly><br>
                </label>
                <label>
                    Senha<br>
                    <input type="text" name="senha" value="<?php echo $linha['senha']; ?>" readonly><br>
                </label>
                <label>
                    Telefone<br>
                    <input type="text" name="telefone" value="<?php echo $linha['teleone']; ?>" readonly><br>
                </label>
                <br>
                <input type="submit" value="Confirma exclusão">
                <input type="button" value="Editar"
                    onclick="location.href='cad_altera_usuario_front.php?id_usuario=<?php echo $id_usuario ?>';">
                <input type="button" value="Voltar" onclick="location.href='cad_pesq_usuario_front.php';">
            </form>
        </center>
    </div>

    <script src="../utils/script.js"></script>

</body>

</html>