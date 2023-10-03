<?php
include '../conexao.php';
include '../cors.php';

$sql = "INSERT INTO funcionarios";

// Executa a declaração SQL
if ($connection->query($sql) === true) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $connection->error;
}
?>