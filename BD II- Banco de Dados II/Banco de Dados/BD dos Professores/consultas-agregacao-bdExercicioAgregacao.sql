USE bdExercicioAgregacao

--1)	a soma de todos os c�digos dos funcion�rios
SELECT SUM(codDadosFunc) AS 'Soma c�d Func.' FROM tbDadosFunc

--2)	a soma de todas as idades dos funcion�rios
--3)	a soma de todos os filhos dos funcion�rios
--4)	a soma de todos os sal�rios dos funcion�rios 
--5)	a soma do tempo de empresa de todos os funcion�rios
--6)	a soma do tempo no cargo de todos os funcion�rios
--7)	apresente o maior c�digo
--8)	apresente o menor c�digo
--9)	apresente a maior idade
--10)	apresente a menor idade 
--11)	apresente a maior quantidade de filhos
--12)	apresente a menor quantidade de filhos
--13)	apresente o maior sal�rio
--14)	apresente o menor sal�rio
--15)	apresente o maior tempo de empresa 
--16)	apresente o menor tempo de empresa
--17)	apresente o maior tempo no cargo
SELECT MAX(tempoCargo) FROM tbFunc

--18)	apresente o menor tempo no cargo
--19)	a m�dia de todos os c�digos dos funcion�rios
--20)	a m�dia da idade dos funcion�rios
--21)	a m�dia de filhos dos funcion�rios
--22)	a m�dia dos sal�rios dos funcion�rios
SELECT AVG(salario) AS 'M�dia sal�rios' FROM tbFunc

--23)	a m�dia de tempo na empresa dos funcion�rios
--24)	a m�dia de tempo no cargo dos funcion�rios
--25)	apresente a quantidade de funcion�rios que ganham mais de 800 reais
--26)	Apresente a quantidade de funcion�rios que ganham mais de 1000 reais
--27)	apresente a quantidade de funcion�rios que ganham menos que 400 reais
--28)	apresente a quantidade de funcion�rios que ganham menos de 2000 reais
SELECT COUNT(codFunc) FROM tbFunc
WHERE salario < 2000

--29)	apresente a quantidade de funcion�rios que ganham mais de 8000 reais 
--30)	apresente a quantidade de funcion�rios que ganham menos de 1000 reais
--31)	apresente a quantidade de funcion�rios que tenham tempo no cargo igual a 1
--32)	apresente a quantidade de funcion�rios que tenham tempo no cargo igual a 3
--33)	apresente a quantidade de funcion�rios que tenham tempo no cargo igual a 4
--34)	apresente a quantidade de funcion�rios que tenham tempo no cargo maior que 10
--35)	apresente a quantidade de funcion�rios que tenham idade superior a 20
--36)	apresente a quantidade de funcion�rios que tenham idade superior a 40
--37)	apresente a quantidade de funcion�rios que tenham idade inferior a 80
--38)	apresente a quantidade de funcion�rios que tenham idade inferior a 200
--39)	apresente a quantidade de gerentes da empresa
--40)	apresente a quantidade de analista da empresa
SELECT COUNT(codFunc) FROM tbFunc
WHERE cargo LIKE 'analista'

--41)	apresente a quantidade de designer da empresa
SELECT COUNT(codFunc) FROM tbFunc
WHERE cargo LIKE 'designer'

--42)	apresente a quantidade de programadores da empresa
--43)	apresente a somat�ria dos sal�rios dos analistas da empresa
--44)	apresente a somat�ria dos sal�rios dos gerentes da empresa
--45)	apresente o total de funcion�rios que nasceram em S�o Paulo
--46)	apresente o total de funcion�rios que nasceram na Bahia
--47)	apresente o total de funcion�rios que nasceram no Cear�
--48)	apresente o total de funcion�rios que nasceram no Rio de Janeiro
--49)	apresente o total de funcion�rios da empresa, exceto os que nasceram no Rio Janeiro
--50)	apresente a quantidade de funcion�rios sindicalizados ( 1 )
SELECT COUNT(codFunc) FROM tbFunc
WHERE sindicalizado = 1

--51)	apresente a quantidade de funcion�rios n�o sindicalizados ( 0 )


--Consultas com group by e order by

--52)	apresente a quantidade de funcion�rios por cargo em ordem alfab�tica
SELECT COUNT(codFunc), cargo FROM tbFunc
GROUP BY cargo
ORDER BY cargo

--53)	apresente a quantidade de funcion�rios agrupados pelo n�mero de filhos
--54)	apresente a quantidade de funcion�rios agrupados pela idade em ordem decrescente
--55)	apresente o total de funcion�rios agrupados pelo estado de nascimento em ordem alfab�tica
SELECT COUNT(codDadosFunc), uf FROM  tbDadosFunc
GROUP BY uf
ORDER BY uf

--56)	apresente o total de funcion�rios agrupados pela op��o de sindicalizado 
--57)	apresente a lista de todos os funcion�rios com cargo e sal�rio em ordem do maior pra o menor sal�rio
--58)	apresente a lista de funcion�rios com o cargo, o tempo no cargo e o tempo na empresa
--ordenando o resultado do funcion�rio mais antigo na empresa para o mais novo
SELECT cargo, tempoCargo, tempoEmpresa from TBfUNC
ORDER BY tempoEmpresa DESC

--59)	apresente a lista de funcion�rios com o cargo, o tempo no cargo e o tempo na empresa ordenando o resultado do funcion�rio mais antigo no cargo para o mais novo, no cargo de Analista
--60)	apresente a lista de funcion�rios com o cargo, o tempo no cargo e o tempo na empresa ordenando o resultado do funcion�rio mais antigo na empresa para o mais novo dos funcion�rios que s�o sindicalizados
