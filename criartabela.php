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
          $conexao = new PDO("mysql:host=$servidor; dbname=$db", $usuario, $senha);
          $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $sql = "CREATE TABLE livros(
                        id int AUTO_INCREMENT,
                        nome VARCHAR(30) not null,
                        autor varchar(30)not null,
                        editora varchar (50),
                        PRIMARY KEY(id)
                        )";

          $conexao-> exec($sql);
          echo"Tabela criada com sucesso";

      } 
          catch (PDOException $e) {
            echo("Não foi possivel criar a tabela!") . $e->getMessage();
      }

      $conexao = null;
      
    ?>

</body>
</html>