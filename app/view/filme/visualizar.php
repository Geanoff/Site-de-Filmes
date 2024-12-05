<?php

$id = $_GET['id'];
if ($id == '') {
    return header('Location: home.php');
}

require_once __DIR__ . '/../../model/Filme.php';

$filmeModel = new Filme();
$filme = $filmeModel->findById($id);
$referer = $_SERVER['HTTP_REFERER'] ?? 'listar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <main id="visualizar">
        <section class="container">
            <h1>DETALHES DO FILME</h1>
            <div class="detalhes">
                <div class="left">
                    <img width="200px" src="<?php echo $filme->imagem; ?>" alt="Imagem Filme">
                </div>
                <div class="right">
                    <div class="info">
                        <p class="pInfo">Nome:</p>
                        <h2><?php echo $filme->nome; ?></h2>
                    </div>
                    <div class="info">
                        <p class="pInfo">Ano:</p>
                        <h5><?php echo $filme->ano; ?></h5>
                    </div>
                    <div class="info">
                        <p class="pInfo">Descrição:</p>
                        <p><?php echo $filme->descricao; ?></p>
                    </div>
                </div>
            </div>
            <a class="btnVoltar" href="<?php echo htmlspecialchars($referer); ?>"><button>VOLTAR</button></a>
        </section>
    </main>
</body>
</html>
