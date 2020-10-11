<?php

    $id = 6;

    try{
        $conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');

        $stmt = $conn->prepare("DELETE FROM funcionario WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

?>