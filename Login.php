<?php
session_start();
require_once 'conexaoDAO.php';

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '1234';
$bdDatabase = 'informaticalw';
$bdPort = 3306;

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

$conexao = new Conexao();

$usuario = $conexao->logar($email,$senha,$bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);

/*if ($usuario->num_rows<0) {
    echo "<script> if(!confirm('Senha ou Email incorretos')){
        location.href='index.html';
    }else{
        location.href='index.html';
    } </script>";
    exit;
}*/


$_SESSION['senha'] = $senha;
$_SESSION['usuario'] = $email;
$_SESSION['id_cliente'] = $usuario['id_cliente'];
$_SESSION['nome_cliente'] = $usuario['nome_cliente'];
$_SESSION['telefone_cliente'] = $usuario['telefone_cliente'];
$_SESSION['endereco_cliente'] = $usuario['endereco_telefone'];

header('Location: aplicacao.php');
?>