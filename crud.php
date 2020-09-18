<?php

    require_once('./conexao.php');

    function fnGetUsuario($id){
        $link = abreConexao();

        $query = "select * from tb_usuarios where id = {$id}";
        $rs = mysqli_query($link, $query);

        return mysqli_fetch_assoc($rs);
    }

    function fnGetUsuarios(){ 
        $link = abreConexao();

        $query = "select * from tb_usuarios";
        $rs = mysqli_query($link, $query);

        $usuarios = array();

        while($linha = mysqli_fetch_assoc($rs)) {
            array_push($usuarios, $linha);
        }
        return $usuarios;
    }