<?php

    include '../cors.php';
    include '../conexao.php';

        $sql = "SELECT * FROM funcionarios WHERE Fone";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $telefone = [];
            while ($row = $result->fetch_assoc()) {
                array_push($telefone, $row);
            }

            $response = [
                'telefone' => $telefone
            ];

        } else {
            $response = [
                'telefone' => 'Nenhum registro encontrado!'
            ];
        }

        //sleep(2);
        echo json_encode($response);

Fone