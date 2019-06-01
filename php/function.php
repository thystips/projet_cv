<?php
// Calculate l'âge from birth date aaaa-mm-jj
function age($date)
{
    $age = date('Y') - date('Y', strtotime($date));
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}

// SQL Query
$admin_sql = "SELECT * FROM admin WHERE id = 1";
$user_sql = "SELECT * FROM user WHERE id = 1";
$vars_sql = "SELECT * FROM vars WHERE id = 1";
$comp_sql = "SELECT * FROM competences";
$exp_sql = "SELECT * FROM experiences";
$pro_sql = "SELECT * FROM projets";
$social_sql = "SELECT * FROM social";

$admin_q = $pdo->Query($admin_sql);
$user_q = $pdo->Query($user_sql);
$vars_q = $pdo->Query($vars_sql);
$comp_q = $pdo->Query($comp_sql);
$exp_q = $pdo->Query($exp_sql);
$pro_q = $pdo->Query($pro_sql);
$social_q = $pdo->Query($social_sql);

$admin = $admin_q->fetch();
$user = $user_q->fetch();
$vars = $vars_q->fetch();
$comp = $comp_q->fetch();
$exp = $exp_q->fetch();
$pro = $pro_q->fetch();
$social = $social_q->fetch();
