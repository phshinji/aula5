<?php 
    require_once('./crud.php');
    require_once('./decode_md5.php');

    # Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    if(isset($_GET['id'])){ 
        # json_encode - transforma o array PHP em um array JSON
        echo json_encode(fnGetUsuario(decrypt_md5($_GET['id'], "")));
    } else {
        echo json_encode(fnGetUsuarios());
    }

    /* localhost/segver/usuario.php?id=1

    {"id":"1","nome":"Luis","email":"luis@gmail.com","cpf":"123.456.789-00","rg":"12.345.678-1"}

    */
?>