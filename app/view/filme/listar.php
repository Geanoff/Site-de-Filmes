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
    <title>PAINEL</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <a href="home.php"><i class="fa-solid fa-house"></i>HOME</a>
            <a href="listar.php"><i class="fa-solid fa-table-list"></i>PAINEL</a>
        </nav>
    </header>
    <main id="listar">
        <section class="container">
            <div class="novo">
                <button>
                    <a href="adicionar.php">Adicionar Filme
                        <i class="fa-solid fa-add"></i>
                    </a>
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>ANO</th>
                        <th>DESCRIÇÃO</th>
                        <th>AÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filmes as $filme) { ?>
                        <tr>
                            <td><?php echo $filme->id ?></td>
                            <td><?php echo $filme->nome ?></td>
                            <td><?php echo $filme->ano ?></td>
                            <td><?php echo $filme->descricao ?></td>
                            <td>
                                <div>
                                    <form action="visualizar.php" method="GET">
                                        <input type="hidden" name="id" value="<?= $filme->id; ?>">
                                        <button title="Detalhes" id="info" class="fa-solid fa-question"></button>
                                    </form>
                                    <form action="editar.php" method="GET">
                                        <input type="hidden" name="id" value="<?= $filme->id ?>">
                                        <button title="Editar" id="edit" class="fa-solid fa-edit"></button>
                                    </form>
                                    <form action="deletar.php" method="GET">
                                        <input type="hidden" name="id" value="<?= $filme->id; ?>">
                                        <button onclick="return confirm('Tem certeza que deseja deletar?')" title="Deletar" id="lixo" class="fa-solid fa-trash"></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="../../public/js/main.js"></script>
</body>
</html>
