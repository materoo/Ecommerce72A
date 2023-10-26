<?php
    include "../utils/conexao.php"; 

    $sql="SELECT * FROM usuarios WHERE excluido='n' ORDER BY id_usuario;";
    
    $resultado= pg_query($conecta, $sql);
    $qnt=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qnt > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }
 
    pg_close($conecta);
?>