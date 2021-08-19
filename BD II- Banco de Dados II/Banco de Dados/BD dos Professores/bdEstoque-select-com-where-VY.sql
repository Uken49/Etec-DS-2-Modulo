USE bdEstoque

SELECT codVenda, valorTotalVenda FROM tbVenda
WHERE valorTotalVenda >= 2000

SELECT codVenda, dataVenda FROM tbVenda
WHERE dataVenda >= '01/02/2014' AND dataVenda <= '28/02/2014'

SELECT descricaoProduto, codFabricante FROM tbProduto
WHERE codFabricante = 2 OR codFabricante = 3

SELECT descricaoProduto, codFabricante FROM tbProduto
WHERE codFabricante NOT IN (2, 3)

SELECT codVenda, dataVenda FROM tbVenda
WHERE dataVenda BETWEEN '01/02/2014' AND '28/02/2014'

SELECT codVenda, valorTotalVenda FROM tbVenda
WHERE valorTotalVenda NOT BETWEEN 3000 AND 5000

SELECT descricaoProduto FROM tbProduto
WHERE descricaoProduto NOT LIKE '%A'

SELECT codVenda, dataVenda FROM tbVenda
WHERE datepart(month, dataVenda) = 5
	AND datepart(year, dataVenda) = 2014





