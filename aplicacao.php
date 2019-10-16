
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Painel | Informatica LW</title>
        <link rel="stylesheet" href="_estilos-CSS/estilosaplicacao.css">
        <script src="main.js"></script>
    </head>
 
    <body>
         
        
        <div style="background-color:black;color:white;padding:20px;">
        <h1 id="inicial">BEM VINDO À INFORMÁTICA LW</h1>
        <p id="linha-config">
                <?php 
                     session_start();
                        echo $_SESSION['nome_cliente']."seja bem vindo(a)!";
                
                ?>
                <a href="index.html"><button class="btn btn-lg btn-primary btn-block">Logout</button></a>
                <a href="restaurar.html" target="teste">
                <button class="btn btn-lg btn-primary btn-block" onclick="exibirIframe();">Configurações</button></a>

        
                </div>
        <div id="header">
            <button class="btn btn-lg btn-primary btn-block">Histórico de compras</button>
            
        </div>
<<<<<<< HEAD
        <div id="conteudo-left" ></div>
        <div id="pasta">
            <iframe id='Iframe' src="restaurar.html" height="700" width="100%"
            name="teste"></iframe>
            

            
=======
        <div id="conteudo-left"></div>
        <div id="pasta">
            <?php
            require_once 'conexaoDAO.php';
            $conexao = new Conexao();


            $bdServidor = 'localhost';
            $bdUsuario = 'root';
            $bdSenha = '1234';
            $bdDatabase = 'informaticalw';
            $bdPort = 3306;

            $usuario = $conexao->logar('weslley_desouzagomes209@homail.com','123',$bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
            
            echo $_SESSION['senha'];
            echo $usuario['id_cliente'];
            echo $usuario['nome_cliente'];
            echo $usuario['telefone_cliente'];
            echo $usuario['endereco_cliente'];
              
               echo $_SESSION['usuario'];
               echo $_SESSION['id_cliente'];
               echo  $_SESSION['nome_cliente'];
               echo  $_SESSION['telefone_cliente'];
               echo  $_SESSION['endereco_cliente'];
            ?>
>>>>>>> 56d1c28cec01a9703236b8ae7c7ffac5c71635a1
        </div>
        <div id="resto"></div>
    </body>
</html>