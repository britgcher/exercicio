<?php

    include '../cors.php';
    include '../conexao.php';

        $sql = "SELECT * FROM funcionarios WHERE Nome";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $nome = [];
            while ($row = $result->fetch_assoc()) {
                array_push($nome, $row);
            }

            $response = [
                'nome' => $nome
            ];

        } else {
            $response = [
                'nome' => 'Nenhum registro encontrado!'
            ];
        }

        //sleep(2);
        echo json_encode($response);

    ?>
