<?php
include 'header.php';
include 'banco.php';

if (isset($_GET['excluir_nome'])) {
    $nomeParaExcluir = $_GET['excluir_nome'];

    if (excluirJogo($nomeParaExcluir)) {
        echo "<div class='alert alert-success text-center'>O jogo <strong>$nomeParaExcluir</strong> foi excluído com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Erro ao tentar excluir o jogo <strong>$nomeParaExcluir</strong>. Tente novamente.</div>";
    }
}

$search = isset($_GET['search']) ? $_GET['search'] : null;

if ($search) {
    $jogos = pesquisar_jogos($search);
} else {
    $jogos = lista_jogos();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de jogos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .highlight {
            background-color: yellow;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container text-right">
        <form method="GET" action="lista_jogos.php">
            <div class="form-group mt-4">
                <input type="text" class="form-control" name="search" placeholder="Pesquisar jogo" value="<?php echo htmlspecialchars($search); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

        <h1 class="text-center mt-4 mb-4">Lista de Jogos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Plataforma</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                for ($i = 0; $i < count($jogos); $i++) {
                    echo "<tr>";
                    echo "<td>".$jogos[$i]["id"]."</td>";
                    echo "<td class='" . (strtolower($jogos[$i]["nome"]) === strtolower($search) ? "highlight" : "") . "'>" . htmlspecialchars($jogos[$i]["nome"]) . "</td>";
                    echo "<td>".$jogos[$i]["plataforma"]."</td>";
                    echo "<td>R$ " . number_format($jogos[$i]['preco'], 2, ',', '.') . "</td>";
                    echo "<td>".$jogos[$i]["categoria"]."</td>";
                    echo "<td><a href='lista_jogos.php?excluir_nome=".urlencode($jogos[$i]["nome"])."' class='btn btn-danger btn-sm'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
