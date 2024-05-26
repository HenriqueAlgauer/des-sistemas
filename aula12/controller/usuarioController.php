<?php 
require_once("../model/usuario.php");

class usuarioController{
    
    public function processa($acao){
        if($acao == "C"){ //CREATE 
            $novoUsuario = new Usuario();
            
            $novoUsuario->setNome($_POST['nome']);
            $novoUsuario->setEstadoCivil($_POST['estadoCivil']);
            $novoUsuario->setCpf($_POST['cpf']);
            $novoUsuario->setDataNascimento($_POST['dataNascimento']);
            $novoUsuario->setEstadoNascimento($_POST['estadoNascimento']);

            $novoUsuario->cadastrarUsuario();
        }
    }

    
}
?>