<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Pesquisa de Produtos</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="../css/pesq_prod.css">
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
            <h2>Pesquisa de Usuarios</h2><br>
            <a href='cad_novo_usuario_front.php' class="novoProd">+ Novo Usuario</a><br><br>

            <?php
include "cad_pesq_usuario_back.php";

if ($qnt == 0) {
    echo "Usuario não encontrado!!!<br><br>";
    return;
}

// Começar tabela e criar o cabeçalho
echo "
<div class='table'>
    <div class='row'>
        <div class='cell cellCodigo cellHeader'>
            Cód. Usuario
        </div>
        <div class='cell cellCodigo cellHeader'>
            Nome
        </div>
        <div class='cell cellDescricao cellHeader'>
            Email
        </div>
        <div class='cell cellPreco cellHeader'>
            Senha
        </div>
        <div class='cell cellCodigo cellHeader'>
            Telefone
        </div>
        <div class='cell cellAcoes'>
            &nbsp;
        </div>
    </div>";

// Criar linhas com os dados dos produtos
foreach ($resultado_lista as $linha) {
    echo "
        <div class='row'>
            <div class='cell cellCodigo'>
                " . $linha['id_usuario'] . "
            </div>
            <div class='cell cellCodigo'>
            " . $linha['nome'] . "
            </div>
            <div class='cell cellDescricao'>
                " . $linha['email'] . "
            </div>
            <div class='cell cellPreco'>
                " . $linha['senha'] . "
            </div>
            <div class='cell cellPreco'>
                " . $linha['telefone'] . "
            </div>
            <div class='cell cellAcoes'>
                <a href='cad_altera_usuario_front.php?id_usuario=" . $linha['id_usuario'] . "'> Alterar</a>&nbsp;
                <a href='cad_exclui_usuario_front.php?id_usuario=" . $linha['id_usuario'] . "'> Excluir</a>&nbsp;
            </div>
        </div> ";
}
// Fechando a tag da tabela
echo "</div>";
?>
        </center>
    </div>

    <script src="../utils/script.js"></script>

</body>

</html>