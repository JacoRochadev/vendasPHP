<?php 
require_once './../../Controller/VendasController.php';
$vendaC = new VendasController();
$lista_vendas = $vendaC->findAll();
$total_vendas = count($lista_vendas);

require_once './../../Controller/ProdutosController.php';
$produtoC = new ProdutosController();
$lista_produtos = $produtoC->findAll();
$total_produtos = count($lista_produtos);

if(isset($_GET['salvar']))
{
    include './../../Controller/ItensVendaController.php';

    $itensVendaC = new ItensVendaController();

    $dados= array(
        'idvenda' => $_POST["idvenda"],
        'idproduto' => $_POST["idproduto"],
        'quantidade' => $_POST["quantidade"],
        'valorunitario' => $_POST["valorunitario"],
    );
    $itensVendaC->insert($dados);
    echo "Insert."; 
}
?>
<body>
    <form action="cadastrarItensVenda.php?salvar=true" method="post">
        <label>Valor item:
            <input name="valorunitario" type="numeric" value="<?= isset($dadosItensVenda) ? $dadosItensVenda->valorunitario : "" ?>" />
        </label>
        <label>Quantidade:
            <input name="quantidade" type="numeric" value="<?= isset($dadosItensVenda) ? $dadosItensVenda->quantidade : "" ?>" />
        </label>

        <label>Produto:
        <select name="idproduto">
            <option>Selecione um produto</option>

            <?php for($i=0; $i<$total_produtos; $i++): ?>
                <option value="<?= $lista_produtos[$i]->id?>">
                    <?= $lista_produtos[$i]->nome?> 
                </option>
            <?php endfor ?>

        </select>
        </label>Venda:
        <select name="idvenda">
            <option>Selecione uma venda</option>

            <?php for($i=0; $i<$total_vendas; $i++): ?>
                <option value="<?= $lista_vendas[$i]->id ?>">
                    <?= $lista_vendas[$i]->valortotal ?> 
                </option>
            <?php endfor ?>

        </select>
        </label>
        <button type="submit">Salvar</button>
    </form>
        
</body>