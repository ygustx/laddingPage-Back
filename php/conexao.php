<?php // abertura do php

/* as variaveis de conexao com banco de dados:

SERVIDOR - Colocar o endereço do servidor
USUARIO- Usuario do banco
SENHA -Senha do banco de dados
DBNAME - Nome do banco de dados

*/

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "biblioteca1";

//Criar conexao

$conn = mysqli_connect($servidor, $cadastro, $senha, $dbname);


?>