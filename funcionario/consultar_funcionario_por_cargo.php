<?php

    include '../cors.php';
	include '../conexao.php';

	$sql = "SELECT * FROM funcionarios WHERE Cargo";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $cargo = [];
        while ($row = $result->fetch_assoc()) {
            array_push($cargo, $row);
        }

        $response = [
            'cargo' => $cargo
        ];

    } else {
        $response = [
            'cargo' => 'Nenhum registro encontrado!'
        ];
    }

    //sleep(2);
    echo json_encode($response);



?>