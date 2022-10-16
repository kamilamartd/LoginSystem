<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blizzard</title>
    
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="slogan">
        <div id="slogan">
            <h2 id="h2">Feito para quem<br>nos move.</h2>
            <p>Feito para você,<br>microempreendedor.</p>
        </div>
    </div>

    <main>
        <section class="content">
            <h2>Login</h2>

            <div class="form">
                <form action="../php/sign.php"  method="POST">
                    <fieldset>
                        <label for="emailLogin" class="sr-only">Seu email:</label>
                        <input type="email" name="emailLogin" class="input" placeholder="Seu email" required/>
            
                        <label for="passLogin" class="sr-only">Sua senha:</label> </br>
                        <input type="password" name="passLogin" class="input" placeholder="Sua senha" required/>
                    </fieldset>
        
                    <button type="submit">
                        <img src="../assets/log-in-white.svg" alt="Entrar">
                        Entrar
                    </button>
                </form>

                <a href="cadastro.php" class="button">
                    <img src="../assets/users-blue.svg" alt="cadastre-se">
                    Cadastre-se
                </a>
            </div> 
        </section>
    </main> 
</body>
</html>