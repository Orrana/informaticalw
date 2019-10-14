<?php

    class Conexao{
 
        function conection($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort){
           
            $connect = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
            
        }

        function cadastro($nome,$email,$senha,$telefone,$endereco,$bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort){

            $connect = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
            $stm = $connect->prepare("insert into c_clientes(id_cliente,nome_cliente,email_cliente,senha_cliente,telefone_cliente,endereco_cliente) values (default,?,?,?,?,?)");
            $stm ->bind_param("sssss",$nome,$email,$senha,$telefone,$endereco);
            $stm ->execute();
            $stm ->close();
            
        }
    }

?>