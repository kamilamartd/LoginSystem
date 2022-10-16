<?php
    //ligar sessão
    if(!isset($_SESSION))
        session_start();

    //incluir funções
    include("../functions.php");

    //receber valores do form
    $nome =  $_POST['name'];
    $empresa = $_POST['company'];
    $email = $_POST['user'];
    $tel = $_POST['tel'];
    $cnpj = $_POST['cnpj'];
    $social = $_POST['social'];

    //conectar com o banco -> chamar função
    $bd = conect();

    //atualizar no banco  -> chamar função
    edit($bd, $nome, $empresa, $email, $tel, $cnpj, $social);

    //fechar banco
    mysqli_close($bd);

?>