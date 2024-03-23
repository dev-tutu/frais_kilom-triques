<?php


    class Database {
        
        private $servername;
        private $username;
        private $password;
        private $dbname;
        protected $conn;

        public function __construct($servername, $username, $password, $dbname) {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }

        public function connect() {
            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }

        public function disconnect() {
            $this->conn = null;
        }
    }

?>