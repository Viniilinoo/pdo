<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Aula PDO</title>
</head>

<body>

    <?php

        require_once "config.php";

      try {
          $conexao = new PDO("mysql:host=$servidor", $usuario, $senha);
          $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $conexao -> exec("CREATE DATABASE livraria");
          echo "Banco de dados criado com sucesso!";
      } 
          catch (PDOException $e) {
            echo "Não foi possivel criar o Banco de Dados!". $e->getMessage();
      }

      $conexao = null;

    ?>

</body>
</html>