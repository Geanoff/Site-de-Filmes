<?php

require_once __DIR__ . "\..\config\database.php";

//Classe que representa a tabela Filme no projeto

class Filme {
    private $tabela = "filme";
    private $pdo; 
    //colunas da tabela

    public $id;
    public $nome;
    public $ano;
    public $descricao;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function buscarTodos() {
        $query = "select * from $this->tabela";//order by id desc
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->fetchAll(); 
        // echo "<pre>";
        // print_r($filmes);
        // echo "</pre>";
    }

    public function findById($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        return $stmt->fetch();
    }

    public function deletar($id) {
        $query = "DELETE FROM $this->tabela WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function adicionar_filme($nome, $ano, $descricao, $imagem) {   
        if ($imagem) {
            $query = "INSERT INTO $this->tabela (nome, ano, descricao, imagem) VALUES (:nome, :ano, :descricao, :imagem)";
        }
        else { 
            $query = "INSERT INTO $this->tabela (nome, ano, descricao) VALUES (:nome, :ano, :descricao)";
        }
        
        $stmt = $this->pdo->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":ano", $ano);
        $stmt->bindParam(":descricao", $descricao);
        if ($imagem) { 
            $stmt->bindParam(":imagem", $imagem);
        }
        $stmt->execute();
        if ($stmt) {
            return header('Location: listar.php?mensagem=sucesso');
        } else {
            return header('Location: listar.php?mensagem=erro');
        }
    }

    public function update($nome, $ano, $descricao, $imagem, $id) {
        $query = "UPDATE $this->tabela SET nome = :nome, ano = :ano, descricao = :descricao, imagem = :imagem WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":ano", $ano);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        if ($stmt) {
            return header('Location: listar.php?mensagem=sucesso');
        } else {
            return header('Location: listar.php?mensagem=erro');
        }
    }
    
}
 

