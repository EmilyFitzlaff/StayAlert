<?php

    /**
     * @var Connection classe para conexão com o banco de dados
     */
    Class Conexao extends PDO {
        public static function Conectar() {
            $user = "root";
            $password = "";
            $host = "127.0.0.1";
            $port = 3306;
            $dbname = "stayalert";
            
            $connection = new PDO("mysql:host={$host}; 
                                         port={$port}; 
                                         dbname={$dbname}; 
                                         user={$user}; 
                                         password={$password}");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
    }

    function executeQuery($sql) {
        $stmt = Conexao::Conectar()->prepare($sql);
        return $stmt->execute();
    }
?>