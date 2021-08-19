USE bdOficinaMecanica

SELECT * FROM tbServico

UPDATE tbServico
SET valorServico = 99.90
WHERE idServico = 2

UPDATE tbServico
SET descServico = 'Cambagem'
WHERE idServico = 2

UPDATE tbServico
SET descServico = 'Troca de óleo', valorServico = 109.90
WHERE idServico = 2

SELECT * FROM tbVeiculo

UPDATE tbVeiculo
SET idModelo = 1
WHERE idVeiculo = 1

INSERT INTO tbServico(descServico, valorServico)
VALUES ('Cambagem', 99.90)

SELECT * FROM tbservico

DELETE FROM tbServico
WHERE idServico = 3

SELECT * FROM tbItemOrcamento

DELETE FROM tbItemOrcamento
WHERE idItemOrcamento = 2