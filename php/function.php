<?php
// Age from birth date aaaa-mm-jj
function age($date)
{
    $age = date('Y') - date('Y', strtotime($date));
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}

// SQL Query
$sql = "SELECT * FROM admin WHERE id = 1";
$query = $pdo->prepare($sql);
$query->execute();
$admin = $query->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM user WHERE id = 1";
$query = $pdo->prepare($sql);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM vars WHERE id = 1";
$query = $pdo->prepare($sql);
$query->execute();
$vars = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM social WHERE name IS NOT NULL";
$query = $pdo->prepare($sql);
$query->execute();
$social = $query->fetchAll();

$sql = "SELECT * FROM social WHERE name IS NOT NULL";
$query = $pdo->prepare($sql);
$query->execute();
$social_footer = $query->fetchAll();

$sql = "SELECT * FROM competences WHERE Droite != 0";
$query = $pdo->prepare($sql);
$query->execute();
$competences_droite = $query->fetchAll();

$sql = "SELECT * FROM competences WHERE Droite = 0";
$query = $pdo->prepare($sql);
$query->execute();
$competences_gauche = $query->fetchAll();

$sql = "SELECT * FROM experiences";
$query = $pdo->prepare($sql);
$query->execute();
$experiences = $query->fetchAll();

$sql = "SELECT * FROM projets";
$query = $pdo->prepare($sql);
$query->execute();
$projets = $query->fetchAll();

$sql = "SELECT DISTINCT Lcat, Categorie FROM projets";
$query = $pdo->prepare($sql);
$query->execute();
$projets_cat = $query->fetchAll();
