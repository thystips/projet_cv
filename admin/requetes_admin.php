<?php
require_once('../php/vars.php');

// Select compétences
$sql = "SELECT * FROM competences";
$query = $pdo->prepare($sql);
$query->execute();
$competences = $query->fetchAll();

//UPDATE
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
    $query->execute($array);
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
    $query->execute($array);
};

// Projet
if (isset($_POST['Uprojets'])) {
    $array = [
        "id"           =>  $_POST['id'],
        "Nom"          =>  $_POST['Nom'],
        "Description"  =>  $_POST['Description'],
        "Categorie"    =>  $_POST['Categorie'],
        "Lcat"         =>  $_POST['Lcat'],
        "Image"        =>  $_POST['Image'],
        "Lien_projet"  =>  $_POST['Lien_projet']
    ];
    $sql = "UPDATE projets SET Nom = :Nom, Description = :Description, Categorie = :Categorie, Lcat = :Lcat, Image = :Image, Lien_projet = :Lien_projet  WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute($array);
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
    $query->execute($array);
};

//CREATE
// Add Compétence
if (isset($_POST['Acompetences'])) {
    $new_competence = array(
        "Nom"         => $_POST['Nom'],
        "Niveau"      => $_POST['Niveau'],
        "Pourcentage" => $_POST['Pourcentage'],
        "Droite"      => $_POST['Droite']
    );
    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "competences",
        implode(", ", array_keys($new_competence)),
        ":" . implode(", :", array_keys($new_competence))
    );
    $query = $pdo->prepare($sql);
    $query->execute($new_competence);
};

// Add Experience
if (isset($_POST['Aexperiences'])) {
    $new_experience = array(
        "lettre"       => $_POST['lettre'],
        "date"         => $_POST['date'],
        "nom"          => $_POST['nom'],
        "Lieu"         => $_POST['Lieu'],
        "description"  => $_POST['description']
    );
    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "experiences",
        implode(", ", array_keys($new_experience)),
        ":" . implode(", :", array_keys($new_experience))
    );
    $query = $pdo->prepare($sql);
    $query->execute($new_experience);
};

//Add Projet
if (isset($_POST['Aprojets'])) {
    $new_projet = array(
        "Nom"          => $_POST['Nom'],
        "Description"  => $_POST['Description'],
        "Categorie"    => $_POST['Categorie'],
        "Lcat"         => $_POST['Lcat'],
        "Image"        => $_POST['Image'],
        "Lien_projet"  => $_POST['Lien_projet']
    );
    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "projets",
        implode(", ", array_keys($new_projet)),
        ":" . implode(", :", array_keys($new_projet))
    );
    $query = $pdo->prepare($sql);
    $query->execute($new_projet);
};

// Add Social
if (isset($_POST['Asocial'])) {
    $new_social = array(
        "name"      => $_POST['name'],
        "lien"      => $_POST['lien']
    );
    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "social",
        implode(", ", array_keys($new_social)),
        ":" . implode(", :", array_keys($new_social))
    );
    $query = $pdo->prepare($sql);
    $query->execute($new_social);
};

//DELETE
foreach ($_POST as $key => $value) {
    if (explode('-', $key)[0] == 'Dcompetences') {
        $query = $pdo->prepare("DELETE FROM competences WHERE id = ?");
        $query->execute([
            explode('-', $key)[1]
        ]);
    }
    if (explode('-', $key)[0] == 'Dexperiences') {
        $query = $pdo->prepare("DELETE FROM experiences WHERE id = ?");
        $query->execute([
            explode('-', $key)[1]
        ]);
    }
    if (explode('-', $key)[0] == 'Dprojets') {
        $query = $pdo->prepare("DELETE FROM projets WHERE id = ?");
        $query->execute([
            explode('-', $key)[1]
        ]);
    }
    if (explode('-', $key)[0] == 'Dsocial') {
        $query = $pdo->prepare("DELETE FROM social WHERE id = ?");
        $query->execute([
            explode('-', $key)[1]
        ]);
    }
}
