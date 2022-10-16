<?php
    if(!isset($_SESSION))
        session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" type="text/css" href="../css/global.css">
  <link rel="stylesheet" type="text/css" href="../css/user.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

</head>
<body>
  
  <?php
    include("header/header.php");
  ?>

  <main>
    <form action=""></form>
      <div class="input"> 
          <input type="text" name="nameUser" placeholder="Nome" value="<?php echo "Nome: "; echo$_SESSION['nome']; ?>" disabled/>  
      </div>

      <div class="input">
        <input type="text" name="company" placeholder="Nome da empresa" value="<?php echo "Empresa: "; echo($_SESSION['empresa'])?>" disabled/>    
      </div>


      <div class="input">
        <input type="email" name="user" placeholder="Email" value="<?php echo "E-mail: "; echo($_SESSION['emailLogin'])?>" disabled/> 
      </div>

      <div class="input">
        <input type="tel" name="tel" placeholder="Telefone da empresa" value="<?php echo "Telefone: "; echo($_SESSION['tel'])?>" disabled/> 
      </div>

      <div class="input">
        <input type="text" name="cnpj" placeholder="CNPJ" value="<?php echo "CNPJ: "; echo($_SESSION['cnpj'])?>" disabled/> 
      </div>

      <div class="input">
        <input type="text" name="social" placeholder="Rede social" value="<?php echo "Rede Social: "; echo($_SESSION['social'])?>" disabled/>
      </div>

      <a href="../pages/userEditar.php" class="button">Editar dados</a>
      <a href="javascript: if(confirm('Tem certeza que deseja excluir sua conta?')) location.href='../php/userDelete.php?p=userDelete&user=<?php echo $_SESSION['emailLogin']; ?>';" class="button delete">Excluir conta</a>
    </form>
  </main>
</body>
</html>


 