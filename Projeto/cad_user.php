<?php
    
    include("conexao.php");

    //Inserindo dados

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuarios (nome, tel, email, senha)
    values ('{$nome}', '{$tel}', '{$email}', '{$senha}')";

    mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar
    registro");
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" 
    content="3,http://localhost/Projeto/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Confirmação de Cadastro</title>
</head>    

<body>
    <h1>Usuário Cadastrado!</h1>
    <br>
    <h2>Você será redirecionado para a tela principal</h2>
</body>
</html>