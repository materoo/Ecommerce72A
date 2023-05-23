<?php
    include "../utils/conexao.php"; 

    //dados enviados do script altera_prod_lista.php
    $id_usuario=$_POST["id_usuario"];
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $telefone=$_POST["telefone"];

    $sql="UPDATE usuarios 
             SET nome = '$nome',
                email = '$email',
                senha = '$senha',
                telefone = $telefone
           WHERE id_usuario = $id_usuario;";
    
    $resultado=pg_query($conecta,$sql);
    $qtn=pg_affected_rows($resultado);

    if ($qtn > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_usuario_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>