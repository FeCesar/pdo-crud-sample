<?php

    try{

        # Inicia a Conexão Com o Banco de Dados
        $conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

        # Cria a Query SQL
        $stmt = $conn->query("SELECT * FROM funcionario");
        
        # Cria um Looping Mostrando os Dados do Banco até o fim dos Resgistros
        while($funcionario = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "ID: $funcionario['id'] <br>";
            echo "NOME: $funcionario['nome'] <br>"; 
            echo "IDADE: $funcionario['idade'] <br>";
            echo "E-MAIL: $funcionario['email'] <br>";
        }

    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>