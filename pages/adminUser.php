<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blizzard</title>

    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/user.css">
    <link rel="stylesheet" type="text/css" href="../css/adiminUser.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

</head>
<body>
  
    <?php
      if(!isset($_SESSION))
        session_start();
    
      include("../pages/headerAdmin.php");

    ?>

    <main>
        <h3><?php echo($_SESSION['nome'])?></h3>

        <form action=""></form>
        <div class="input"> 
            <input type="text" name="nameUser" placeholder="Nome" value="<?php echo($_SESSION['nome'])?>" disabled/> 
            
            <div id="actions">
              <div>
                <a href="#" class="button">Editar</a>
                <a href="#" class="button">Excluir</a>
              </div>
            </div> 
        </div>

        <div class="input">
          <input type="text" name="company" placeholder="Nome da empresa" value="<?php echo($_SESSION['empresa'])?>" disabled/>   
          
          <div id="actions">
            <div>
              <a href="#" class="button">Editar</a>
              <a href="#" class="button">Excluir</a>
            </div>
          </div> 
        </div>


        <div class="input">
          <input type="email" name="user" placeholder="Email" value="<?php echo($_SESSION['emailLogin'])?>" disabled/> 

          <div id="actions">
            <div>
              <a href="#" class="button">Editar</a>
              <a href=" class="button">Excluir</a>
            </div>
          </div> 
        </div>

        <div class="input">
          <input type="tel" name="tel" placeholder="Telefone da empresa" value="<?php echo($_SESSION['tel'])?>" disabled/> 

          <div id="actions">
            <div>
              <a href="#" class="button">Editar</a>
              <a href="#" class="button">Excluir</a>
            </div>
          </div> 
        </div>

        <div class="input">
          <input type="text" name="cnpj" placeholder="CNPJ" value="<?php echo($_SESSION['cnpj'])?>" disabled/>

          <div id="actions">
            <div>
              <a href="#" class="button">Editar</a>
              <a href="#" class="button">Excluir</a>
            </div>
          </div> 
        </div>

        <div class="input">
          <input type="text" name="social" placeholder="Rede social" value="<?php echo($_SESSION['social'])?>" disabled/>

          <div id="actions">
            <div>
              <a href="#" class="button">Editar</a>
              <a href="#" class="button">Excluir</a>
            </div>
          </div> 
        </div>
      </form>
    </main> 
</body>
</html>