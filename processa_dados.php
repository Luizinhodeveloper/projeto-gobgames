<?php
include 'header.php';
include 'banco.php';

$nome = $_POST["nome"];;
$plataforma = $_POST["plataforma"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
;

if (cadastrarJogos($nome, $plataforma, $preco, $categoria)) {
    echo '<h1>Jogo cadastrado com sucesso</h1>';
} else {
    echo 'Erro no cadastro do Jogo!';
}
include 'footer.php';
?>