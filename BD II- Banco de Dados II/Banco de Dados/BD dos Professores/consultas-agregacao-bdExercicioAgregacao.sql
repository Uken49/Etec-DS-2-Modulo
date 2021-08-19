USE bdExercicioAgregacao

--1)	a soma de todos os códigos dos funcionários
SELECT SUM(codDadosFunc) AS 'Soma cód Func.' FROM tbDadosFunc

--2)	a soma de todas as idades dos funcionários
--3)	a soma de todos os filhos dos funcionários
--4)	a soma de todos os salários dos funcionários 
--5)	a soma do tempo de empresa de todos os funcionários
--6)	a soma do tempo no cargo de todos os funcionários
--7)	apresente o maior código
--8)	apresente o menor código
--9)	apresente a maior idade
--10)	apresente a menor idade 
--11)	apresente a maior quantidade de filhos
--12)	apresente a menor quantidade de filhos
--13)	apresente o maior salário
--14)	apresente o menor salário
--15)	apresente o maior tempo de empresa 
--16)	apresente o menor tempo de empresa
--17)	apresente o maior tempo no cargo
SELECT MAX(tempoCargo) FROM tbFunc

--18)	apresente o menor tempo no cargo
--19)	a média de todos os códigos dos funcionários
--20)	a média da idade dos funcionários
--21)	a média de filhos dos funcionários
--22)	a média dos salários dos funcionários
SELECT AVG(salario) AS 'Média salários' FROM tbFunc

--23)	a média de tempo na empresa dos funcionários
--24)	a média de tempo no cargo dos funcionários
--25)	apresente a quantidade de funcionários que ganham mais de 800 reais
--26)	Apresente a quantidade de funcionários que ganham mais de 1000 reais
--27)	apresente a quantidade de funcionários que ganham menos que 400 reais
--28)	apresente a quantidade de funcionários que ganham menos de 2000 reais
SELECT COUNT(codFunc) FROM tbFunc
WHERE salario < 2000

--29)	apresente a quantidade de funcionários que ganham mais de 8000 reais 
--30)	apresente a quantidade de funcionários que ganham menos de 1000 reais
--31)	apresente a quantidade de funcionários que tenham tempo no cargo igual a 1
--32)	apresente a quantidade de funcionários que tenham tempo no cargo igual a 3
--33)	apresente a quantidade de funcionários que tenham tempo no cargo igual a 4
--34)	apresente a quantidade de funcionários que tenham tempo no cargo maior que 10
--35)	apresente a quantidade de funcionários que tenham idade superior a 20
--36)	apresente a quantidade de funcionários que tenham idade superior a 40
--37)	apresente a quantidade de funcionários que tenham idade inferior a 80
--38)	apresente a quantidade de funcionários que tenham idade inferior a 200
--39)	apresente a quantidade de gerentes da empresa
--40)	apresente a quantidade de analista da empresa
SELECT COUNT(codFunc) FROM tbFunc
WHERE cargo LIKE 'analista'

--41)	apresente a quantidade de designer da empresa
SELECT COUNT(codFunc) FROM tbFunc
WHERE cargo LIKE 'designer'

--42)	apresente a quantidade de programadores da empresa
--43)	apresente a somatória dos salários dos analistas da empresa
--44)	apresente a somatória dos salários dos gerentes da empresa
--45)	apresente o total de funcionários que nasceram em São Paulo
--46)	apresente o total de funcionários que nasceram na Bahia
--47)	apresente o total de funcionários que nasceram no Ceará
--48)	apresente o total de funcionários que nasceram no Rio de Janeiro
--49)	apresente o total de funcionários da empresa, exceto os que nasceram no Rio Janeiro
--50)	apresente a quantidade de funcionários sindicalizados ( 1 )
SELECT COUNT(codFunc) FROM tbFunc
WHERE sindicalizado = 1

--51)	apresente a quantidade de funcionários não sindicalizados ( 0 )


--Consultas com group by e order by

--52)	apresente a quantidade de funcionários por cargo em ordem alfabética
SELECT COUNT(codFunc), cargo FROM tbFunc
GROUP BY cargo
ORDER BY cargo

--53)	apresente a quantidade de funcionários agrupados pelo número de filhos
--54)	apresente a quantidade de funcionários agrupados pela idade em ordem decrescente
--55)	apresente o total de funcionários agrupados pelo estado de nascimento em ordem alfabética
SELECT COUNT(codDadosFunc), uf FROM  tbDadosFunc
GROUP BY uf
ORDER BY uf

--56)	apresente o total de funcionários agrupados pela opção de sindicalizado 
--57)	apresente a lista de todos os funcionários com cargo e salário em ordem do maior pra o menor salário
--58)	apresente a lista de funcionários com o cargo, o tempo no cargo e o tempo na empresa
--ordenando o resultado do funcionário mais antigo na empresa para o mais novo
SELECT cargo, tempoCargo, tempoEmpresa from TBfUNC
ORDER BY tempoEmpresa DESC

--59)	apresente a lista de funcionários com o cargo, o tempo no cargo e o tempo na empresa ordenando o resultado do funcionário mais antigo no cargo para o mais novo, no cargo de Analista
--60)	apresente a lista de funcionários com o cargo, o tempo no cargo e o tempo na empresa ordenando o resultado do funcionário mais antigo na empresa para o mais novo dos funcionários que são sindicalizados
