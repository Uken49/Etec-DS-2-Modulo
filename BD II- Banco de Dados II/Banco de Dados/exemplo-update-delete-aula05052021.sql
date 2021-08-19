USE bdLojaRoupas2

--1. Alterar o nome do fabricante Cia da Malha para Turma da Malha;
SELECT * FROM tbFabricante

UPDATE tbFabricante
SET nomeFabricante = 'Turma da Malha'
WHERE codFabricante = 1004 

--2. Alterar o valor das vendas do cliente de código 1, 
--concedendo ao mesmo 10% de desconto;
SELECT * FROM tbVenda

UPDATE tbVenda
SET totalVenda = totalVenda - (totalVenda * 10/100)
WHERE codCliente = 1

--3. Aumentar em 20% o preço dos produtos do fabricante de código 2;
SELECT * FROM tbProduto

UPDATE tbProduto
SET preçoProduto = preçoProduto + (preçoProduto * 0.2) -- 20/100
-- preçoProduto =                  preçoProduto * 1.2  -- 100/100 = 1
WHERE codFabricante = 2

--4. Diminuir em 10 unidades a quantidade de estoque do produto de 
--código 3 do estoque;
SELECT * FROM tbProduto

UPDATE tbProduto
SET estoqueProduto = estoqueProduto - 10
WHERE codProduto = 3

--5. Remover o segundo item de venda da venda de código 2;
SELECT * FROM tbItensVenda

DELETE FROM tbItensVenda
WHERE codItensVenda = 1003

--6. Remover todos os itens da venda código 3;
SELECT * FROM tbItensVenda

DELETE FROM tbItensVenda
WHERE codVenda = 3

--7. Remover o fabricante de código 1. 
--Você conseguiu? O que aconteceu? Responder com comentário dentro do script.
SELECT * FROM tbFabricante
SELECT * FROM tbProduto

DELETE FROM tbFabricante
WHERE codfabricante = 1

--Não foi possível excluir este fabricante. este código de fabricante está 
--sendo utilizado como FK na tbProduto. INTEGRIDADE


/*
Na cláusula WHERE vc pode ter mais de uma condição.

AND (e &&) - todas as condições precisam ser verdade
OR (ou ||) - basta apenas uma verdade que ele executa

*/