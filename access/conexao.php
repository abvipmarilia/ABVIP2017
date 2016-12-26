<?php

$conexao = "mysql.abvipmarilia.com.br";
$banco = "abvipmarilia";
$usuario = "abvipmarilia";
$senha = "jr34139251";

$acesso = mysqli_connect($conexao, $usuario, $senha, $banco);

if (!($acesso)){
    echo "Favor verificar a conexao. Algo errado";
}



?>