<?php include_once 'lock.php';
include_once '../database/dentistas.dao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP</title>
</head>
<body>
    <h2>Bem vindo a area restrita</h2>
    <p>
        <a href="logout.php">Sair do sistema</a>
    </p>
    <h3>Cadastrar Dentista:</h3>

    <form action="cadastrar.php" method="post">
        <p>
            <label>Nome:</label><br>
            <input type="text" name="name" required>
        </p>

        <p>
        <label>Email:</label><br>
         <input type="text" name="email" required>
        <p>
            
        </p>
        <label>Cro:</label><br>
         <input type="text" name="cro" required>
        </p>
        </p>
        <label>cro_uf:</label><br>
         <input type="text" name="cro_uf" required>
        </p>
    <p>
    <button type="submit" name="salvar">Salvar</button>
    </p>

    </form>

    <h3>Dentistas Cadastrados:</h3>

    <?php

    echo exibir_dentistas();
    ?>
    
</body>
</html>