<?php
    if(!isset($_SESSION))
        session_start();

    include("../functions.php");

    $userEmail = $_GET['user'];

    $bd = conect();

    $sql = "DELETE FROM tb_user WHERE email = '$userEmail'";
    $query = $bd->query($sql) or die($bd->error);

    if($query)
        echo "<script> location.href='../pages/login.php'; </script>";
    else
        echo "<script> alert('Não foi possível deletar o usuário'); location.href='../pages/user.php'; </script>";


?>