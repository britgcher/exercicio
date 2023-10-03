<?php

    include '../cors.php';
	include '../conexao.php';

	$sql = "SELECT * FROM funcionarios WHERE Cidade";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $cidade = [];
        while ($row = $result->fetch_assoc()) {
            array_push($cidade, $row);
        }

        $response = [
            'cidade' => $cidade
        ];

    } else {
        $response = [
            'cidade' => 'Nenhum registro encontrado!'
        ];
    }

    //sleep(2);
    echo json_encode($response);

?>