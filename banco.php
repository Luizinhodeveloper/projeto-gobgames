<?php
function lista_jogos()
{
    $usuario = 'root';
    $senha = 'Guitarr@112001';
    try {
        $query = "SELECT 
                    idjogos AS id, 
                    jogos.nome AS nome, 
                    jogos.plataforma AS plataforma, 
                    jogos.preco AS preco, 
                    categorias.nome AS categoria
                FROM jogos, categorias
                WHERE categoria_id = idcategoria;";

        $conn = new PDO('mysql:host=localhost;dbname=gobgames', $usuario, $senha);
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $jogos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Adicione FETCH_ASSOC para um array associativo
        return $jogos;
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        return null;
    }
}

function listar_categorias()
{
    $usuario = 'root';
    $senha = 'Guitarr@112001';
    try {
        $conn = new PDO('mysql:host=localhost;dbname=gobgames', $usuario, $senha);
        $stmt = $conn->prepare("SELECT * FROM categorias");
        $stmt->execute();
        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categorias;
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        return null;
    }
}

function cadastrarJogos($nome, $plataforma, $preco, $categoria)
{
    $usuario = 'root';
    $senha = 'Guitarr@112001';
    try {
        $conn = new PDO('mysql:host=localhost;dbname=gobgames', $usuario, $senha);
        $stmt = $conn->prepare("INSERT INTO jogos (nome, plataforma, preco, categoria_id) VALUES (:nome, :plataforma, :preco, :categoria)");
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':plataforma', $plataforma);
        $stmt->bindValue(':preco', $preco);
        $stmt->bindValue(':categoria', $categoria);
        $stmt->execute();
        return true; // Padrão em PHP é usar `true` e `false` em minúsculas
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        return false;
    }
}

function excluirJogo($nome)
{
    $usuario = 'root';
    $senha = 'Guitarr@112001';
    try {
        $conn = new PDO('mysql:host=localhost;dbname=gobgames', $usuario, $senha);
        $stmt = $conn->prepare("DELETE FROM jogos WHERE nome = :nome");
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        return false;
    }
}

function pesquisar_jogos($nome)
{
    $usuario = 'root';
    $senha = 'Guitarr@112001';
    try {
        $conn = new PDO('mysql:host=localhost;dbname=gobgames', $usuario, $senha);
        $query = "SELECT idjogos AS id, nome, plataforma, preco, categoria_id AS categoria FROM jogos WHERE nome LIKE :nome";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':nome', '%' . $nome . '%'); // '%' permite buscar partes do nome
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
        return null;
    }
}
?>