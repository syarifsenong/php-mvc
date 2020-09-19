<?php
class Karyawan_model
{

    private $dbh; //databse handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        //konek db pake PDO
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllKaryawan()
    {

        $this->stmt = $this->dbh->prepare('SELECT * FROM KARYAWAN');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
