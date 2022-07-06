<?php

/**
 * A função registra junto ao PHP qual será a função (no código abaixo
 * uma função anônima) responsável por procurar e incluir as classes
 * requisitadas durante a execução dos scripts. No que a função anônima
 * tem um parâmetro que é o nome da classe procurada (junto com o devido
 * namespace)
 * Links abaixo para estudo:
 * Função sql_autoload_register => https://www.php.net/manual/pt_BR/function.spl-autoload-register.php
 * Funções Anônimas => https://www.php.net/manual/pt_BR/functions.anonymous.php
 */

spl_autoload_register(function($class) {
    $class = ltrim($class, '\\');

    $file = BASEDIR . "/" .str_replace('\\', '/', $class) . '.php';

    if (is_file($file)) {
        include_once $file;
    }else
    {
        echo "Arquivo não encontrado! Arquivo: " . $file;
    }
});