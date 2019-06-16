<?php
require_once('../php/vars.php');

// Select compétences
$sql = "SELECT * FROM competences";
$query = $pdo->prepare($sql);
$query->execute();
$competences = $query->fetchAll();

// User
if (isset($_POST['Uuser'])) {
    $sql = "UPDATE user SET name = ?, work = ?, description = ?, profile_pic = ?, email = ?, Address = ?, phone = ?, nationality = ? , birth_date = ? WHERE id = 1";
    $query = $pdo->prepare($sql);
    $query->execute([
        $_POST['name'],
        $_POST['work'],
        $_POST['description'],
        $_POST['profile_pic'],
        $_POST['email'],
        $_POST['Address'],
        $_POST['phone'],
        $_POST['nationality'],
        $_POST['birth_date']
    ]);
};

// Vars
if (isset($_POST['Uvars'])) {
    $sql = "UPDATE user SET logo = ?, footer_logo = ?, fav-icon = ?, website_name = ?, url = ?, cat_comp1 = ?, cat_comp2 = ?, description_comp1 = ? , description_comp2 = ?, info_contact = ? WHERE id = 1";
    $query = $pdo->prepare($sql);
    $query->execute([
        $_POST['logo'],
        $_POST['footer_logo'],
        $_POST['fav-icon'],
        $_POST['website_name'],
        $_POST['url'],
        $_POST['cat_comp1'],
        $_POST['cat_comp2'],
        $_POST['description_comp1'],
        $_POST['description_comp2'],
        $_POST['info_contact']
    ]);
};

// Compétences
if (isset($_POST['Ucompetences'])) {
    $array = [
        "id"            =>  $_POST['id'],
        "Nom"           =>  $_POST['Nom'],
        "Niveau"        =>  $_POST['Niveau'],
        "Pourcentage"   =>  $_POST['Pourcentage'],
        "Droite"        =>  $_POST['Droite']
    ];
    $sql = "UPDATE competences SET id = :id, Nom = :Nom, Niveau = :Niveau, Pourcentage = :Pourcentage, Droite = :Droite  WHERE id = :id";
    $query = $pdo->prepare($sql);
    $$query->execute($array);
};

// Expériences
if (isset($_POST['Uexperiences'])) {
    $array = [
        "id"           =>  $_POST['id'],
        "lettre"       =>  $_POST['lettre'],
        "date"         =>  $_POST['date'],
        "nom"          =>  $_POST['nom'],
        "Lieu"         =>  $_POST['Lieu'],
        "description"  =>  $_POST['description']
    ];
    $sql = "UPDATE experiences SET lettre = :lettre, date = :date, nom = :nom, Lieu = :Lieu, description = :description  WHERE id = :id";
    $query = $pdo->prepare($sql);
    $$query->execute($array);
};

// Projet
if (isset($_POST['Uprojets'])) {
    $array = [
        "id"           =>  $_POST['id'],
        "Nom"          =>  $_POST['Nom'],
        "Description"  =>  $_POST['Description'],
        "Categorie"    =>  $_POST['Categorie'],
        "Lcat"         =>  $_POST['Lcat'],
        "Image"        =>  $_POST['Image']
    ];
    $sql = "UPDATE projets SET Nom = :Nom, Description = :Description, Categorie = :Categorie, Lcat = :Lcat, Image = :Image  WHERE id = :id";
    $query = $pdo->prepare($sql);
    $$query->execute($array);
};

//Social
if (isset($_POST['Usocial'])) {
    $array = [
        "id"           =>  $_POST['id'],
        "Nom"          =>  $_POST['name'],
        "Description"  =>  $_POST['lien'],
    ];
    $sql = "UPDATE projets SET name = :name, lien = :lien  WHERE id = :id";
    $query = $pdo->prepare($sql);
    $$query->execute($array);
};
