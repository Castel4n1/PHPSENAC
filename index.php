<?php

    $nome = 'Kauê Castelani';
    $ola = 'Boa noite';
    $n1 = 123;
    $n2 = '123';

    $n3 = $n1 + $n2;

    echo $ola.' '.$nome;
    echo '<br>';
    echo "$ola $nome";
    echo '<br>';
    echo '$ola $nome';
    echo '<br>';
    echo $n1. '/ '.$n2;
    echo '<br>';

    echo $n3;


    echo '<br>';
    echo '<pre>';
        var_dump($nome);
        var_dump($n2);
    echo '</pre>';
?>