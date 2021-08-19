<?php

class Reporter
{
    private $idReporter;
    private $nomeReporter;
    private $cpfReporter;
    private $emailReporter;

    public function getIdReporter(){
        return $this->idReporter;
    }
    public function setIdReporter($idRprt){
        $this->idReporter = $idRprt;
    }
    //----------------------------------

    public function getNomeReporter(){
        return $this->nomeReporter;
    }
    public function setNomeReporter($nome){
        $this->nomeReporter = $nome;
    }
    //----------------------------------
    public function getCpfReporter(){
        return $this->cpfReporter;
    }
    public function setCpfReporter($cpf){
        $this->cpfReporter = $cpf;
    }
    //----------------------------------
    public function getEmailReporter(){
        return $this->emailReporter;
    }
    public function setEmailReporter($email){
        $this->emailReporter = $email;
    }
    //----------------------------------

    public function cadastrar($reporter){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbReporter (nomeReporter, cpfReporter, emailReporter)
                                        VALUES(?,?,?)");

        $stmt->bindValue(1, $reporter->getNomeReporter());
        $stmt->bindValue(2, $reporter->getCpfReporter());
        $stmt->bindValue(3, $reporter->getEmailReporter());
        $stmt->execute();
        return 'Reporter cadastrado com sucesso!!';

    }

    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idReporter, nomeReporter, cpfReporter, emailReporter FROM tbreporter
                        ORDER BY idReporter";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
