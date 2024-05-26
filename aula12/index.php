<?php 
    $url = strtoupper($_GET['url']);

    if($url == "CADASTRO"){
        require_once("view/cadastrar.php");
    }elseif($url=="CADASTROUSUARIO"){
        require_once("controller/usuarioController.php");
        $controle = new usuarioController();
        $controle->processa("C");
    }
?>