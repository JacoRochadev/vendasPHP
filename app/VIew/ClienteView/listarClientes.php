<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './../../Controller/ClientesController.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de Clientes</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $cliente = New ClientesController;

                    //exclusao de Cliente
                    if (isset($_POST['excluir'])){
                                            
                        $idCliente = $_POST['id'];
                        
                        $cliente->delete($id);
                    }

                    foreach ($cliente->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nome;?> </td>
                        <td>

                        <form method="post" action="alterarCliente.php">
                                <input name="idCliente" type="hidden" value="<?php echo $value->id;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                         </form>
                        <td>
                            <form method="post" >
                                <input name="idCliente" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->

    </form>

</body>
</html>
