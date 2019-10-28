<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Login - Banco LW </title>       
        <link rel="stylesheet" href="_estilos-CSS/_estilos.css">
        
        <div></div>
    </head>
    <body>
        <header id='mensagem-bem-vindo'>
            <h1 id="cabecalho">Bem vindo a Informatica LW!</h1>
            <hr id="linha">
        </header>
        <div class="box-login">
            <div class="interna-box-login">
            <form action="Login.php" onsubmit="if(!confirm('Confirmar login?')){return false;}" role="form" method="POST" class="form-logar">
                <p style="color: azure">Email</p>
                <input type="email" name="email" id="email" placeholder="Exemplo@servidor.com" autofocus required>
                <p style="color: azure">Senha</p>
                <p><input type="password" name="senha" id="senha"required></p>
                <p><input type="submit" value="Logar" id="boton-logar" ></p>
            </div>
            </form>
            <div class="cadastro-login"> 
                <div class="cadastro-login-interno">
                    <p id="N-cadastro">Não possui cadastro?<br>
                    <hr>
                    </p>
                    <p style="text-align: center;"><h5><a href="cadastro.php" style="text-decoration: none; color: azure; margin: 55px;"> Clique aqui para cadastrar</a></h5></p>
                </div>
            </div>

            
        </div>
        <?php
            session_start();
            if (isset($_SESSION['log'])) {
                if($_SESSION['log']){
                    echo 
                    '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">alert ("Senha ou email incorretos")</SCRIPT>';
                    $_SESSION['log']=false;


                }               
            }
            if (isset($_SESSION['logout'])) {
                if ($_SESSION['logout']) {
                    session_destroy();
                }
            }

        ?>
    </body>
</html>