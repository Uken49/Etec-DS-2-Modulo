<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

    <body>
        <form method="POST" action="valida-login.php">
            Login: <input type="text" name="txtlogin"> <!-- Colocando login -->
            Senha: <input type="password" name="txtsenha"> <!-- Colocando senha -->
            <input type="submit" value="Acessar"> <!-- Enviando os dados para valida-login.php -->
        </form>
        
    </body>
</html>