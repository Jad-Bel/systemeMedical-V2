<?php
// Include the model files
require_once 'models/user.php';

    $user = new User();
    $medecins = $user->affichierMedecin();
    $patients = $user->affichierPatient();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();
    $addUser = $user->ajouterUser(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['role']
    );
    if ($addUser === true) {
        // echo "user ajouter";
        header('location: index.php');
        exit;
    } else {
        echo "error";
    }

    $bookRes = $user->bookRes(
        $_POST['patient'],
        $_POST['medecin'],
        $_POST['date']
    );

    if ($bookRes) {
        header('location: index.php');
        exit;
    } else {
        echo 'error';
    }
    exit;
}

// Include the view
include 'views/index.view.php';

