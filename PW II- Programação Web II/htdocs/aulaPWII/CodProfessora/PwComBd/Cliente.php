<?php

class Cliente{
    private $idCliente;
    private $nomeCliente;
    private $emailCliente;
    private $idtipocliente;

    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }
    public function getEmailCliente(){
        return $this->emailCliente;
    }
    public function getIdTipoCliente(){
        return $this->idtipocliente;
    }
    public function setIdCliente($id){
        $this->idCliente = $id;
    }
    public function setNomeCliente($nome){
        $this->nomeCliente = $nome;
    }
    public function setEmailCliente($email){
        $this->emailCliente = $email;
    }
    public function setIdTipoCliente($idtipocliente){
        $this->idtipocliente = $idtipocliente;
    }

    // public function cadastrar($cliente){
    //     $conexao = Conexao::pegarConexao();// Conexao.pegarConexao()
    //     $queryInsert = "INSERT INTO tbCliente (nomecliente, emailcliente)
    //                     VALUES ('".$cliente->getNomeCliente()."',
    //                     '".$cliente->getEmailCliente()."')";
        
    //     $conexao->exec($queryInsert);
        
    //     return 'Cadastro realizado com sucesso';
    // }

    public function cadastrar($cliente){
        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("INSERT INTO tbcliente
                                     (nomecliente, emailcliente
                                     ,idtipocliente)
                                     VALUES(?,?,?)");
        $stmt->bindParam(1, $cliente->getNomeCliente());
        $stmt->bindParam(2, $cliente->getEmailCliente());
        $stmt->bindParam(3, $cliente->getIdTipoCliente());
        $stmt->execute();
        return 'Cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idcliente, 
        nomecliente, emailcliente, desctipocliente
        from tbcliente inner join tbtipocliente
        on tbcliente.idtipocliente = tbtipocliente.idtipocliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

}