<?php
    require_once ('global.php');

    //Tente executar
    try {
        header("Location: adm-cadastro-reporter.php");
        
        $reporter = new Reporter();
        $reporter ->setNomeReporter($_POST['txtnomeReporter']);
        $reporter ->setCpfReporter($_POST['cpfReporter']);
        $reporter ->setEmailReporter($_POST['emailreporter']);
        
        echo $reporter->cadastrar($reporter);
    }
    //Caso dê errado:
    catch(Exception $e){
        //Informar o erro
        echo '<pre>';
            print_r($e);
        echo '<pre>';
        //Outra forma de informar o erro
        echo $e->getMessage();
    }
?>