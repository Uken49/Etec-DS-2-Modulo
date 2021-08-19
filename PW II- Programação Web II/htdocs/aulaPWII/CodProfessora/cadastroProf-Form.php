<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Professores - Vacina</title>
    </head>
    <body>
        <h1>Cadastro de professores para vacinação</h1>
        <form name="cad-prof" method="post" action="cadastroProf-Dados.php?codfase=3">
            <label>Nome:</label>
            <input type="text" name="txtNome" id="txtNome">
            <br>
            <label>Cpf:</label>
            <input type="text" name="txtCpf" id="txtCpf">
            <br>
            <label>Data de nascto.:</label>
            <input type="date" name="txtDtNascto" id="txtDtNascto">
            <br>
            <label>Selecione a escola sede:</label>
            <select name="escolas" id="escolas">
                <option value="125">E.E. Ernestina Del Buono Trama</option>
                <option value="135">E.E. Rocca Dordal</option>
                <option value="145">E.E. Zipora Rubisntein</option>
                <option value="155">E.E. Paulo Sarasate</option> 
            </select>
            <br>
            <input type="submit" value="Cadastrar">
       </form> 

    </body>
</html>