<?php
include 'header.php';
include 'banco.php';

$categorias = listar_categorias();
?>

<main role="main">

    <div class="container jogos">

        <h1 class="text-center mt-4 mb-4">Cadastro de Jogos</h1>

        <form action="processa_dados.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome do Jogo:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="plataforma">Plataforma:</label>
                <input type="text" class="form-control" id="plataforma" name="plataforma" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="categoria">Escolha o tipo:</label>
                <select class="form-control" id="categoria" name="categoria" required>
                    <option value="">Selecione uma categoria</option> <!-- Opção padrão -->
                    <?php
                    for ($i = 0; $i < count($categorias); $i++) {
                        echo "<option value='" . $categorias[$i]["idcategoria"] . "'>" . $categorias[$i]["nome"] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Jogo</button>
        </form>
    </div>

    <br>
    <?php
    include 'footer.php';
    ?>
</main>

</body>

</html>
