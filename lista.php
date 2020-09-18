<!--  
        Atividade 4 opções do item
    O Instrutor deverá fornecer um código para o estudante, onde exibe um usuário através de um código do método GET na URL da página. (Ex usuario.php?id=5). Com uma URL assim é possível verificar outro usuário trocando o número apenas o número.
    O estudante deverá alterar o código, de forma que o ID apareça criptografado e que a exibição do usuário não seja afetada.
    A entrega deverá ser feita em atividades, dentro do AVA em formato ZIP. 
-->

<!-- OWASP.org -->

<?php

require_once('./crud.php');

foreach (fnGetUsuarios() as $usuario) {
    echo "<a href='usuario.php?id=" . md5($usuario['id']) . "'>{$usuario['nome']}</a><br>";
}