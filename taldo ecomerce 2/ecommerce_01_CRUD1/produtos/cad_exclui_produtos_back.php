<?php
    include "../utils/conexao.php"; 

    $id_produto = $_POST['id_produto'];
    
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime('now', $timezone);
    $data_excluido = $agora->format('Y-m-d H:i:s');

    $sql="UPDATE produtos SET excluido=true, data_excluido='$data_excluido' WHERE id_produto = $id_produto";

    $resultado=pg_query($conecta,$sql);
    $qnt=pg_affected_rows($resultado);

    if ($qnt > 0 )
        echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
    else
        echo "<script type='text/javascript'>alert('Erro na exclusão !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";
?>
