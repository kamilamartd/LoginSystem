<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php
            if(!isset($_SESSION))
                session_start();

                echo("<h1>Bem vinda, ".$_SESSION['nome']."</h1>");        
        ?>
        
        <div>
            <div>
                <a href="../pages/login.php" class="button">
                <img src="../assets/log-in-white.svg" alt="fazer login">
                Fazer login
                </a>
            </div>
        
            <div>
                <a href="../pages/cadastro.php" class="button">
                <img src="../assets/users-white.svg" alt="cadastrar">
                Cadastrar
                </a>
            </div>
        </div>
    </header>
</body>
</html>