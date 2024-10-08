<?php
include 'header.php';
include 'banco.php';

$nome = $_POST["nome"];;
$plataforma = $_POST["plataforma"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
;

if (cadastrarJogos($nome, $plataforma, $preco, $categoria)) {
    header('Location: lista_jogos.php');
    exit();
} else {
    echo 'Erro no cadastro do Jogo!';
}

include 'footer.php';
?>