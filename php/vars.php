<?php
require('db.php');
$admin_sql = "SELECT * FROM admin";
$comp_sql = "SELECT * FROM competences";
$exp_sql = "SELECT * FROM experiences";
$pro_sql = "SELECT * FROM projets";
$users_sql = "SELECT * FROM users";
$vars_sql = "SELECT * FROM vars";

$admin_q = $pdo->Query($admin_sql);
$comp_q = $pdo->Query($comp_sql);
$exp_q = $pdo->Query($exp_sql);
$pro_q = $pdo->Query($pro_sql);
$users_q = $pdo->Query($users_sql);
$vars_q = $pdo->Query($vars_sql);

$admin = $admin_q->fetch();
$comp = $comp_q->fetch();
$exp = $exp_q->fetch();
$pro = $pro_q->fetch();
$users = $users_q->fetch();
$vars = $vars_q->fetch();

// var_dump($admin);
// var_dump($comp);
// var_dump($exp);
// var_dump($pro);
// var_dump($users);
// var_dump($vars);
