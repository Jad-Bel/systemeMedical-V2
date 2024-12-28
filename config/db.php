<?php 


class Database {
    private $localHost = 'localhost';
    private $username = 'root';
    private $password = 'Hitler20.';
    private $dbName = 'sysmedical';
    private $connect;

    public function getdatabase() {
        try {
            $dns = "mysql:host={$this->localHost}; dbname={$this->dbName}";
            $this->connect = new PDO($dns, $this->username, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 1;
        } catch (PDOException) {
            echo "errur de conection";
        }
        return $this->connect;
    } 
}

// $data = new Database();

// $resutl = $data->getdatabase();

// if ($resutl) {
//     echo 1;
// } else {
//     echo 2;
// }
