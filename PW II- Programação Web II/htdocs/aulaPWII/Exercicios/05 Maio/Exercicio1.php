<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
        <h2 align="center">Exercicio 1 - Entrada de dados pessoais</h1>
        <form action="RecebimentoDados1.php" method="post">
            <label for="Nome">Nome: </label>
            <input type="text" id="txtNome" name="txtNome" placeholder="Eduardo Batista dos Santos" required>
            <br>
            <label for="Cpf">Cpf: </label>
            <input type="text" id="txtCpf" name="txtCpf" placeholder="111.222.333-96" required> 
            <br>
            <label for="DataNact">Data de Nascimento</label>
            <input type="date" id="dateDataNasct" name="dateDataNasct" required>
            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Apagar">
        </form>
    </body>
</html>