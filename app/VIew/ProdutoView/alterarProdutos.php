<?php
$nome = $_POST['nome'];
$preco = $_POST['preco'];
var_dump($nome, $preco);
?>

<form class='form' action="./alterarProdutos.php?id=<?= $produto->getId() ?>" method="POST">
    <label for="nome">nome do produto</label>
    <input type="text" value="<?= $produto->getNome() ?>" name="nome">
    <label for="preco">preco do produto</label>
    <input type="number" value="<?= $produto->getPreco() ?>" name="preco">

    <button type="submit">Atualizar</button>
</form>

