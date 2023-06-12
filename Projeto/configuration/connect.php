<?php
    define('HOST','localhost');
    define('DATABASENAME','MVC');
    define('USERNAME','root');
    define('PASSWORD','');
    
    class Connect {
        protected $connection;

        function __construct() {
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USERNAME,PASSWORD);
            }
            catch (PDOException $e) {
                echo "Erro ao conectar no Banco: ".$e->getMessage();
                die();
            }
        }
    }
?>

