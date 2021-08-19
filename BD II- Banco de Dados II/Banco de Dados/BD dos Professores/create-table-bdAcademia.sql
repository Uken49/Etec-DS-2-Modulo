CREATE DATABASE bdAcademia

USE bdAcademia

CREATE TABLE tbProfessor(
	idProfessor INT PRIMARY KEY IDENTITY(1,1)
	, nomeProfessor VARCHAR(120) NOT NULL 
)

CREATE TABLE tbFoneProfessor(
	idFoneProfessor INT PRIMARY KEY IDENTITY(1,1)
	, numFoneProfessor VARCHAR(15) NOT NULL
	, idProfessor INT FOREIGN KEY REFERENCES tbProfessor(idProfessor)
)

CREATE TABLE tbAluno(
	idAluno INT PRIMARY KEY IDENTITY(1,1)
	, nomeAluno VARCHAR(120) NOT NULL
	, rgAluno VARCHAR(15) NOT NULL
	, cpfAluno  VARCHAR(15) UNIQUE
)

CREATE TABLE tbFoneAluno(
	idFoneAluno INT PRIMARY KEY IDENTITY(1,1)
	, numFoneAluno VARCHAR(15) NOT NULL
	, idAluno INT FOREIGN KEY REFERENCES tbAluno(idAluno)
)

CREATE TABLE tbPlano(
	idPlano INT PRIMARY KEY IDENTITY(1,1)
	, tipoPlano VARCHAR(15) 
)

CREATE TABLE tbHorario(
	idHorario INT PRIMARY KEY IDENTITY(1,1)
	, descHorario VARCHAR(15) NOT NULL 
)

CREATE TABLE tbModalidade(
	idModalidade INT PRIMARY KEY IDENTITY(1,1)
	, nomeModalidade VARCHAR(30) NOT NULL
	, idProfessor INT FOREIGN KEY REFERENCES tbProfessor(idProfessor)
	, idHorario INT FOREIGN KEY REFERENCES tbHorario(idHorario)
)

CREATE TABLE tbMatricula(
	idMatricula INT PRIMARY KEY IDENTITY(1,1)
	, dataMatricula SMALLDATETIME NOT NULL
	, idAluno INT FOREIGN KEY REFERENCES tbAluno(idAluno)
	, idPlano INT FOREIGN KEY REFERENCES tbPlano(idPlano)
	, idModalidade INT FOREIGN KEY REFERENCES tbModalidade(idModalidade)
)

-- 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15
-- g i n á s t i c a (9) varchar
-- g i n á s t i c a                   (15) char