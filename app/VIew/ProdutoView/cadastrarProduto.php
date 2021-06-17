<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './../../Controller/ProdutosController.php';
require_once './../../Model/Produto.php';


?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>Cadastrar Produtos</title

</head>

<body>
   <?php
    
      $produto = new ProdutosController();
      if(isset($_POST['cadastrar'])):
    
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            $produto->setNome($nome);
            $produto->setPreco($preco);

            if($produto->insert()){
                echo "Produto ". $nome. " inserido com sucesso. Valor: ".$preco."";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>  
        <label for='Preco'> Preco:</label>
            <input type="number" name="preco"/>  
            <input type="submit" name="cadastrar"/>
        
    </form>
    <a href="./listarProdutos.php">listar</a>
</body>
</html>
