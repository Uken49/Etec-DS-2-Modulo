CREATE DATABASE bdOficinaMecanica

USE bdOficinaMecanica

CREATE TABLE tbCliente(
	idCliente INT PRIMARY KEY IDENTITY(1,1) 
	, nomeCliente VARCHAR(45) NOT NULL
	, rgCliente VARCHAR(15) NOT NULL
)

CREATE TABLE tbFoneCliente(
	idFoneCliente INT PRIMARY KEY IDENTITY(1,1)
	, numFoneCliente VARCHAR(15) NOT NULL
	, idCliente INT FOREIGN KEY REFERENCES tbCliente(idCliente)
)

CREATE TABLE tbCor(
	idCor INT PRIMARY KEY IDENTITY(1,1)
	, nomeCor VARCHAR(15) NOT NULL
)

CREATE TABLE tbServico(
	idServico INT PRIMARY KEY IDENTITY(1,1)
	, descServico VARCHAR(20) NOT NULL
	, valorServico SMALLMONEY NOT NULL
)

CREATE TABLE tbMarca(
	idMarca INT PRIMARY KEY IDENTITY(1,1)
	, nomeMarca VARCHAR(25) NOT NULL
)

CREATE TABLE tbModelo(
	idModelo INT PRIMARY KEY IDENTITY(1,1)
	, nomeModelo VARCHAR(20) NOT NULL
	, idMarca INT FOREIGN KEY REFERENCES tbMarca(idMarca)
)

CREATE TABLE tbVeiculo(
	idVeiculo INT PRIMARY KEY IDENTITY(1,1)
	, placaVeiculo VARCHAR(8) NOT NULL
	, kmVeiculo VARCHAR(9) NOT NULL
	, chassiVeiculo VARCHAR(20) NOT NULL
	, idCor INT FOREIGN KEY REFERENCES tbCor(idCor)
	, idCliente INT FOREIGN KEY REFERENCES tbCliente(idCliente)
	, idModelo INT FOREIGN KEY REFERENCES tbModelo(idModelo)
)

CREATE TABLE tbOrcamento(
	idOrcamento INT PRIMARY KEY IDENTITY(1,1)
	, dataOrcamento SMALLDATETIME NOT NULL
	, dataValidade SMALLDATETIME NOT NULL
	, valorTotal SMALLMONEY NOT NULL
	, idVeiculo INT FOREIGN KEY REFERENCES tbVeiculo(idVeiculo)
)

CREATE TABLE tbOrdemServico(
	idOrdemServico INT PRIMARY KEY IDENTITY(1,1)
	, dataInicio SMALLDATETIME NOT NULL
	, dataFinal SMALLDATETIME NOT NULL
	, idOrcamento INT FOREIGN KEY REFERENCES tbOrcamento(idOrcamento)
)

CREATE TABLE tbItemOrcamento(
	idItemOrcamento INT PRIMARY KEY IDENTITY(1,1)
	, subTotal SMALLMONEY NOT NULL
	, idOrcamento INT FOREIGN KEY REFERENCES tbOrcamento(idOrcamento)
	, idServico INT FOREIGN KEY REFERENCES tbServico(idServico)
)
