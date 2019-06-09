<?php
require_once('../php/vars.php');

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
