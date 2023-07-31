<?php
    require_once "sistema/configuracao.php";
    include_once "utils.php";
    echo saudacao() . PHP_EOL;
    $texto = '<h1>texto para resumir<h1>';
    echo resumirTexto($texto, 15, ' leia mais...');
    
?>