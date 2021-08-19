<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if(($login == 'adm') && ($senha == '123')){ //Caso o login e a senha esteja correto
        session_start();
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: area-restrita/index-area-restrita.php");
    }
    else{ //Caso o login esteja errado
        header("Location: index.php");
    }

?>