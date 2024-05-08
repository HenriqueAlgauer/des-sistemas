<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', 'hhma2005');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("INSERT INTO teste.seila (nome, estadoCivil, cpf, profissao) VALUES ('José da silva', 'Casado', 12399988871, 'Pedreiro')");

    $sqlQuery = $pdo->prepare("INSERT INTO teste.seila (nome, estadoCivil, cpf, profissao) VALUES ('José da silva', 'Casado', 12399988871, 'Pedreiro')");
    $sqlQuery->execute();
    
}catch(PDOException $erro){
    echo "ERRO => " . $erro->getMessage();
}
?>