<?php require_once('./requetes_admin.php'); ?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Page Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="icon" href="<?php echo $fav_icon ?>" type="image/x-icon" /> -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <h1>Page d'administration du CV</h1>
        <form action="./index.php" method="post">
            <button class="btn btn-danger d-block mx-auto mb-2 pull-right" type="submit"
                name="disconnect">Déconnexion</button>
        </form>

        <section class="border-top p-5">
            <h2>Informations personnelles</h2>
            <?php if (isset($_POST['Muser'])) { ?>
            <form action="admin.php" method="post">
                <?php foreach ($user as $key => $value) :
                    if ($key != 'id' && $key != 'birth_date' && $key != 'description') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'birth_date') { ?> <label><?= $key ?> :
                </label><input class="form-control my-1" type="date" name="<?= $key ?>" value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'description') { ?>
                <label><?= $key ?> : </label><textarea class="form-control my-1"
                    name="<?= $key ?>" /><?= $value ?></textarea> <br>
                <?php }
            endforeach ?>
                <button class="btn btn-success" type="submit" name="Uuser">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php
                foreach ($user as $key => $value) {
                    if ($key != 'id') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php }
            } ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Muser">Modifier</button>
            </form>
            <?php } ?>
        </section>

        <section class="border-top p-5">
            <h2>Informations pour le site</h2>
            <?php if (isset($_POST['Mvars'])) { ?>
            <form action="admin.php" method="post">
                <?php foreach ($vars as $key => $value) :
                    if ($key != 'id' && $key != 'description_comp1' && $key != 'description_comp2' && $key != 'info_contact') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'description_comp1' || $key == 'description_comp2' || $key == 'info_contact') { ?>
                <label><?= $key ?> : </label><textarea class="form-control my-1"
                    name="<?= $key ?>" /><?= $value ?></textarea> <br>
                <?php }
            endforeach ?> <button class="btn btn-success" type="submit" name="Uvars">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php
                foreach ($vars as $key => $value) :
                    if ($key != 'id') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php };
            endforeach ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mvars">Modifier</button>
            </form>
            <?php } ?>
        </section>

        <h2>Compétences</h2>
        <?php foreach ($competences as $competences) : ?>
        <br>
        <?php if ($competences['Droite'] == 0) {
            $adroite = "à gauche";
        } else {
            $adroite = "à droite";
        } ?>
        <section class="border-top p-5">
            <h3><?= $competences['Nom'] ?></h3>
            <?php if (isset($_POST['Mcompetences'])) { ?>
            <form action="admin.php" method="post">
                <?php foreach ($competences as $key => $value) {
                        if ($key != 'Droite') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" />
                <?php } else if ($key == 'Droite') { ?> <label>La compétence doit être dans la colonne de :</label>
                <input class="form-control my-1 " type="radio" name="<?= $key ?>" value="0" /><?= $cat_comp1 ?>
                <input class="form-control my-1 " type="radio" name="<?= $key ?>" value="1" /><?= $cat_comp2 ?><br>
                <?php } else if ($key == 'Pourcentage') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="number" name="<?= $key ?>"
                    value="<?= $value ?>" />
                <?php }
                } ?> <button class="btn btn-success" type="submit" name="Ucompetences">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php
                    foreach ($competences as $key => $value) :
                        if ($key != 'Droite') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li>
                <?php } else if ($key == 'Droite') { ?>
                <label>La compétence fait partie de la catégorie :</label>
                <?php if ($competences['Droite'] == 0) { ?>
                <?= $cat_comp1 ?>
                <?php } else { ?>
                <?= $cat_comp2 ?>
                <?php   }
                    };
                endforeach ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mcompetences">Modifier</button>
            </form>
            <?php } ?>
        </section>
        <?php endforeach; ?>

        <h2>Expériences</h2>
        <?php foreach ($experiences as $experiences) : ?>
        <br>
        <section class="border-top p-5">
            <h3><?= $experiences['nom'] ?></h3>
            <?php if (isset($_POST['Mexperiences'])) { ?>
            <form action="admin.php" method="post">
                <?php foreach ($experiences as $key => $value) {
                        if ($key != 'date' && $key != 'description') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" />
                <?php } else if ($key == 'description') { ?> <label><?= $key ?> : </label><textarea
                    class="form-control my-1" name="<?= $key ?>" /><?= $value ?></textarea><br>
                <?php } else if ($key == 'date') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="date" name="<?= $key ?>"
                    value="<?= $value ?>" />
                <?php }
                } ?> <button class="btn btn-success" type="submit" name="Uexperiences">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php foreach ($experiences as $key => $value) : ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php endforeach ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mexperiences">Modifier</button>
            </form>
            <?php } ?>
        </section>
        <?php endforeach; ?>

        <section class="border-top p-5">
            <h2>Projets</h2>
            <?php if (isset($_POST['Mprojets'])) { ?>
            <form action="admin.php" method="post">
                <?php foreach ($projets as $key => $value) : ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php endforeach ?>
                <button class="btn btn-success" type="submit" name="Uprojets">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php foreach ($projets as $key => $value) : ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php endforeach ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mprojets">Modifier</button>
            </form>
            <?php } ?>
        </section>

        <section class="border-top p-5">
            <h2>Réseaux sociaux</h2>
            <?php if (isset($_POST['Msocial'])) { ?>
            <form action="admin.php" method="post">
                <?php foreach ($social as $key => $value) : ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php endforeach ?>
                <button class="btn btn-success" type="submit" name="Usocial">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php foreach ($social as $key => $value) : ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php endforeach ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mprojets">Modifier</button>
            </form>
            <?php } ?>
        </section>

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/jquery.form.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </body>

</html>
