<?php
include '../cors.php';
include 'conexao.php';

	// Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);
  

// Declaração SQL a ser executada
$sql = "UPDATE funcionarios SET Nome='$requestData->Nome', Cargo='$requestData->Cargo', Cidade='$requestData->Cidade', Fone='$requestData->Fone'";

// Executa a declaração SQL
if ($connection->query($sql) === true) {
    echo "Dados atualizados com sucesso.";
} else {
    echo "Erro ao atualizar dados: " . $connection->error;
}
?>