<?php 
    require_once __DIR__ . '/../../model/Filme.php';
    // $id = isset($_GET['id']) ? $_GET['id'] : null;


    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];
        $filmeModel = new Filme();
        $filmes = $filmeModel->findById($id);  
            // print_r($filmes)      
    }                
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem'];
        $filmeModel = new Filme();
        $filmeModel->update($nome, $ano, $descricao, $imagem, $id); 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Filme</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <main id="editar">
        <section class="container">
            <form class="formulario" action="editar.php" method="POST">
                <h1>EDITAR FILME</h1>
                <div class="inputGroup">
                    <div class="box">
                        <div style="display: none;" class="inputBox">
                            <input name="id" type="hidden" value="<?= $filmes->id ?>">
                        </div>
                        <div class="inputBox">
                            <label for="nome">Nome</label>
                            <input name="nome" type="text" id="nome" value="<?= $filmes->nome ?>">
                        </div>
                        <div class="inputBox">
                            <label for="ano">Ano</label>
                            <input name="ano" type="text" id="ano" value="<?= $filmes->ano ?>">
                        </div>
                    </div>
                    <div class="inputBox">
                        <label for="desc">Descrição</label>
                        <textarea name="descricao" id="desc" cols="30" rows="6"><?= $filmes->descricao ?></textarea>
                    </div>
                    <div class="inputBox">
                        <label for="img">Link da Imagem</label>
                        <input name="imagem" type="text" id="img" value="<?= $filmes->imagem ?>">
                    </div>
                </div>
                <button onclick="return confirm('Confirmar alteração?')">SALVAR ALTERAÇÃO</button>
                <a class="voltar" href="listar.php">Voltar</a>
            </form>
        </section>
    </main>
</body>
</html>