<?php

class M_siswa{  

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=db_siswa_r1';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllSiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM tb_siswa');
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}