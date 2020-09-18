<?php

    # constantes
    define('__SERVER__','localhost'); 
    define('__USER__','root');
    define('__PASS__','');
    define('__DB__','segver');
    define('__PORT__',3306);

    function abreConexao() {
        $link = mysqli_connect(__SERVER__, __USER__, __PASS__, __DB__, __PORT__);
        mysqli_set_charset($link, 'utf8');
        return $link;
    }