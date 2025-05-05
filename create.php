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

        $sql = "INSERT INTO livros VALUES 
        (default,'O Caçador de Pipas', 'Khaled Hosseini', 'Nova Fronteira'),
        (default,'Fortaleza Digital', 'Dan Brown', 'Arqueiro'),
        (default,'A Culpa é das Estrelas', 'John Green', 'Intrínseca'),
        (default,'Vidas Secas', 'Graciliano Ramos', 'Record'),
        (default,'Morte e Vida Severina', 'Jorge Amado', 'Alfaguara'),
        (default,'A Hora da Estrela', 'Clarice Lispector', 'Rocco'),
        (default,'Leite Derramado', 'Chico Buarque', 'Companhia das Letras'),
        (default,'O Astronauta Sem Regime', 'Jô Soares', 'L&PM')";

        $conexao->exec($sql);
        echo "Dados inseridos com Sucesso!
        <br><hr><a href='read.php'>Listar Dados</a>";
    } 
    catch (PDOException $e) {
        echo "Não foi possível inserir os Dados.<br>" . $e->getMessage();
    }

    $conexao = null;

    ?>
</body>

</html>







