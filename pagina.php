<?php
if (!isset($link)){
    include "conteudo.php";
}
else{
    
    $li = $_GET['link'];

    if ($li == 1){
        include 'conteudo.php';
    }
    else{
        if ($li==2){
            include 'projeto.php';
        }
    }
}
?>