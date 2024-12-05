<?php

    require_once __DIR__ . "\..\..\model\Filme.php";

    $filmeModel = new Filme();
    $filmes = $filmeModel->buscarTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME FILMES</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <a href="home.php"><i class="fa-solid fa-house"></i>HOME</a>
            <a href="listar.php"><i class="fa-solid fa-table-list"></i>PAINEL</a>
        </nav>
    </header>
    <main>
        <?php foreach ($filmes as $filme) { ?>
            <div class="card">
                <div class="left">
                    <img src="<?php echo $filme->imagem ?>" alt="">
                    <div class="two">
                        <p class="legend">Nome:</p>
                        <p class="nome"><?php echo $filme->nome ?></p>
                        <p class="legend">Ano:</p>
                        <p class="ano"><?php echo $filme->ano ?></p>
                        <p class="legend">Descrição:</p>
                        <p class="desc"><?php echo $filme->descricao ?></p>
                        <form action="visualizar.php" method="GET">
                            <input type="hidden" name="id" value="<?= $filme->id ?>">
                            <button title="Visualizar" id="edit" class="fa-solid fa-eye"></button>
                        </form>
                    </div>
                    
                </div>
            </div>
        <?php } ?>
    </main>
</body>
</html>