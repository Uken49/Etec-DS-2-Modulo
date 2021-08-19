<?php
    header("Location: ExercicioComCookie.php");
    
    $categoria=$_POST['slcCategoria'];

    setcookie('categoriaCookie',$categoria, time()+180) //3 minutos

?>