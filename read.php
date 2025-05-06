<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula de PDO</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">  

</head>
<body>
    <?php

    require_once 'config.php';

    try {
    
        $conexao = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $conexao->query("SELECT * from livros");

        /* Tabela HTML */
        echo "<div style='width: 600px; margin: auto'>
                
                <p style='font-size:25px; font-weight: bold; margin-top: 10px'>
                Livraria ETEC</p>
                
                <table class='table table-striped table-sm' border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Editora</th>
                </tr>";

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            
        /* Tabela HTML */
            echo "<tr> 
                    <td>{$linha['id']}</td> 
                    <td>{$linha['nome']}</td> 
                    <td>{$linha['autor']}</td> 
                    <td>{$linha['editora']}</td> 
                <tr>"; 

        
        
        } //Fim do while                
        
        echo "</table></div>";
                
    }
    catch (PDOException $e) {
        echo "Não foi possível selecionar os Dados.<br>" . $e->getMessage();
    }

    $conexao = null;
    
    ?>

</body>

</html>