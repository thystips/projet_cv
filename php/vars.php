<?php
require('db.php');
require_once('function.php');

// var_dump($admin);
// var_dump($comp);
// var_dump($exp);
// var_dump($pro);
// var_dump($user);
// var_dump($vars);

// For hide something
$disno = "Display:none;";

// Age
$age = Age($user['birth_date']);

// Vars for echo
$url = $vars['url'];
$website_name = $vars['website_name'];
$logo = $vars['logo'];
$footer_logo = $vars['footer_logo'];

$user_name = $user['name'];
$work = $user['work'];
$description = $user['description'];
$nationality = $user['nationality'];
$address = $user['Address'];
$phone = $user['phone'];
$email = $user['email'];
$profile_pic = $user[ 'profile_pic'];

$cat_comp1 = $vars['cat_comp1'];
$cat_comp2 = $vars['cat_comp2'];
$description_comp1 = $vars['description_comp1'];
$description_comp2 = $vars['description_comp2'];
