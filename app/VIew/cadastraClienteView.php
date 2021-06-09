<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './../Controller/ClientesController.php';
require_once './../Model/Cliente.php';


?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de CLientes - WEB I</title>

</head>

<body>
   <?php
    
      $cliente = new ClientesController();
      if(isset($_POST['cadastrar'])):
    
            $nome = $_POST['nome'];

            $cliente->setNome($nome);

            if($cliente->insert()){
                echo "Cliente ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>  
            <input type="submit" name="cadastrar"/>
        
    </form>

</body>
</html>
