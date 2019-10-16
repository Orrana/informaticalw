<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Painel | Informatica LW</title>
        <link rel="stylesheet" href="_estilos-CSS/estilosaplicacao.css">
    </head>
 
    <body>
         
        
        <div style="background-color:black;color:white;padding:20px;">
        <h1 id="inicial">BEM VINDO À INFORMÁTICA LW</h1>
        <p id="linha-config">
                <?php 
                     
                        echo $_SESSION['nome_cliente']."seja bem vindo(a)!";
                
                ?>
                <a href="index.html"><button class="btn btn-lg btn-primary btn-block">Logout</button></a>
                
                <button class="btn btn-lg btn-primary btn-block">Configurações</button></p></div>
        <div id="header">
            <button class="btn btn-lg btn-primary btn-block">Histórico de compras</button>
            
        </div>
        <div id="conteudo-left"></div>
        <div id="pasta">
            
        </div>
        <div id="resto"></div>
    </body>
</html>