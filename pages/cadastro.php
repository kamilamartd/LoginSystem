<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Blizzard</title>

    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">

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
            <h2>Cadastro</h2>
        
            <div class="form">
                <form action="../php/insert.php"  method="POST">
                    <fieldset>
                        <label for="name" class="sr-only">Nome:</label> 
                        <input type="text" name="name" placeholder="Nome" required/>
                        
                        <label for="company" class="sr-only">Nome da empresa:</label> 
                        <input type="text" name="company" placeholder="Nome da empresa" required/>
                        
                        <label for="email" class="sr-only">Email:</label> 
                        <input type="email" name="user" placeholder="Email" required/>

                        <label for="tel" class="sr-only">telefone/celular:</label> 
                        <input type="tel" name="tel" placeholder="telefone/celular"/>
                        
                        <label for="cnpj" class="sr-only">CNPJ</label> 
                        <input type="text" name="cnpj" placeholder="CNPJ"/>

                        <label for="social" class="sr-only">Rede social</label> 
                        <input type="text" name="social" placeholder="Rede Social da sua empresa"/>
                        
                        <label for="senha" class="sr-only">Senha:</label> 
                        <input type="password" name="senha" placeholder="Senha" required/>

                        <label for="confirm" class="sr-only">Confirmação de senha:</label> 
                        <input type="password" name="confirm" placeholder="Confirmar senha" required/>   
                    </fieldset>
        
                    <button type="submit">
                        <img src="../assets/users-white.svg" alt="Cadastrar">
                        Cadastar
                    </button>
                </form>

                <a href="login.php" class="button">
                    <img src="../assets/log-in-yellow.svg" alt="Fazer login">
                    Fazer login
                </a>
            </div>
        </section>
    </main>
</body>
</html>