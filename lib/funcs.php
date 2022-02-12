<?php

function rotas($pagina)
{
    switch ($pagina) {

        case 'home':
            require 'pages/home.php';
            break;
        case 'teste':
            require 'pages/teste.php';
            break;
        case 'cadastro':
            require 'pages/cadastro.php';
            break;
        case 'login':
            require 'pages/login.php';
            break;
        case 'logout':
            require 'pages/logout.php';
            break;
        case 'list':
            require 'pages/listFilmes.php';
            break;
        case 'insere':
            require 'pages/insere.php';
            break;
        case 'load':
            require 'pages/load.php';
            break;
        case 'perfil':
            require 'pages/perfil.php';
            break;
        default:
            require 'pages/login.php'; //aqui é a pagina que entra de primeira
    }
}

function active($pagina, $link = '')
{
    if ($pagina == $link) {
        return 'class="active"';
    }
    return '';
}
