<?php
require_once './../../Controller/ClientesController.php';
require_once './../../Controller/ProdutosController.php';
$clientes = new ClientesController();
$produtos = new ProdutosController();
?>

<label>Selecionar Cliente</label>
<select name="idCliente" class="form-select" id="idCliente" required>
    <option value="" selected disabled>Cliente</option>
    <?php
        foreach ($clientes->findAll() as $cliente) { ?>
            <option value="<?= $cliente->getIdCliente() ?>"><?= $cliente->getNome() ?></option> <?php
        }
    ?>
</select>

<label>Selecionar Produto</label>
<select name="idProduto" class="form-select" id="idProduto" required>
    <option value="" selected disabled>Produto</option>
        <?php
            foreach ($produtos->findAll() as $produto) { ?>
                <option value="<?= $produto->getId() ?>"><?= $produto->getNome() ?></option> <?php
            }
        ?>
</select>

<label for="valor" class="form-label">Valor: </label>
<input type="number" name="valor" class="form-control" id="valor" disabled>

<button type="submit" >Vender</button>