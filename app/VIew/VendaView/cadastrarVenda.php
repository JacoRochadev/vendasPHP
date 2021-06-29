<?php 
require_once './../../Controller/ClientesController.php';
$cliente = new ClientesController();
$lista_clientes = $cliente->findAll();
$total_clientes = count($lista_clientes);


if(isset($_GET['salvar']))
{
    include './../../Controller/VendasController.php';

    $vendaC = new VendasController();

    $dados= array(
        'idcliente' => $_POST["idcliente"],
        'valortotal' => $_POST["valortotal"],
    );
    $vendaC->insert($dados);
    echo "Insert."; 
}
?>


<body>
    <form action="cadastrarVenda.php?salvar=true" method="post">
        <label>Valor da venda:
            <input name="valortotal" type="numeric" value="<?= isset($dadosVenda) ? $dadosVenda->valortotal : "" ?>" />
        </label>

        <label>cliente:
        <select name="idcliente">
            <option>Selecione um cliente</option>

            <?php for($i=0; $i<$total_clientes; $i++): ?>
                <option value="<?= $lista_clientes[$i]->id ?>">
                    <?= $lista_clientes[$i]->nome  ?> 
                </option>
            <?php endfor ?>

        </select>
        </label>
        <button type="submit">Salvar</button>
    </form>
        
</body>




