<?php
    include "../utils/conexao.php"; 

    //dados enviados do script altera_prod_lista.php
    $id_produto=$_POST["id_produto"];
    $nome=$_POST["nome"];
    $descricao=$_POST["descricao"];
    $qtde=$_POST["qtde"];
    $valor=$_POST["valor"];
    $cod_fornecedor=$_POST["cod_fornecedor"];

    $sql="UPDATE produtos 
             SET nome = '$nome',
                descricao = '$descricao',
                qtde = $qtde,
                valor = '$valor', 
                cod_fornecedor = $cod_fornecedor 
           WHERE id_produto = $id_produto;";
    
    $resultado=pg_query($conecta,$sql);
    $qtn=pg_affected_rows($resultado);

    if ($qtn > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>