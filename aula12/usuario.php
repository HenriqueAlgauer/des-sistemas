<?php 

include_once("Model/conexao.php");

class Usuario{
    private $id;
    private $nome;
    private $estadoCivil;
    private $cpf;
    private $dataNascimento;
    private $estadoNascimento;

    public function cadastrarUsuario(){
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare("INSERT INTO teste.user (nome, estadoCivil, cpf, dataNascimento, estadoNascimento) VALUES  (:nome, :estadoCivil, :cpf, :dataNascimento, :estadoNascimento)");

            $sql->bindParam("nome", $nome);
            $sql->bindParam("estadoCivil", $estadoCivil);
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("dataNascimento", $dataNascimento);
            $sql->bindParam("estadoNascimento", $estadoNascimento);

            $nome=$this->nome;
            $cpf=$this->cpf;
            $estadoCivil=$this->$estadoCivil;
            $dataNascimento=$this->$dataNascimento;
            $estadoNascimento=$this->estadoNascimento;

            $sql->execute();
        
        }catch(PDOException $erro){
            echo "Cadastro falhou" . $erro->getMessage();
        }
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
    }
    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
    
    public function getEstadoNascimento(){
        return $this->estadoNascimento;
    }
    public function setEstadoNascimento($estadoNascimento){
        $this->estadoNascimento = $estadoNascimento;
    }
}

?>