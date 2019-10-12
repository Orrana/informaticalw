<?php

    class Conexao{
 
        function conection($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort){
           
            $connect = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);


            if($connect){
                echo 'Deu certo';
            }
            else{
                echo'ainda não';
            }
        }
    }

?>