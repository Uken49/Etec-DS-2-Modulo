USE bdEstoque

SELECT * FROM tbProduto 

SELECT descricaoProduto, valorProduto
	FROM tbProduto
		WHERE codFabricante IN (1, 2)
		--WHERE codFabricante = 1 OR codFabricante = 2

SELECT descricaoProduto, valorProduto
	FROM tbProduto
		WHERE codFabricante NOT IN (1, 2)

SELECT descricaoProduto, valorProduto
	FROM tbProduto
		WHERE valorProduto NOT BETWEEN 5.50 AND 7.50

SELECT * FROM tbVenda

SELECT dataVenda, valorTotalVenda
	FROM tbVenda
		WHERE datavenda BETWEEN '01/02/2014' AND '28/02/2014'

SELECT descricaoProduto
	FROM tbProduto
		WHERE descricaoProduto LIKE 'A%'


SELECT descricaoProduto
	FROM tbProduto
		WHERE descricaoProduto NOT LIKE 'A%'

SELECT valorTotalVenda, CONVERT(VARCHAR(10), dataVenda, 103) AS 'Data da Venda'
	FROM tbVenda
		--WHERE MONTH(dataVenda) = 2 AND YEAR(dataVenda) = 2014 
		WHERE DATEPART(MONTH, datavenda) = 2 AND DATEPART(YEAR, dataVenda) = 2014

--COUNT, SUM, AVG, MIN, MAX

--qUANTOS PRODUTOS DO FORNECEDOR DE CÓDIGO 1?
SELECT COUNT(codProduto) AS 'Qtde. Produtos Fornecedor 1'
	FROM tbProduto
		WHERE codFornecedor = 1

-- Para quantos clientes eu vendi?
SELECT COUNT(DISTINCT codCliente) AS 'Qtde clientes'
	FROM tbVenda
SELECT * FROM tbVenda

-- TOTAL DAS VENDAS DO CLIENTE 1
SELECT SUM(valorTotalvenda) AS 'Total Vendas Cliente 1'
	FROM tbVenda
		WHERE codCliente = 1

-- MEDIA DAS VENDAS DO CLIENTE 1
SELECT AVG(ValorTotalVenda) AS 'Média Vendas Cleinte 1'
	FROM tbVenda
		WHERE codCliente = 1

-- MAIOR VENDA
SELECT MAX(valorTotalVenda) AS 'Maior venda'
	FROM tbVenda

-- ÚLTIMA VENDA
SELECT MAX(dataVenda) AS 'Última Venda'
	FROM tbVenda

-- MENOR VENDA
SELECT MIN(valorTotalVenda) AS 'Maior venda'
	FROM tbVenda


-- PRIMEIRA VENDA
SELECT MIN(dataVenda) AS 'Última Venda'
	FROM tbVenda