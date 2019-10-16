
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
                     $nomeusuario=$_POST['email'];
                        echo "{$nomeusuario} seja bem vindo(a)!";
                
                ?>
                <a href="index.html"><button class="btn btn-lg btn-primary btn-block">Logout</button></a>
                <a href="restaurar.html" target="teste">
                <button class="btn btn-lg btn-primary btn-block" onclick="exibirIframe();">Configurações</button></a>

        
                </div>
        <div id="header">
            <button class="btn btn-lg btn-primary btn-block">Histórico de compras</button>
            
        </div>
        <div id="conteudo-left" ></div>
        <div id="pasta">
            <iframe id='Iframe' src="restaurar.html" height="700" width="100%"
            name="teste"></iframe>
            

            
        </div>
        <div id="resto"></div>
    </body>
</html>