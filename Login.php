<?php
session_start();
require_once 'conexaoDAO.php';



$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($senha) || empty($email)) {
    echo "<script> if(!confirm('Informe a senha e Email')){
        location.href='index.php';
    }else{
        location.href='index.php';
    } </script>";
    exit;
}

$classe = new Conexao();

$conexao = $classe->conection();

$usuario = $classe->logar($email,$senha,$conexao);

if (count($usuario)<=0) {
    $_SESSION['log']=true;
    header('location: index.php');
    exit;
    # code...
}

echo $usuario['id_cliente'];

$_SESSION['logado']=true;
$_SESSION['senha'] = $senha;
$_SESSION['email_cliente'] = $email;
$_SESSION['id_cliente'] = $usuario['id_cliente'];
$_SESSION['nome_cliente'] = $usuario['nome_cliente'];
$_SESSION['telefone_cliente'] = $usuario['telefone_cliente'];
$_SESSION['endereco_cliente'] = $usuario['endereco_cliente'];

header('Location: aplicacao.php');
?>