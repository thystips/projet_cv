<?php
require_once('db.php');
require_once('function.php');

// For display:none
global $display;

// Vars for echo
$url = $vars['url'];
$website_name = $vars['website_name'];
$logo = $vars['logo'];
$footer_logo = $vars['footer_logo'];
$fav_icon = $vars['fav-icon'];

$age = Age($user['birth_date']);
$user_name = $user['name'];
$work = $user['work'];
$description = $user['description'];
$nationality = $user['nationality'];
$address = $user['Address'];
$phone = $user['phone'];
$email = $user['email'];
$profile_pic = $user['profile_pic'];
$lien_cv = $user['lien_cv'];

$cat_comp1 = $vars['cat_comp1'];
$cat_comp2 = $vars['cat_comp2'];
$description_comp1 = $vars['description_comp1'];
$description_comp2 = $vars['description_comp2'];
$info_contact = $vars['info_contact'];
