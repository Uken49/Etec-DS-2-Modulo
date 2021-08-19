USE	bdEstoque

-- Funções de Agregação: COUNT, SUM, AVG, MAX, MIN

SELECT * FROM tbVenda
--CONTAR AS VENDAS DO CLIENTE 1
SELECT COUNT(codVenda) AS 'Qtde Vendas cleinte 1' FROM tbVenda
WHERE codCliente = 1
SELECT COUNT(codVenda) AS 'Qtde Vendas cleinte 1' FROM tbVenda
WHERE codCliente = 2
SELECT COUNT(codVenda) AS 'Qtde Vendas cleinte 1' FROM tbVenda
WHERE codCliente = 3
SELECT COUNT(codVenda) AS 'Qtde Vendas cleinte 1' FROM tbVenda
WHERE codCliente = 4
SELECT COUNT(codVenda) AS 'Qtde Vendas cleinte 1' FROM tbVenda
WHERE codCliente = 5
-- CONTAR AS VENDAS POR CLIENTE
SELECT codCliente, COUNT(codVenda) AS 'Qtde Vendas' FROM tbVenda
GROUP BY codCliente
--contar as vendas por cliente, mostrando apenas clientes de 1 a 2
SELECT codCliente, COUNT(codVenda) FROM tbVenda
WHERE codCliente IN (1, 2)
GROUP BY codCliente



--TOTAL DAS VENDAS DO CLIENTE 1
SELECT SUM(valorTotalVenda) AS 'Total vendas cliente 1' FROM tbVenda
WHERE codCliente = 1
-- total das vendas por cliente
SELECT codCliente, SUM(valorTotalVenda) FROM tbVenda
GROUP BY codCliente

-- MÉDIA DE GASTO POR VENDA DO CLIENTE 1
SELECT AVG(valorTotalVenda) AS 'Média valor vendas cliente 1' FROM tbVenda
WHERE codCliente = 1

-- MAIOR VENDA DO CLIENTE 1
SELECT MAX(valorTotalVenda) AS 'Maior vendas cliente 1' FROM tbVenda
WHERE codCliente = 1

-- MAIOR VENDA DE CADA CLIENTE
SELECT codCliente, MAX(valorTotalVenda) FROM tbVenda
GROUP BY codCliente

-- MENOR VENDA DO CLIENTE 1
SELECT MIN(valorTotalVenda) AS 'Menor vendas cliente 1' FROM tbVenda
WHERE codCliente = 1


--LISTAR CODCLIENTE E NOME DO CLIENTE EM ORDEM ALFABÉTICA
SELECT codCliente, nomeCliente FROM tbCliente
ORDER BY nomeCliente

--LISTAR CODCLIENTE E NOME DO CLIENTE EM ORDEM DECRESCENTE
SELECT codCliente, nomeCliente FROM tbCliente
ORDER BY nomeCliente DESC

-- LISTAR AS VENDAS DA MAIOR PARA A MENOR
SELECT codVenda, valorTotalVenda FROM tbVenda
ORDER BY valorTotalVenda DESC

-- LISTAR AS VENDAS DA MAIS ANTIGA PARA MAIS NOVA, das venda de fevereiro
SELECT codVenda, dataVenda FROM tbVenda
WHERE MONTH(dataVenda) = 2 AND YEAR(dataVenda) = 2014
ORDER BY dataVenda

--total das vendas por clientes no mês de fevereiro, da maior para menor
SELECT codCliente, SUM(valorTotalVenda) AS TotalVenda FROM tbVenda
WHERE datavenda BETWEEN '01/02/2014' AND '28/02/2014'
GROUP BY codCliente
ORDER BY TotalVenda DESC