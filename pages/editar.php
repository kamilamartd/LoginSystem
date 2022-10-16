<?php
    if(!isset($_SESSION))
        session_start();

    $emailLogin = $_GET['user'];
    
    @ $bd = mysqli_connect('localhost', 'root', '', 'bd_blizzard');
    
    if(!$bd)
        die ("Não foi possível se concetar ao banco de dados");
    else{
        $sql = "SELECT * FROM tb_user WHERE email = '$emailLogin'";
        $query = $bd->query($sql) or die($bd->error);
        $array = $query->fetch_assoc();

        $_SESSION['nome'] = $array['nome'];
        $_SESSION['empresa'] = $array['nomeEmpresa'];
        $_SESSION['emailLogin'] = $array['email'];
        $_SESSION['tel'] = $array['tel'];
        $_SESSION['cnpj'] = $array['cnpj'];
        $_SESSION['social'] = $array['social'];
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Dados</title>

        <link rel="stylesheet" type="text/css" href="../css/global.css">
        <link rel="stylesheet" type="text/css" href="../css/cadastro.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="slogan">
            <div id="slogan">
                <h2 id="h2">Nos mantenha<br>atualizados,</h2>
                <p>Sobre sua empresa<br>e seus dados.</p>
            </div>
        </div>

        <main>
            <section class="content">
                <h2>Editar dados</h2>
            
                <div class="form">
                    <form action="../php/edit.php" method="POST">
                        <fieldset>
                            <label for="name" class="sr-only">Nome:</label> 
                            <input type="text" name="name" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" required/>
                            
                            <label for="company" class="sr-only">Nome da empresa:</label> 
                            <input type="text" name="company" placeholder="Nome da empresa" value="<?php echo $_SESSION['empresa'];  ?>" required/>
                            
                            <label for="email" class="sr-only">Email:</label> 
                            <input type="email" name="user" placeholder="Email" value="<?php echo $_SESSION['emailLogin']; ?>" required/>

                            <label for="tel" class="sr-only">telefone/celular:</label> 
                            <input type="tel" name="tel" placeholder="telefone/celular" value="<?php echo $_SESSION['tel']; ?>" />
                            
                            <label for="cnpj" class="sr-only">CNPJ</label> 
                            <input type="text" name="cnpj" placeholder="CNPJ" value="<?php echo $_SESSION['cnpj']; ?>" />

                            <label for="social" class="sr-only">Rede social</label> 
                            <input type="text" name="social" placeholder="Rede Social da sua empresa" value="<?php echo $_SESSION['social']; ?>" />
                        </fieldset>
            
                        <button type="submit">
                            <img src="../assets/log-in-white.svg" alt="salvar">
                            salvar
                        </button>
                    </form>

                    <a href="admin.php" class="button">
                        Cancelar
                    </a>
                </div>
            </section>
        </main>
    </body>
</html>