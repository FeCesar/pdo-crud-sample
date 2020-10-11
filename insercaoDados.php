<?php

    try{

        $conn = new PDO('mysql:host=localhost;dbname=teste;', 'root', '');

        $stmt = $conn->prepare("INSERT INTO funcionario(nome, idade, email) VALUES(:nome, :idade, :email)");
        $stmt->execute(array(
            'nome' => "Felipe Cesar Sepulvida Rampazzo",
            'idade' => 17,
            'email' => "ff.cc.ss.rr@hotmail.com"
        ));

    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }


?>