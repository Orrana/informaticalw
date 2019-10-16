<?php
session_start();
require_once 'conexaoDAO.php';



$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($senha) || empty($email)) {
    echo "<script> if(!confirm('Informe a senha e Email')){
        location.href='index.html';
    }else{
        location.href='index.html';
    } </script>";
    exit;
}

$classe = new Conexao();

$conexao = $classe->conection();

$usuario = $classe->logar($email,$senha,$conexao);

echo $usuario['id_cliente'];


$_SESSION['senha'] = $senha;
$_SESSION['usuario'] = $email;
$_SESSION['id_cliente'] = $usuario['id_cliente'];
$_SESSION['nome_cliente'] = $usuario['nome_cliente'];
$_SESSION['telefone_cliente'] = $usuario['telefone_cliente'];
$_SESSION['endereco_cliente'] = $usuario['endereco_telefone'];

//header('Location: aplicacao.php');
?>