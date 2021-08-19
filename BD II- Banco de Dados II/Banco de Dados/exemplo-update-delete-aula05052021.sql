USE bdLojaRoupas2

--1. Alterar o nome do fabricante Cia da Malha para Turma da Malha;
SELECT * FROM tbFabricante

UPDATE tbFabricante
SET nomeFabricante = 'Turma da Malha'
WHERE codFabricante = 1004 

--2. Alterar o valor das vendas do cliente de c�digo 1, 
--concedendo ao mesmo 10% de desconto;
SELECT * FROM tbVenda

UPDATE tbVenda
SET totalVenda = totalVenda - (totalVenda * 10/100)
WHERE codCliente = 1

--3. Aumentar em 20% o pre�o dos produtos do fabricante de c�digo 2;
SELECT * FROM tbProduto

UPDATE tbProduto
SET pre�oProduto = pre�oProduto + (pre�oProduto * 0.2) -- 20/100
-- pre�oProduto =                  pre�oProduto * 1.2  -- 100/100 = 1
WHERE codFabricante = 2

--4. Diminuir em 10 unidades a quantidade de estoque do produto de 
--c�digo 3 do estoque;
SELECT * FROM tbProduto

UPDATE tbProduto
SET estoqueProduto = estoqueProduto - 10
WHERE codProduto = 3

--5. Remover o segundo item de venda da venda de c�digo 2;
SELECT * FROM tbItensVenda

DELETE FROM tbItensVenda
WHERE codItensVenda = 1003

--6. Remover todos os itens da venda c�digo 3;
SELECT * FROM tbItensVenda

DELETE FROM tbItensVenda
WHERE codVenda = 3

--7. Remover o fabricante de c�digo 1. 
--Voc� conseguiu? O que aconteceu? Responder com coment�rio dentro do script.
SELECT * FROM tbFabricante
SELECT * FROM tbProduto

DELETE FROM tbFabricante
WHERE codfabricante = 1

--N�o foi poss�vel excluir este fabricante. este c�digo de fabricante est� 
--sendo utilizado como FK na tbProduto. INTEGRIDADE


/*
Na cl�usula WHERE vc pode ter mais de uma condi��o.

AND (e &&) - todas as condi��es precisam ser verdade
OR (ou ||) - basta apenas uma verdade que ele executa

*/