<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humm</title>
</head>


<body>
    <h1>Cadastrar</h1>
    <form action="cadastrarUsuario" type="submit" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo">
        <br><br>
        <label for="estadoCivil">Estado Civil</label>
        <select name="estadoCivil" id="estadoCivil">
            <option value="opcao">Escolha uma opção</option>
            <option value="Casado">Casado</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Divorciado">Divorciado</option>
        </select>
        <br><br>

        <label for="dataNascimento">Data de Nascimento</label>
        <input type="text" name="dataNascimento" id="dataNascimento" placeholder="dd/mm/AAAA" maxlength="10">
        <br><br>

        <label for="estadoNascimento">Estado de Nascimento</label>
        <input type="text" name="estadoNascimento" id="estadoNascimento" placeholder="Estado" maxlength="10">
        <br><br>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="CPF">
        <br><br>
    </form>
</body>

</html>