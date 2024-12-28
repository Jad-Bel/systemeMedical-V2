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
}


// $user = new User();
// $result = $user->ajouterUser('taha', 'jaiti', '1');

// if ($result) {
//     echo "user ajouter";
// } else {
//     echo "error";
// }
?>
