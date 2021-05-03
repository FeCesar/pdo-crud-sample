<?php

    IDADE = 18;
    ID = 5;

    try{

        # Inicia a Conexão com o Banco de Dados
        $conn = new PDO('mysql:host=localhost;dbname=teste;', 'root', '');

        # Cria a Query SQL com a criação de duas variáveis -> :idade / :id
        $stmt = $conn->prepare("UPDATE funcionario SET idade = :idade WHERE id = :id");

        # Executa a Query SQL passando uma lista preenchendo as variáveis
        $stmt->execute(array(
            'idade' => IDADE,
            'id' => ID
        ));

    } catch(Exception $e){
        echo "Error " . $e.getMessage();
    }

?>