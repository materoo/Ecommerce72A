<?php

    $stringdeconexao = "host=pgsql.projetoscti.com.br
                        port=5432
                        dbname=projetoscti11
                        user=projetoscti11
                        password=7twobox";

    $conecta = pg_connect($stringdeconexao);
    
    if (!$conecta) {
        echo '<script language="javascript">';
        echo "alert('Não foi possível estabelecer conexão com o banco de dados!')";
        echo '</script>';	
        
        exit;
    }
?>