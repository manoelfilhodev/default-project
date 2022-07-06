<?php

use App\Controller\PessoaController;

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch ($url) 
{
    case '/default-project/App/':
        echo "página inicial";
        break;

    case '/default-project/App/pessoa':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::index();
        break;

    case '/default-project/App/pessoa/form':
        PessoaController::form();
        break;

    case '/default-project/App/pessoa/form/save':
        PessoaController::save();
        break;

    case '/default-project/App/pessoa/delete':
        PessoaController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}