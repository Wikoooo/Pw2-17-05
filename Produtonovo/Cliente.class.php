<?php
class Cliente{
    private $id;
    private $nome;
    private $email;
    private $pdo;
    
    public function GetId(){
    return $this ->id;
    }

    public function GetNome(){
        return $this ->nome;
        }
    
        public function GetEmail(){
            return $this ->email;
        
            }

            public function setNome($nome){
                $this->nome = $nome;
            }

            
            public function setEmail($email){
                $this->email = $email;
            }
        
        public function conectar(){
            /* PDO - Php Daatabase Objects
             Essa classe precisa de 3 parametros
             1 - tipo, nome e lacolaizacao do bd
            2- usuario
            3 - senha
            */
            
            try {
                $dsn = "mysqql:dbname=cliente;host=localhost";
                $dbUser = "root";
                $dbPass = "";


                $this->pdo = new PDO($dsn, $dbUser, $dbPass);
                return true;
                //code...
            }catch (\PDOException $th){
                echo "<h1>NAo consegui conectar ao banco. tente maus tarde!</h>";
            }
        }
             
 }
 