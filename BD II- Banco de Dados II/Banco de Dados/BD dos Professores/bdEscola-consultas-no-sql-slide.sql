USE bdEscola

--1) Listar o nome, rg e data de aniversário dos alunos nascidos em SP
SELECT nomeALuno, rgAluno, dataNascimentoAluno
	FROM tbAluno
	WHERE naturalidadeAluno LIKE 'SP'

--2) Listar o nome e o rg dos alunos com o nome começado com P
SELECT nomeAluno, rgAluno
	FROM tbAluno
	WHERE nomeAluno LIKE 'P%'

--3) Listar o nome dos cursos cuja carga horária seja superior a 2000 horas
SELECT nomeCurso
	FROM tbCurso
	WHERE cargahorariaCurso > 2000

--4) Listar o nome e o rg de todos os alunos que possuem o sobrenome Silva
SELECT nomeAluno, rgAluno
	FROM tbAluno
	WHERE nomeAluno LIKE '%Silva%'

--5) Listar o nome dos alunos e a data de nascimento que fazem aniversário em março
SELECT nomeAluno, dataNascimentoAluno
	FROM tbAluno
	--WHERE DATEPART(MONTH, dataNascimentoAluno) = 3
	WHERE MONTH(dataNascimentoAluno) = 3

--6) Listar o código dos alunos e a data de matrícula dos alunos matriculados
--em maio de qualquer ano
SELECT codAluno, dataMatricula
	FROM tbMatricula
	--WHERE DATEPART(MONTH, dataMatricula) = 5
	WHERE MONTH(dataMatricula) = 5

--7) Listar o código dos alunos matriculados no curso de inglês
--1º qual código do curso de inglês? 1
SELECT codCurso
	FROM tbCurso
	WHERE nomeCurso LIKE 'Inglês'
-- 2º quais turmas tem o curso de código 1? 1 e 2
SELECT codTurma
	FROM tbTurma
	WHERE codCurso = 1

SELECT codAluno
	FROM tbMatricula
	--WHERE codTurma = 1 OR codTurma = 2
	WHERE codTurma IN (1, 2)

--8) Listar o código dos alunos matriculados na turma 1AA
--1º qual o código da turma 1AA? 3
SELECT codTurma
	FROM tbTurma
	WHERE nomeTurma LIKE '1AA'

SELECT codAluno
	FROM tbMatricula
	WHERE codTurma = 3

--9) Listar todos os dados de todos os alunos
SELECT codAluno, nomeAluno, dataNascimentoAluno, rgAluno, naturalidadeAluno
	FROM tbAluno

--10) Listar todos os dados de todas as turmas
SELECT codTurma, nomeTurma, codCurso, horarioTurma
	FROM tbTurma