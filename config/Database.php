<?php
class Database
{
    private static $instance = null;
    private $conn;

    private $host = "localhost";
    private $db_name = "db_inventaris";
    private $username = "root";
    private $password = "";

    private function __construct()
    {
        try {
            $this->conn =new PDO (
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4",
                $this->username,
                $this->password
                );

                $this->conn->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
        }
        catch(PDOException $e){
            die("koneksi database gagal:".$e->getMessage);
        }
    }
    public static function getInstance()
    {
        if (self::$instance === null){
            self::$instance = new Database ();
        }
        return self::$instance;
    }
    public function getConnection(){
        return $this->conn;
    }

}