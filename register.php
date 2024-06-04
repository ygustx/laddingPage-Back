<?php
include 'config.php';

//Inserindo dados

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nome, email, senha)
values ('{$nome}', '{$email}', '{$senha}')";

mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar
registro");
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3;url=http://localhost/Projeto/pag_inicial.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylePHP.php">
    <title>Confirmação de Cadastro</title>

    <style>
        body{
    padding:0;
    margin:0;
    width:100%;
    height:100vh;
    background:radial-gradient(#58af9b, #b8e0d7);
  
  }
  .wrapper{
    width:200px;
    height:60px;
    position: absolute;
    left:50%;
    top:50%;
    transform: translate(-50%, -50%);
  }
  .circle{
    width:20px;
    height:20px;
    position: absolute;
    border-radius: 50%;
    background-color: #fff;
    left:15%;
    transform-origin: 50%;
    animation: circle .5s alternate infinite ease;
  }
  
  @keyframes circle{
    0%{
      top:60px;
      height:5px;
      border-radius: 50px 50px 25px 25px;
      transform: scaleX(1.7);
    }
    40%{
      height:20px;
      border-radius: 50%;
      transform: scaleX(1);
    }
    100%{
      top:0%;
    }
  }
  .circle:nth-child(2){
    left:45%;
    animation-delay: .2s;
  }
  .circle:nth-child(3){
    left:auto;
    right:15%;
    animation-delay: .3s;
  }
  .shadow{
    width:20px;
    height:4px;
    border-radius: 50%;
    background-color: rgba(0,0,0,.5);
    position: absolute;
    top:62px;
    transform-origin: 50%;
    z-index: -1;
    left:15%;
    filter: blur(1px);
    animation: shadow .5s alternate infinite ease;
  }
  
  @keyframes shadow{
    0%{
      transform: scaleX(1.5);
    }
    40%{
      transform: scaleX(1);
      opacity: .7;
    }
    100%{
      transform: scaleX(.2);
      opacity: .4;
    }
  }
  .shadow:nth-child(4){
    left: 45%;
    animation-delay: .2s
  }
  .shadow:nth-child(5){
    left:auto;
    right:15%;
    animation-delay: .3s;
  }
  .wrapper span{
    position: absolute;
    top:75px;
    font-family: 'Lato';
    font-size: 20px;
    letter-spacing: 12px;
    color: #fff;
  }

  h1{
     color: #fff;
     position: absolute;
        top: 20%;
        left: 43%;
        margin-right: -50%;


  }
    </style>
</head>    

<body>
    <h1>Usuário Cadastrado!</h1>

    <div class="wrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <span>Carregando</span>
    </div>

</body>
</html>
