<?php
    class conexion{
        protected $db;
        private $driver  ="mysql";
        private $host = "localhost";
        public $based = "acomertipico_2";
        private $usuarios = "root";
        private $password = "";

        public function __construct()
        {
            try {
                $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->based}",
                $this->usuarios, $this->password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al conectarse a la base de datos" .$e->getMessage();
            }
        }
    }




?>