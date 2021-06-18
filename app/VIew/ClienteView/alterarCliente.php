<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
</head>
<body>
<?php
    require './../../Controller/ClientesController.php';
    $clienteM = new Clientes();
    $idCliente = $_POST['idCliente'];
    $cliente = new ClientesController();
    $cliente->setIdCliente($idCliente);
    $cliente->setNome($cliente->findUnit($idCliente)->getNome());
?>
    <form action="./alterarCliente.php?id=<?= $cliente->getIdCliente() ?>" method="post">
        <h1>Update</h1>
        <label>Nome Cliente</label>
        <input type="text" value="<?= $cliente->$nome ?>" name="nome_cliente" class="form-control" id="nome_cliente" required>


        <div class="button">
            <button type="submit">Atualizar</button>
        </div>
    </form>
    <?php
        if(!$_POST) return;
        $cliente->setNome($_POST['nome_cliente']);
        $cliente->update($idCliente);
    ?>
    
</body>
</html>