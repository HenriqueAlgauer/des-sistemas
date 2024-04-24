<?php 
    session_start();
    

    if(!isset($_POST['user'])){
        header('Location> login.php?erro=true');
        exit; //garante que se saia do arquivo e não tente executar mais nada
    }

    echo"<body style='background-color: Lightblue'>
    <h1>Clientes</h1>
    </body>
    "
?>