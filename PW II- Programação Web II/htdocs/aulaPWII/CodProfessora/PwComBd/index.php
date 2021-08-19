<html>
    <head>
        <title>Cadastre-se</title>
    </head>
    <body>
        <h1>Cadastro de Clientes</h1>
        <?php require_once 'global.php' ?>

        <?php
            try {
                $cliente = new Cliente();
                $tipocliente = new TipoCliente();

                $listacliente = $cliente->listar();
                $listaTipo = $tipocliente->listar();

            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>
        <form name="cadastro" method="post" 
        action="cadastrar-cliente.php">
            <label>Nome:</label>
            <input type="text" name="txtNome">
            <label>E-mail:</label>
            <input type="text" name="txtEmail">
            <br>
            <label>Tipo de Cliente: </label>
            <!-- COMBO BOX -->
            <select name='tipocliente'>
                <?php foreach ($listaTipo as $linha){ ?>
                    <option value= 
                        <?php echo $linha['idtipocliente'] ?> 
                    > 
                        <?php echo $linha['desctipocliente'] ?>
                    </option>
                <?php } ?>
            </select>

            <input type="submit" value="Cadastrar">         
        </form>
        
        <h1>Lista de Clientes Cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Tipo Cliente</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody id='resultado'>
                <?php foreach ($listacliente as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['idcliente'] ?></td>
                        <td><?php echo $linha['nomecliente'] ?></td>
                        <td><?php echo $linha['emailcliente'] ?></td>
                        <td><?php echo $linha['desctipocliente'] ?></td>
                        <td><a href="form-editar-cliente.php?id=<?php echo $linha['idcliente'] ?>">Editar</a></td>
                        <td><a href="excluir-cliente.php?id=<?php echo $linha['idcliente'] ?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/busca-aproximada.js"></script>
        <script src="js/pesquisa-cep.js"></script>







            <!-- <br>
            <label>CEP:</label>
            <input type="text" id="cep" size='8' onblur="pesquisacep(this.value);">
            <label>Rua:</label>
            <input type="text" id="rua" size='40'>
            <label>Número:</label>
            <input type="text" id="num" size='5'>
            <label>Complemento:</label>
            <input type="text" id="comp" size='10'>
            <br>
            <label>Bairro:</label>
            <input type="text" id="bairro" size='30'>
            <label>Cidade:</label>
            <input type="text" id="cidade" size='30'>
            <label>UF:</label>
            <input type="text" id="uf" size='4'>
            <br> -->



            <!-- <form action="buscar-cliente.php">
            <h3>Pesquisa...</h3>
            Buscar por: <input type="text" name="campoPesquisa" id="campoPesquisa">
        </form> -->




        <?php

            // //criando uma matriz para armazenar os dados no formato JSON
            // $jsonUsuario = "[";
            // foreach ($lista as $linha){
            //     if ($jsonUsuario != "[") {$jsonUsuario .= ",";}	
            //     $jsonUsuario .= '{"id":"' . $linha['idCliente']. '",';
            //     $jsonUsuario .= '"nome":"' . $linha['nomeCliente']. '",';
            //     $jsonUsuario .= '"email":"' . $linha['emailCliente']. '"}';
            // }            
            // $jsonUsuario = $jsonUsuario . "]";
            // echo("<pre>");
            // echo $jsonUsuario;
            // echo("</pre>");
        

            // //Ler os dados JSON
            // // Decodifica o formato JSON e retorna um Objeto
            // $jsonLer = json_decode($jsonUsuario);
            // foreach($jsonLer as $registro):
            //     echo "<br>";
            //     echo 'Id: ' . $registro->id . "\n".
            //          'Nome: ' . $registro->nome . 
            //         ' E-mail: ' . $registro->email .
            //         "<br>";
            // endforeach;
        ?>



    </body>
</html>