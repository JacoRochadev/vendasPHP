--trigger para pegar a data da venda
ALTER TABLE vendas ADD COLUMN  data_venda timestamp without time zone;
CREATE FUNCTION data_venda_atual()
RETURNS TRIGGER AS $$
BEGIN
	new.data_venda = now();
	RETURN NEW;
END;

$$ language 'plpgsql';

CREATE TRIGGER data_venda_realizada
BEFORE INSERT
ON vendas
FOR EACH ROW
EXECUTE PROCEDURE data_venda_atual();


--trigger para quando insere um item na venda
CREATE FUNCTION add_itens_venda()
RETURNS TRIGGER AS $$
BEGIN
	UPDATE vendas SET valorTotal = valorTotal + (NEW.quantidade * NEW.valorUnitario) WHERE idVenda = NEW.idVenda;
	UPDATE produtos SET quantidade = quantidade - NEW.quantidade WHERE idProduto = NEW.idProduto;
END;

$$ language 'plpgsql';

CREATE TRIGGER realizando_venda
AFTER INSERT
ON itensvenda
FOR EACH ROW
EXECUTE PROCEDURE add_itens_venda();