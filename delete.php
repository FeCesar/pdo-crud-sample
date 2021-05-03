<?php

    ID_FUNCIONARIO = 2;

    try{
        
        # Inicia a conexão com o banco de dados
        $conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

        # Cria a Query SQL com a criação de uma variável -> :id
        $stmt = $conn->prepare("DELETE FROM funcionario WHERE id = :id");

        # Defino a variável :id
        $stmt->bindParam(':id', ID_FUNCIONARIO);

        # Executo a Query
        $stmt->execute();

    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>