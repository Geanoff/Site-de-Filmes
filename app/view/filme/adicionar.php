<?php 
    require_once __DIR__ . '/../../model/Filme.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem'];

        $filmeModel = new Filme();
        $filmeModel->adicionar_filme($nome, $ano, $descricao);  
    }                                                                                                                                                                        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Filme</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <main id="adicionar">
        <section class="container">
            <form class="formulario" action="adicionar.php" method="POST">
                <h1>ADICIONAR FILME</h1>
                <div class="inputGroup">
                    <div class="box">
                        <div class="inputBox">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" required>
                        </div>
                        <div class="inputBox">
                            <label for="ano">Ano</label>
                            <input id="ano" type="number" name="ano" required>
                        </div>
                    </div>
                    <div class="inputBox">
                        <label for="desc">Descrição</label>
                        <textarea id="desc" name="descricao" id="" cols="30" rows="6" required></textarea>
                    </div>
                    <div class="inputBox">
                        <label for="img">Link da Imagem</label>
                        <input id="img" type="text" name="imagem">
                    </div>
                </div>
                <button onclick="return confirm('Confirmar Adição?')">ADICIONAR</button>
                <a class="voltar" href="listar.php">Voltar</a>
            </form>
        </section>
    </main>
</body>
</html>

