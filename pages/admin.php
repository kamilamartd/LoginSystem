<?php
    if(!isset($_SESSION))
        session_start();

    @ $bd = mysqli_connect('localhost', 'root', '', 'bd_blizzard');
    
    if(!$bd)
        die ("Não foi possível se concetar ao banco de dados");
    else{
        $sql = "SELECT * FROM tb_user";
        $query = $bd->query($sql) or die($bd->error);
        $array = $query->fetch_assoc();
    }
      
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - Admin</title>

        <link rel="stylesheet" type="text/css" href="../css/global.css">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link rel="stylesheet" type="text/css" href="/css/modal-delete.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    </head>
    <body>

    <?php
        include("../pages/header/headerAdmin.php");
    ?>

    <main>
        <form action="../pages/editar.php?user=<?php echo $array['email']; ?>"></form>
            <?php
                do{
            ?>

            <div class="input">
                <input type="text" name="nameUser" placeholder="Nome" value="<?php echo $array['email']; ?>" disabled/>

                <div id="actions">
                    <div>
                        <a href="../pages/editar.php?user=<?php echo $array['email']; ?>" class="button">Editar</a>
                        <a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $array['email']; ?>')) location.href='../php/delete.php?p=delete&user=<?php echo $array['email']; ?>';" class="button">Excluir</a>
                    </div>
                </div> 

            </div>

            <!-- MODAL 
            <div id="modal" class="modal active">
                <div class="content">
                    <h3>Excluir Usuário</h3>
                    <p>Tem certeza que deseja excluir este usuário?</p>
                    
                    <div class="actions">
                        <a href="" class="button">
                            Sim, excluir
                        </a>

                        <a href="" class="button red">
                            Cancelar
                        </a>
                    </div>
                </div>
            </div>
            -->


            <?php }while($array = $query->fetch_assoc()); ?>
        </form>
    </main>

    </body>
</html>





