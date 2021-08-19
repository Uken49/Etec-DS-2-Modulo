USE bdOficinaMecanica

INSERT INTO tbCliente(nomeCliente, rgCliente)
VALUES ('Antonio Junior', '12.345.678-9') --1
	, ('Aline Mendonça', '23.456.789-0') --2

SELECT * FROM tbCliente

INSERT INTO tbCor(nomeCor)
VALUES ('Prata')--1
	, ('Preto')--2
	, ('Vermelho')--3

SELECT * FROM tbCor

INSERT INTO tbMarca(nomeMarca)
VALUES ('Toyota')--1
	, ('Ford')--2
	, ('Fiat')--3

SELECT * FROM tbMarca

INSERT INTO tbModelo(nomeModelo, idMarca)
VALUES ('Corolla', 1)--1
	, ('Ethios', 1)--2
	, ('Ka', 2)--3
	, ('Ranger', 2)--4
	, ('147', 3)--5
	, ('Palio Weekend', 3)--6

SELECT * FROM tbModelo

INSERT INTO tbVeiculo(placaVeiculo, kmVeiculo, chassiVeiculo, idCor, idModelo, idCliente)
VALUES ('ABC-1234', '10.000', '1234asbhay76', 1, 1, 2)--1
	, ('DEF-5678', '15.000', 'hagsyb14172bjhas', 2, 4, 1)--2
	, ('FGH-1287', '123.532', 'jhfasu1875436', 3, 5, 1)--3

SELECT * FROM tbVeiculo

INSERT INTO tbServico(descServico, valorServico)
VALUES ('Alinhamento', 199.90)--1
	, ('Troca de óleo', 119.95)--2

SELECT * FROM tbServico

--MM/DD/AAAA
--DD/MM/AAAA
INSERT INTO tbOrcamento(dataOrcamento, dataValidade, valorTotal, idVeiculo)
VALUES ('07/04/2021', '14/04/2021', 199.90, 3)--1
	, ('07/04/2021', '21/04/2021', 119.95, 1)--2

SELECT * FROM tbOrcamento

INSERT INTO tbItemOrcamento(subTotal, idOrcamento, idServico)
VALUES (199.90, 1, 1)
	, (119.95, 2, 2)

SELECT * FROM tbItemOrcamento