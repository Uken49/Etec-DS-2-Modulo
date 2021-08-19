USE bdAcademia

-- VARCHAR: sempre inserir entre apóstrofes ''
-- PK não inserimos devido a ser IDENTIY, numerada automaticamente
-- VARCHAR atentar-se ao tamanho: Dados de cadeia ou binários seriam truncados.
-- FK ou INT não usar apóstrofe
-- FK insere o dado mas um que exista na tabela de origem
-- SMALLDATETIME ou DATETIME: insere sempre com apóstrofe ''
-- se sua versão for em inglês, usa o padrão de data americano MM/DD/AAAA      '03/24/2021'
-- se sua versão for em português, usa o padrão de data brasileiro DD/MM/AAAA  '24/03/2021'
-- '24/03/2021 15:05'
-- SMALLMONEY ou MONEY ou DECIMAL ou FLOAT: casas decimais usar ponto . 1523.10 não usa apóstrofe

INSERT INTO tbAluno (nomeAluno, rgAluno, cpfAluno)
VALUES ('Antonio Junior', '12.345.678-x', '111.222.333-94')
	, ('Vanessa Ferraz', '23.456.789-0', '111.111.111-13')

INSERT INTO tbAluno (nomeAluno, rgAluno, cpfAluno)
VALUES ('Aline Mendonça', '32.446.789-x', '222.222.222-23')

SELECT * FROM tbAluno

INSERT INTO tbPlano(tipoPlano)
VALUES ('Anual')
	, ('Semestral')

SELECT * FROM tbPlano

INSERT INTO tbHorario(descHorario)
VALUES ('segunda')
	, ('terça')

SELECT * FROM tbHorario

INSERT INTO tbProfessor(nomeProfessor)
VALUES ('Bruno')
	, ('Felipe')

SELECT * FROM tbProfessor

INSERT INTO tbModalidade(nomeModalidade, idProfessor, idHorario)
VALUES ('Jump', 1, 1)
	, ('Jump', 1, 2)

INSERT INTO tbModalidade(nomeModalidade, idProfessor, idHorario)
VALUES ('Natação', 2, 2)

INSERT INTO tbModalidade(nomeModalidade, idProfessor, idHorario)
VALUES ('Natação', 2, 1)

SELECT * FROM tbModalidade

INSERT INTO tbMatricula(dataMatricula, idAluno, idPlano, idModalidade)
VALUES ('24/03/2021', 2, 1, 1)

INSERT INTO tbMatricula(dataMatricula, idAluno, idPlano, idModalidade)
VALUES ('24/03/2021 15:10', 1, 1, 1)

SELECT * FROM tbMatricula