--Criando banco de dados
CREATE DATABASE bdCooperativaTaxi
--Usando/conectando ao banco de dados
USE bdCooperativaTaxi
--Criando tabelas no banco de dados
CREATE TABLE tbTaxista(
	idTaxista INT PRIMARY KEY IDENTITY(1,1)
	, nomeTaxista VARCHAR(120) NOT NULL
	, cpfTaxista VARCHAR(15) NOT NULL UNIQUE
	, rgTaxista VARCHAR(15) NOT NULL
	, dtNasctoTaxista SMALLDATETIME NOT NULL
	, cnhTaxista VARCHAR(18) NOT NULL UNIQUE
)

CREATE TABLE tbFoneTaxista(
	idFoneTaxista INT PRIMARY KEY IDENTITY(1,1)
	, numFone VARCHAR(15) NOT NULL
	, idTaxista INT FOREIGN KEY REFERENCES tbTaxista(idTaxista)
)
--Apagando tabelas no banco de dados
DROP TABLE tbFoneTaxista
DROP TABLE tbTaxista
--Apagando o banco de dados
DROP DATABASE bdCooperativaTaxi
