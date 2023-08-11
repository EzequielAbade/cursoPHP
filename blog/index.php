<?php

    use sistema\Nucleo\controlador;
    require "vendor/autoload.php";
    require_once "sistema/configuracao.php";
    require "rotas.php";
    include_once "sistema/Nucleo/utils.php";
    include ".\sistema\Nucleo\Mensagem.php";
    include ".\sistema\Nucleo\Controlador.php";
    $utilitarios = new utils();
    echo $utilitarios::saudacao() . PHP_EOL;
    echo "<hr>";
    $texto = '<h1>texto para resumir<h1>';
    echo "<hr>";
    echo $utilitarios::resumirTexto($texto, 15, ' leia mais...');
    echo "<hr>";
    echo $utilitarios::contarTempo("2023-08-02 23:30:15");
    echo "<br>";
    echo "<hr>";
    if ($utilitarios::validarEmail('krauser_ezequiel@hotmail.com')){
        echo "Endereço de e-mail válido";
    } else {
        echo "Email invalido";
    }
    echo "<br>";
    echo $utilitarios::url('deucerto.php');
    echo "<br>";
    echo $utilitarios::dataAtual();
    echo "<br>";
    echo $utilitarios::slug("Adão \"Negro\" - '2022' ") . '<hr>' . "<br>";
    echo $utilitarios::slug("Avatar 2: O caminho da Água ") . '<hr>' . "<br>";
    echo $utilitarios::slug("Não! Não Olhe! ") . '<hr>' . "<br>";
    echo $utilitarios::slug("Sonic 2 -  o Filme! ") . '<hr>' . "<br>";
    echo $utilitarios::slug(" Nova SÉRIE NO DISNEY+!") . '<hr>' . "<br>";
    echo $utilitarios::slug(" 100 melhores filmes!") . '<hr>' . "<br>";
    echo $utilitarios::slug(" teste!@###$%6%%,*.:/?\|,") . '<hr>' . "<br>";
    echo $utilitarios::saudacao();
    echo "<hr>";







    
?>