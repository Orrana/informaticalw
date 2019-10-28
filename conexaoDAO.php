<?php

    class Conexao{
       
        

        function conection(){

            $congif = file('config.txt');
            
            $vetor_config =[];

            foreach ($congif as $line){
                $line = trim($line);
                $vetor_config = explode(',',$line);
                
            }

            $MYSQL_HOST=$vetor_config[0];
            $MYSQL_USER =$vetor_config[1];
            $MYSQL_PASSWORD =$vetor_config[2];
            $MYSQL_DB_NAME = $vetor_config[3];
            $PDO = new PDO('mysql:host=' . $MYSQL_HOST . ';dbname=' . $MYSQL_DB_NAME, $MYSQL_USER, $MYSQL_PASSWORD);
            return $PDO;
        }

        function cadastro($nome,$email,$senha,$telefone,$endereco,$conexao){
           
            $senha1 = sha1(md5($senha));
            $sql = 'insert into c_clientes(id_cliente,nome_cliente,email_cliente,senha_cliente,telefone_cliente,endereco_cliente) values (default,:nome,:email,:senha,:telefone,:endereco)';
            $stm = $conexao->prepare($sql);
            $stm ->bindParam(':nome',$nome);
            $stm ->bindParam(':email',$email);
            $stm ->bindParam(':senha',$senha1);
            $stm ->bindParam(':telefone',$telefone);
            $stm ->bindParam(':endereco',$endereco);
            $stm -> execute();
           
            
        }

        function logar($email,$senha,$conexao){
            $senha1 = sha1(md5($senha));
            $sql = "select id_cliente,nome_cliente,telefone_cliente,endereco_cliente from c_clientes where email_cliente=:email and senha_cliente=:senha";
            $stm = $conexao->prepare($sql);
            $stm->bindParam(":email",$email);
            $stm->bindParam(":senha",$senha1);
            $stm->execute();
            $users = $stm->fetchAll(PDO::FETCH_ASSOC);    
            $user = [];
            

            $user = $users[0];
            return $user;
        }
    }
    
?>