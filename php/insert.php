<?php
    if(!isset($_SESSION))
        session_start();
    
    include("../functions.php");
    
    $nome = $_POST['name'];
    $empresa = $_POST['company'];
    $email = $_POST['user'];
    $tel = $_POST['tel'];
    $cnpj = $_POST['cnpj'];
    $social = $_POST['social'];
    $senha = $_POST['senha'];
    $confirm = $_POST['confirm'];

    $bd = conect();
    $verify = verify($bd, $email);

    if($senha == $confirm){
        if($verify == 0)
            insert($bd, $nome, $empresa, $email, $tel, $cnpj, $social, $senha);
        else
            include("../pages/modal/modal-cadastro.php"); //modal - usuario já cadastrado
    }else
        include("../pages/modal/modal-senhas.php"); //modal - senhas diferentes
        
    mysqli_close($bd);
?>
