<?php
require_once "../config/db.php";

class User {
    public $nom;
    public $prenom;
    public $type_utilisateur;
    private $connect;

    public function __construct() {
        try {
            $db = new database();
            $this->connect = $db->getdatabase();
        } catch (PDOException $error) {
            die("Database connection failed. Please try again later"); 
        }
    }

        public function afficherNomComplet() {
        return $this->prenom . ' ' . $this->nom;
    }
}

