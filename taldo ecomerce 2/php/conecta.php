<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Conecta com BD PostgreSQL</title>
</head>

<body>
    <?php
    //Conecta com o PostgreSQL
    $conecta = pg_connect("host=pgsql.projetoscti.com.br port=5432 dbname=projetoscti4 user=projetoscti4 password= cti123");
    if (!$conecta) {
        echo "Não foi possível estabelecer conexão com o banco de dados!<br><br>";
        exit;
    } else
        echo "Conexão estabelecida com o banco de dados!<br><br>";

    ?>
</body>

</html>