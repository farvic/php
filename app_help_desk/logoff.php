<?php

    session_start();
    // remover índices de sessão
    // unset()


    // destruir variável de sessão
    session_destroy();
    header('Location: index.php');
?>