<?php

    try{
        $conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
        $stmt = $conn->query("SELECT * FROM funcionario");
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "ID: {$row['id']}<br> NOME: {$row['nome']}<br> IDADE: {$row['idade']}<br> E-MAIL: {$row['email']}<br><br>";
        }

    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>