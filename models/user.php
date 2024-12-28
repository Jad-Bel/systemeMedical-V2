<?php
require_once './config/db.php';

class User {
    private $connect;

    public function __construct() {
        try {
            $db = new database();
            $this->connect = $db->getdatabase();
            echo 1;
        } catch (PDOException $error) {
            die("Database connection failed. Please try again later"); 
            echo 2;
        }
    }

    public function affichierMedecin () {
        try {
            $select_sql = "SELECT * FROM users WHERE role_id = 1";
            $stmt = $this->connect->prepare($select_sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Error('Error' . $e);
        }
    }

    public function affichierPatient () {

        try {
            $select_sql = "SELECT * FROM users WHERE role_id = 2";
            $stmt = $this->connect->prepare($select_sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Error('Error' . $e);
        }
    }

    public function ajouterUser($user_nom, $user_prenom, $user_role) {
        try {
            $add_sql = "INSERT INTO users (`nom`, `prenom`, `role_id`) VALUES (:nom, :prenom, :role)";
            $stmt = $this->connect->prepare($add_sql);
            $stmt->bindParam(':nom', $user_nom);
            $stmt->bindParam(':prenom', $user_prenom);
            $stmt->bindParam(':role', $user_role);
            return $stmt->execute();
        } catch (PDOException) {
            return "An error occurred while creating the user";
        }
    }

    public function bookRes() {
        // try {
        //     $book_sql = "";
        // }
    }
}


// $user = new User();
// $result = $user->affichierMedecin();

// if ($result) {
//     var_dump($result);
// } else {
//     echo "error";
// }
// abstract class sendala {
//     public $sixe;
//     public $color;
// }

// class sendalaSba3 extends sendala {
//     public $form_sba3;
//     public function __construct($form_sba3) {
//         $this->form_sba3 = $form_sba3;
//     }
// }

// class sendala7emam extends sendala {
//     private $bzet;
// }

// $reef = new sendalaSba3('sba3_kbir');

?>



