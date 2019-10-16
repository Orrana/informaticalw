<?php

    class Conexao{
 
        function conection($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort){
           
            $connect = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
            
        }

        function cadastro($nome,$email,$senha,$telefone,$endereco,$bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort){
            $senha1 = sha1(md5($senha));
            $connect = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort);
            $stm = $connect->prepare("insert into c_clientes(id_cliente,nome_cliente,email_cliente,senha_cliente,telefone_cliente,endereco_cliente) values (default,?,?,?,?,?)");
            $stm ->bind_param("sssss",$nome,$email,$senha1,$telefone,$endereco);
            $stm -> execute();
            $stm -> close();
            
        }

        function logar($email,$senha,$bdServidor,$bdUsuario,$bdSenha,$bdDatabase,$bdPort){
            $arr=[];
            $senha1 = sha1(md5($senha));
            echo $senha1;
            $connect = new mysqli($bdServidor,$bdUsuario,$bdSenha,$bdDatabase);
            $connect->set_charset("utf8mb4");
            if ($connect) {
                echo 'Deu certo';
            }
            $stm = $connect->prepare("select id_cliente,nome_cliente,telefone_cliente,endereco_cliente from c_clientes where email_cliente=? and senha_cliente=?");
            $stm->bind_param("ss",$email,$senha1);
            $stm->execute();
            $result = $stm->get_result();
            if(!$arr) exit('No rows');
            while($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
            return($arr);
                $stm->close();
           
            
           
        }
    }
    
?>