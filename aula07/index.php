<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação formulario</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="nome" ><br>
        
        <label for="email">Email: </label>
        <input type="text" name="email" placeholder="email" ><br>
        
        <label for="assunto">Assunto: </label>
        <textarea type="text" name="assunto" placeholder="assunto" ></textarea><br>
        
        <label for="valor-custo">Valor custo: </label>
        <input type="text" name="valor-custo" data-mask="R$" placeholder="valor custo" ><br>
        
        <label for="valor-venda">Valor venda: </label>
        <input type="text" name="valor-venda" placeholder="valor venda" ><br>
        
        <label for="conteudo">Conteúdo: </label>
        <textarea type="text" name="conteudo" placeholder="Conteúdo" ></textarea><br>
    
        <button type="submit">Enviar</button>
    </form>

    <?php 
    
    if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['assunto']) || isset($_POST['valor-custo']) || isset($_POST['valor-venda']) || isset($_POST['conteudo'])){

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $assunto = $_POST["assunto"];
        $valorCusto = $_POST["valor-custo"];
        $valorVenda = $_POST["valor-venda"];
        $conteudo = $_POST["conteudo"];
        
        if($valorCusto > $valorVenda){
            echo "foi";
        }
    }else{
        echo "Preencha todos os campos";
    }

    ?>
</body>
</html>