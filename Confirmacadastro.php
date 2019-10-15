<!DOCTYPE html>
<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>confirmação</title>
</head>
<body>
    <?php
    require_once 'conexaoDAO.php';
    $bdServidor = 'localhost';
    $bdUsuario = 'root';
    $bdSenha = '1234';
    $bdDatabase = 'informaticalw';
    $bdPort = 3306; 
    /**/
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confir_senha = $_POST['confirsenha'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];



      
    $cliente = new Conexao;

    if (strcmp($senha,$confir_senha)==0) {
        $cliente->cadastro($nome,$email,$senha,$tel,$endereco,$bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
        echo "<script> if (!confirm('Cadastrado com sucesso!')) {
            location.href='index.html';
        }else{
            location.href='index.html';
        } </script>";

    }else{
        echo "<script>if(!confirm('Senhas diferentes')) {
            location.href='cadastro.php';
        }
        else{
            location.href='cadastro.php';
        }</script>";
    }
    

?>

</body>
</html>

