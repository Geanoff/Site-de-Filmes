<?php
require_once __DIR__ . '/../../model/Filme.php';

$id = $_GET['id'];
if ($id == '') {
    return header('Location: listar.php');
}


$filmeModel = new Filme();
$filme = $filmeModel->findById($id);

?>
<main>
    <section class="container">
        <p>O filme <strong><?php echo $filme->nome?></strong> foi deletado!</p>
        <a href="listar.php?mensagem=sucesso"><button>VOLTAR</button></a>
    </section>
</main>
<?php
$filmeModel->deletar($id);
?>



<link rel="stylesheet" href="../../public/css/style.css">
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-size: 20px;
    }

    button {
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 30px;
        }
    button:hover {
        background-color: #0056b3;
    }

</style>
