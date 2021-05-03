<?php

    $idade = 18;
    $id = 5;

    try{

        $conn = new PDO('mysql:host=localhost;dbname=teste;', 'root', '');

        $stmt = $conn->prepare("UPDATE funcionario SET idade = :idade WHERE id = :id");
        $stmt->execute(array(
            'idade' => $idade,
            'id' => $id
        ));

    } catch(Exception $e){
        echo "Error " . $e.getMessage();
    }

?>