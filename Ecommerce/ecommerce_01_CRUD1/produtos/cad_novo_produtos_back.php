<?php
    include "../utils/conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $qtde=$_POST['qtde'];
    $valor=$_POST['valor'];
    $cod_fornecedor=$_POST['cod_fornecedor'];
    $excluido='n';

    // Inserção
    $sql="INSERT INTO produtos(id_produto, nome, descricao, qtde, valor, cod_fornecedor, excluido)
          VALUES (
            DEFAULT,
            '$nome',
            '$descricao', 
            $qtde, 
            $valor,
            $cod_fornecedor,
            '$excluido');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);
    echo $sql;

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_produtos_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do produto!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>