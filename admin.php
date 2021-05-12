<?php

// Les champs sont-ils vides ? Si oui on redirige et on arrête le script
if (empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: index.php');
    exit();
}

// if ($_POST['username'] === 'admin' && $_POST['password'] === 'banana') {
//     require 'admin.phtml';
// } else {
//     header('Location: index.php');
//     exit();
// }

// Les identifiants sont-ils erronés ? Si oui on redirige et on arrête le script
if ($_POST['username'] !== 'admin' || $_POST['password'] !== 'banana') {
    header('Location: index.php');
    exit();
}

// Affichage de la page html
require 'admin.phtml';


// PASSEWORD EXEMPLE 

// // Simulation de données venant de la base de données
// $credentials = [
//     'username' => 'admin',
//     'password' => password_hash('banana', PASSWORD_BCRYPT)
// ];

// var_dump($credentials['password'] === password_hash('banana', PASSWORD_BCRYPT));
// exit();

// // Les champs sont-ils vides ? Si oui on redirige et on arrête le script
// if (empty($_POST['username']) || empty($_POST['password'])) {
//     header('Location: index.php');
//     exit();
// }

// // if ($_POST['username'] === 'admin' && $_POST['password'] === 'banana') {
// //     require 'admin.phtml';
// // } else {
// //     header('Location: index.php');
// //     exit();
// // }

// // Les identifiants sont-ils erronés ? Si oui on redirige et on arrête le script
// if ($_POST['username'] !== $credentials['username'] || password_verify($_POST['password'], $credentials['password'])) {
//     header('Location: index.php');
//     exit();
// }

// // Affichage de la page html
// require 'admin.phtml';