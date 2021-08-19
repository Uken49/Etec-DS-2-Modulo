<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
    </head>

    <body>
        <h1 align="center">Cadastro</h1>
        <form style="margin-left: 2%; margin-top: 2%;" method="post" action="CadastroDeAluno-RecebimentoDeDados.php">

            <label for="Nome">Nome: </label>
            <input type="text" id="txtNome" name="txtNome" placeholder="Sebastião Antônio Nunes" required />
            <br>Sexo:
            <label for="Sexo">Masculino</label>
            <input type="radio" id="txtSexo" name="txtSexo" value="1" required>

            <label for="Sexo">Feminino</label>
            <input type="radio" id="txtSexo" name="txtSexo" value="2">

            <br>
            <label for="Data de Nascimento">Data de Nascimento:</label>
            <input type="date" id="dtNasc" name="txtDtNasc" value="txtDtNasc" required />

            <br></label>Turma:
            <select name="turma" id="turma" required>
                <option value="1">1o MTec DS</option>
                <option value="2">1o Modular DS</option>
                <option value="3">2o MTec DS - Vagas Remanescentes</option>
                <option value="4">2o Modular DS - Vagas Remanescentes</option>
            </select>
            <br><br>
            <input type="submit" name="enviarCadastro" value="Enviar">
            <input type="reset" name="resetarCadastro" value="Limpar">
    </form>
</body>

</html>