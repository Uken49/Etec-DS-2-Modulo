<?php
    $nome = $_POST['txtNome'];
    $sexo = $_POST['txtSexo'];
    $turma = $_POST['turma'];
    $dtNasc = $_POST['txtDtNasc'];
   
    switch ($turma) {
        case '1': //
            $nometurma="1o MTec DS";
            break;
        case '2':
            $nometurma="1o Modular DS";
            break;
        case '3':
            $nometurma="2o MTec DS - Vagas Remanescentes";
            break;
        case '4':
            $nometurma="2o Modular DS - Vagas Remanescentes";
            break;
    }
    switch ($sexo) {
        case '1': //Masculino
            echo("O aluno ".$nome." foi cadastrado na turma ".$nometurma." com sucesso!!");
            break;
        case '2': //Feminino
            echo("A aluna ".$nome." foi cadastrada na turma ".$nometurma." com sucesso!!");
            break;
    }

?>