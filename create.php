<?php

    try{

        # Inicia a Conexão com o Banco de Dados
        $conn = new PDO('mysql:host=localhost;dbname=teste;', 'root', '');

        # Cria a Query SQL com a criação de variáveis -> :nome / :idade / :email
        $stmt = $conn->prepare("INSERT INTO funcionario(nome, idade, email) VALUES(:nome, :idade, :email)");

        # Executa a Query SQL passando uma lista preenchendo as variáveis
        $stmt->execute(array(
            'nome' => "Felipe Cesar Sepulvida Rampazzo",
            'idade' => 18,
            'email' => "ff.cc.ss.rr@gmail.com"
        ));

    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }


?>