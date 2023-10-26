<?php
    include "../utils/conexao.php"; 

    /* a variável id_produto deve já ter sido atribuída na página pai, antes do include
       para esse arquivo */
    $sql="SELECT * FROM produtos WHERE id_produto = $id_produto;";

    $resultado=pg_query($conecta,$sql);
    $qnt=pg_num_rows($resultado);

    if ( $qnt == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Produto não encontrado!')";
        echo '</script>';
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";
        exit;
    }

    $linha = pg_fetch_array($resultado);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>