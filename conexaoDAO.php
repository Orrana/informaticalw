<?php

    class Conexao{
       
        

        function conection(){
            $MYSQL_HOST='localhost';
            $MYSQL_USER = 'root' ;
            $MYSQL_PASSWORD = '1234';
            $MYSQL_DB_NAME = 'informaticalw';
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
            $stm->bindParam(":senha",$senha);
            $stm->execute();
            $users = $stm->fetchAll(PDO::FETCH_ASSOC);    
            
            if (count($users)<0) {
                echo "<script> if(!confirm('Senha ou Email incorretos')){
                    location.href='index.html';
                }else{
                    location.href='index.html';
                } </script>";
                exit;
            }

            $user = $users[0];
            return $user;
        }
    }
    
?>