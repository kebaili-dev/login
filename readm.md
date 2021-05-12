# Exercice login

## Instructions

* Sur la page index.php, lorsque le formulaire est soumis, il est envoyé sur la page admin.php en post
* Sur la page admin.php, vérifier que le nom d'utilisateur et le mot de passe ont été saisis (existent et ne sont pas vides)
* Si nom d'utilisateur et/ou mot de passe non saisi, rediriger sur la page du formulaire (index.php)
* Si le nom d'utilisateur et mot de passe sont respectivement "admin" et "banana" on affiche la page admin.phtml avec le nom d'utilisateur
* Si les identifiants sont incorrects, rediriger vers la page du formulaire (index.php)

## Redirection
Pour rediriger vers une page, utiliser la fonction php header
```php
<?php

// Redirection vers la page index.php
header('Location: index.php');
exit();
```
CF [Doc php] (https://www.php.net/manual/fr/function.header.php#refsect1-function.header-description)

## Fonctions utiles
* isset
* empty
* header
* require