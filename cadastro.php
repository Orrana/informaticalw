<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="_estilos-CSS/_estilos.css">
    </head>
    <body>
        <header>
                <h1 id="cabecalho">Bem vindo a Informatica LW!</h1>
                <hr>
                <?php
                    require_once 'conexao.php';
                    $bdServidor = 'localhost';
                    $bdUsuario = 'root';
                    $bdSenha = '12345678';
                    $bdDatabase = 'informaticalw';
                    $bdPort = 3306;

                    $cliente = new Conexao;
                    $cliente->conection($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
                ?>
        </header>
        <p><h3 style="text-align: center;">Cadastro de Usuário</h3></p>
        <div id="total">
            <div class="box-cadastro">
                <div class="box-cadastro-interno">
                    <div class="form-alinhamento">
                        <form action="" method="POST" onsubmit="if(!confirm('Deseja confirmar o cadastro')){return false;}" role="form">
                            <p class="labels-cadastro">Nome completo*:</p>
                            <p><input type="text" name="nome" required autofocus class="input-cadastro"></p>
                            <p class="labels-cadastro">E-mail*:</p>
                            <p><input type="email" name="email" required class="input-cadastro"></p>
                            <p class="labels-cadastro">Senha*:</p>
                            <p><input type="password" name="senha" id="" required class="input-cadastro"></p>
                            <p class="labels-cadastro">Confirmar senha*:</p>
                            <p><input type="password" name="confirsenha" id="" required class="input-cadastro"></p>
                            <p class="labels-cadastro">Telefone:</p>
                            <p><input type="tel" name="tel" id="" class="input-cadastro"></p>
                            <p class="labels-cadastro"> Edereço:</p>
                            <p><input type="text" name="endereco" id="" class="input-cadastro"></p>
                            <p><input type="submit" value="Cadastrar" id="botao-cadastro"></p>
                        </form>
                    </div>
                </div>
            </div>
            

            </div>
        </div>
    </body>
</html>