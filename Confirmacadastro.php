<!DOCTYPE html>
<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>confirmação</title>
</head>
<body>
    <?php
    require_once 'conexaoDAO.php';
<<<<<<< HEAD
    
=======
    $bdServidor = 'localhost';
    $bdUsuario = 'root';
    $bdSenha = '12345678';
    $bdDatabase = 'informaticalw';
    $bdPort = 3306; 
>>>>>>> 9c64b6d6072a4df8cb11db4782f47cb528fad82d
    /**/
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confir_senha = $_POST['confirsenha'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];



      
    $cliente = new Conexao;

    $teste = $cliente->conection();

    if (strcmp($senha,$confir_senha)==0) {
        $cliente->cadastro($nome,$email,$senha,$tel,$endereco,$teste);
        echo "<script> if (!confirm('Cadastrado com sucesso!')) {
            location.href='index.html';
        }else{
            location.href='index.html';
        } </script>";

    }else{
        echo "<script>if(!confirm('Senhas não são identicas')) {
            location.href='cadastro.php';
        }
        else{
            location.href='cadastro.php';
        }</script>";
    }
    

?>

</body>
</html>

