<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Aula PDO</title>
</head>

<body>

    <?php
    
    require_once 'config.php';

    try {

        $conexao = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conexao->exec("DELETE from livros where autor = 'Chico Buarque'");

        echo "Exclusão realizada com sucesso";
    } 
    catch (PDOException $e) {
        echo "Não foi possível excluir os Dados.<br>" . $e->getMessage();
    }

    $conexao = null;

    ?>
</body>

</html>