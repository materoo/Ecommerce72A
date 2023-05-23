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
        include "selecao_produtos_back.php";

        if ($qnt == 0) {
            echo "Não foi encontrado nenhum produto !!!<br><br>";
            return;
        }

        echo '<div style="display:grid; 
                          grid-template-columns: repeat(3,300px); 
                          grid-column-gap: 10px;
						  grid-row-gap: 10px;
                          width=1250px">';

        foreach ($resultado_lista as $linha)
        {
            $valor= number_format($linha['valor'], 2, ',', '.');

            echo "
            <div class='card'>
                <div>
                    <br>
                    <a href='selecao_detalhes_front.php?id=".$linha['id_produto']."'> 
                       <img src='../img/72box.ico' style='width:150px; height:100px' />
                    </a>
                </div>

                <div>
                    <div><p>".$linha['nome']."</p></div>
                    <div><p>".$linha['descricao']."</p></div>
                    <div>R$ ".$valor."</div>";

                    if ($linha['qtde']<=0)
                    {
                        echo "
                        <div><span style='color:red'>Produto esgotado</span></div>";
                    }
                    else
                    {
                        echo "
                        <div>".$linha['qtde']." em estoque</div>";
                    }
					
					echo "<a href='../carrinho/carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."'>Comprar</a>";

                echo "</div><br>";
            echo "</div>";
        }

        echo "</div>";

    ?>
    </div>
    <script src="../utils/script.js"></script>

</body>

</html>