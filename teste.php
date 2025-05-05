<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula de PDO</title>
</head>
<body>
    <?php
        require_once "config.php"; 
        try {
            $conexao = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão realizada com sucesso!";
        }
        catch (PDOException $e) {
            echo "Não foi possível conectar <br>" . $e->getMessage();
        }
        $conexao = null; 
    ?>


</body>
</html>