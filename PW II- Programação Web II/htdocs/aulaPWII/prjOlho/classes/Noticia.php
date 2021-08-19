<?php
class Noticia
{
    private $idNoticia;  //int PK
    private $tituloNoticia; //varchar
    private $subTituloNoticia; //varchar
    private $textoNoticia; //varchar
    private $dataPublicacaoNoticia; //date
    public $caminhoimagem; //Varchar
    public $nomeimagem; //Não armazenado no banco
    private $idCategoria; //int FK
    private $idReporter; //int FK
    private $idStatusNoticia; //int FK

    public function getIdNoticia()
    {
        return $this->idNoticia;
    }
    public function setIdNoticia($id)
    {
        $this->idNoticia = $id;
    }
    //----------------------------------
    public function getTituloNoticia()
    {
        return $this->tituloNoticia;
    }
    public function setTituloNoticia($tituloNt)
    {
        $this->tituloNoticia = $tituloNt;
    }
    //----------------------------------
    public function getSubTituloNoticia()
    {
        return $this->subTituloNoticia;
    }
    public function setSubTituloNoticia($subTituloNt)
    {
        $this->subTituloNoticia = $subTituloNt;
    }
    //----------------------------------
    public function getTextoNoticia()
    {
        return $this->textoNoticia;
    }
    public function setTextoNoticia($textoNt)
    {
        $this->textoNoticia = $textoNt;
    }
    //----------------------------------
    public function getDataPublicacaoNoticia()
    {
        return $this->dataPublicacaoNoticia;
    }
    public function setDataPublicacaoNoticia($dtPubliNoticia)
    {
        $this->dataPublicacaoNoticia = $dtPubliNoticia;
    }
    //----------------------------------
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
    public function setIdCategoria($idCtgr)
    {
        $this->idCategoria = $idCtgr;
    }
    //----------------------------------
    public function getIdStatusNoticia()
    {
        return $this->idStatusNoticia;
    }
    public function setIdStatusNoticia($idStatusNoticia)
    {
        $this->idStatusNoticia = $idStatusNoticia;
    }
    //----------------------------------
    public function getIdReporter()
    {
        return $this->idReporter;
    }
    public function setIdReporter($idRprt)
    {
        $this->idReporter = $idRprt;
    }
    //----------------------------------

    public function cadastrar($noticia)
    {
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("INSERT INTO tbnoticia (tituloNoticia, subTituloNoticia, textoNoticia
                                                          ,dataPublicacaoNoticia, fotoNoticia, idCategoria
                                                          ,idStatusNoticia, idReporter)
                                        VALUES(?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $noticia->getTituloNoticia());
        $stmt->bindValue(2, $noticia->getSubTituloNoticia());
        $stmt->bindValue(3, $noticia->getTextoNoticia());
        $stmt->bindValue(4, $noticia->getDataPublicacaoNoticia());
        $stmt->bindValue(5, $noticia->caminhoimagem);
        $stmt->bindValue(6, $noticia->getIdCategoria());
        $stmt->bindValue(7, $noticia->getIdStatusNoticia());
        $stmt->bindValue(8, $noticia->getIdReporter());
        $stmt->execute();
        return 'Noticia cadastrada com sucesso!!';
    }

    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idNoticia, tituloNoticia, subTituloNoticia, textoNoticia,
                                DATE_FORMAT(dataPublicacaoNoticia, '%d/%m/%y') AS dataPublicacaoNoticia, fotoNoticia
                                ,descCategoria,descStatusNoticia, nomeReporter FROM tbnoticia
                                INNER JOIN tbcategoria ON tbnoticia.idCategoria = tbcategoria.idCategoria
                                INNER JOIN tbstatusnoticia ON tbnoticia.idStatusNoticia = tbStatusNoticia.idStatusNoticia
                                INNER JOIN tbreporter ON tbnoticia.idReporter = tbreporter.idReporter
                                ORDER BY idNoticia";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
