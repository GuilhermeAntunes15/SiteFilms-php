<?php
    require_once "Functions.php";
    

    $op = $_GET["opcao"];

    switch ($op)
    {
        case "entrar":
            $email = $_POST["txtEmail"];
            $senha = hash("sha512", md5($_POST["txtSenha"])); 
            //$senha = /*hash("sha512", md5(*/$_POST["txtSenha"]/*))*/;  #mudar isso pra entrar com Joãozinho (senha sem hash)
            Login($email, $senha);
        break;

        case "sair":
            Sair();
        break;

        case "cadastro":
            Cadastro();
        break;

        case "insereFilmes";
            InsereFilmes();
        break;

        case "editar":
            Editar();
        break;

        case "excluir":
            $id = $_GET["id"];
            Excluir($id);
        break;
    }       
?>