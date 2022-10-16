<?php
    
    if(!isset($_SESSION))
        session_start();
    
    function conect(){
        @ $bd = mysqli_connect('localhost', 'root', '', 'bd_blizzard');
        
        if(!$bd)
            die ("Não foi possível se concetar ao banco de dados");

        return $bd;
    }
  
    function verify($bd, $email){
        $sql = mysqli_query($bd, "SELECT * FROM tb_user WHERE email = '{$email}'");
        $verify = mysqli_num_rows($sql);

        return $verify;
    }

    function data($bd, $emailLogin){
        
        //busca no banco todos os dados
        $busca = mysqli_query($bd, "SELECT * FROM tb_user WHERE email = '$emailLogin'");
        
        //atualiza session
        while($emailLogin = mysqli_fetch_assoc($busca)){
            $_SESSION['nome'] = $emailLogin['nome'];
            $_SESSION['empresa'] = $emailLogin['nomeEmpresa'];
            $_SESSION['emailLogin'] = $emailLogin['email'];
            $_SESSION['tel'] = $emailLogin['tel'];
            $_SESSION['cnpj'] = $emailLogin['cnpj'];
            $_SESSION['social'] = $emailLogin['social'];
        }
    }

    function sign($bd, $emailLogin, $senhaLogin){
        if($emailLogin == 'admin@gmail.com'){
            echo("<script> location.href='../pages/admin.php'; </script>");
        }else{
            $sql = mysqli_query($bd, 
                    "SELECT email, senha 
                    FROM tb_user 
                    WHERE email = '$emailLogin' AND senha = md5('$senhaLogin')
            ");
                
            $resul = mysqli_num_rows($sql);

            if($resul){
                data($bd, $emailLogin);

                echo("<script> location.href='../pages/user.php'; </script>");
            }else
                include("../pages/modal/modal-login.php");
        }
         
    }

    function insert($bd, $nome, $empresa, $email, $tel, $cnpj, $social, $senha){
        $query = "INSERT INTO tb_user (nome, nomeEmpresa, email, tel, cnpj, social, senha) VALUES ('$nome', '$empresa', '$email', '$tel', '$cnpj', '$social', md5('$senha'))";
        $resul = mysqli_query($bd, $query);

        if($resul){
            data($bd, $email);

            include("pages/user.php");
        }else
            echo("Não foi possível realizar o cadastro".mysqli_error($bd));
    }

    function userEdit($bd, $nome, $empresa, $email, $tel, $cnpj, $social){
        $query = (" UPDATE tb_user SET 
                nome = '$nome',
                nomeEmpresa = '$empresa',
                email = '$email',
                tel = '$tel',
                cnpj = '$cnpj',
                social = '$social'
            WHERE email = '$email'");

        $resul = mysqli_query($bd, $query);

        if($resul){
            data($bd, $email);

            include("pages/user.php");
        }else
            echo("Não foi possível alterar dados".mysqli_error($bd));
    }

    function edit($bd, $nome, $empresa, $email, $tel, $cnpj, $social){
        $query = (" UPDATE tb_user SET 
                nome = '$nome',
                nomeEmpresa = '$empresa',
                email = '$email',
                tel = '$tel',
                cnpj = '$cnpj',
                social = '$social'
            WHERE email = '$email'");

        $resul = mysqli_query($bd, $query);

        if($resul){
            data($bd, $email);

            include("pages/admin.php");
        }else
            echo("Não foi possível alterar dados".mysqli_error($bd));
    }
?>