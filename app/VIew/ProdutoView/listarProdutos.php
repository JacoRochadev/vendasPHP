<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './../../Controller/ProdutosController.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de Produtos</title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Preco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $produtos = New ProdutosController;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $produtos->delete($id);
                    }

                    foreach ($produtos->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->preco;?> </td>
                        <td>
                        <form method="post" action="alterarProdutos.php">
                            <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                            <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                            <input name="preco" type="hidden" value="<?php echo $value->preco;?>"/>

                            <button name="alterar" type="submit">Alterar</button>
                        </form>

                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
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
