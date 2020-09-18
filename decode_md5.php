<?php

function decrypt_md5($hash, $resposta)
{
    $array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    $maxNum = 3; // número máximo de caracteres

    if (strlen($resposta) > $maxNum) {
        return; // retorna e finaliza o algoritmo
    }

    for ($i = 0; $i < count($array); $i++) { 
        $temp = $resposta . $array[$i];
        if (md5($temp) == $hash) {
            return $temp;
        }

        $resultado = decrypt_md5($hash, $temp);
        if (strlen($resultado) > 0) {
            return $resultado;
        }
    }
}
