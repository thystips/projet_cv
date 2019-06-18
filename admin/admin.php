<?php require_once('./requetes_admin.php'); ?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Page Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo $fav_icon ?>" type="image/x-icon" />

        <link href="./style.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body id="id10">
        <h1>Page d'administration du CV</h1>
        <form action="./index.php" method="post">
            <button class="btn btn-danger d-block mx-auto mb-2 pull-right" type="submit"
                name="disconnect">Déconnexion</button>
        </form>

        <h2>Informations personnelles</h2>
        <section class="border-top p-5">
            <?php if (isset($_POST['Muser'])) { ?>

            <form action="admin.php" method="post">
                <?php foreach ($user as $key => $value) :
                    if ($key != 'id' && $key != 'birth_date' && $key != 'description') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'birth_date') { ?> <label><?= $key ?> :
                </label><input class="form-control my-1" type="date" name="<?= $key ?>" value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'description') { ?>
                <label><?= $key ?> : </label><textarea class="form-control my-1" name="<?= $key ?>"
                    id="<?= $key ?>" /><?= $value ?></textarea> <br>
                <?php } else if ($key == 'id') { ?>
                <input type="hidden" value="<?= $value; ?>" name="id" />
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

        <h2>Informations pour le site</h2>
        <section class="border-top p-5">
            <?php if (isset($_POST['Mvars'])) { ?>

            <form action="admin.php" method="post">
                <?php foreach ($vars as $key => $value) :
                    if ($key != 'id' && $key != 'description_comp1' && $key != 'description_comp2' && $key != 'info_contact') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'description_comp1' || $key == 'description_comp2' || $key == 'info_contact') { ?>
                <label><?= $key ?> : </label><textarea class="form-control my-1" name="<?= $key ?>"
                    id="<?= $key ?>" /><?= $value ?></textarea> <br>
                <?php } ?>
                <?php endforeach ?> <button class="btn btn-success" type="submit" name="Uvars">Sauvegarder</button>
            </form>

            <?php } else { ?>
            <ul class="list-unstyled">
                <?php
                foreach ($vars as $key => $value) :
                    if ($key != 'id') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php } else if ($key == 'id') { ?>
                <input type="hidden" value="<?= $value; ?>" name="id" />
                <?php }
            endforeach ?>
            </ul>

            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mvars">Modifier</button>
            </form>
            <?php } ?>
        </section>

        <!-- SECTION COMPETENCES -->
        <h2>Compétences</h2>
        <section class="border-top p-5">
            <?php if (isset($_POST['Mcompetences'])) { ?>
            <?php foreach ($competences as $competences) : ?>
            <br>

            <h3><?= $competences['Nom'] ?></h3>
            <form action="admin.php" method="post">
                <?php foreach ($competences as $key => $value) :
                        if ($key != 'Droite' && $key != 'Pourcentage' && $key != 'id') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" id="<?= $key ?>" />

                <?php } else if ($key == 'Droite') { ?>
                <label>La compétence doit être dans la colonne de :</label>
                <?php if ($competences['Droite'] == '0') { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $key ?>" id="<?= $key ?>" value="0" checked>
                    <label class="form-check-label">
                        <?= $cat_comp1 ?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $key ?>" id="<?= $key ?>" value="1">
                    <label class="form-check-label">
                        <?= $cat_comp2 ?>
                    </label>
                </div>
                <?php } else if ($competences['Droite'] == '1') { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $key ?>" id="<?= $key ?>" value="0">
                    <label class="form-check-label">
                        <?= $cat_comp1 ?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?= $key ?>" id="<?= $key ?>" value="1" checked>
                    <label class="form-check-label">
                        <?= $cat_comp2 ?>
                    </label>
                </div>
                <?php } ?>

                <?php } else if ($key == 'Pourcentage') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="number" name="<?= $key ?>"
                    value="<?= $value ?>" id="<?= $key ?>" />

                <?php } else if ($key == 'id') { ?>
                <input type="hidden" value="<?= $value; ?>" name="id" />
                <?php };
                endforeach ?>
                <button class="btn btn-success" type="submit" name="Ucompetences">Sauvegarder</button>
            </form>

            <?php endforeach ?>
            <?php } else if (isset($_POST['ADDcompetences'])) { ?>

            <form action="admin.php" method="post">
                <label>Nom : </label><input class="form-control my-1" type="text" name="Nom" id="Nom" />
                <label>Niveau : </label><input class="form-control my-1" type="text" name="Niveau" id="Niveau" />
                <label>Pourcentage : </label><input class="form-control my-1" type="number" name="Pourcentage"
                    id="Pourcentage" />
                <label>La compétence doit être dans la colonne de :</label>
                <input class="form-control my-1 " type="radio" name="Droite" value="0" id="Droite" />Gauche
                <input class="form-control my-1 " type="radio" name="Droite" value="1" id="Droite" />Droite
                <button class="btn btn-success" type="submit" name="Acompetences">Ajouter</button>
            </form>

            <?php } else { ?>
            <?php foreach ($competences as $competences) : ?>

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
                <button class="btn btn-danger" type="submit"
                    name="Dcompetences-<?= $competences['id'] ?>">Supprimer</button>
            </form>
            <?php endforeach; ?>
            <br>

            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="ADDcompetences">Ajouter</button>
            </form>
            <?php } ?>
        </section>


        <h2>Expériences</h2>
        <section class="border-top p-5">
            <br>
            <?php if (isset($_POST['Mexperiences'])) { ?>
            <?php foreach ($experiences as $experiences) : ?>

            <h3><?= $experiences['nom'] ?></h3>
            <form action="admin.php" method="post">
                <?php foreach ($experiences as $key => $value) {
                        if ($key != 'date' && $key != 'description' && $key != 'id') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" id="<?= $key ?>" />
                <?php } else if ($key == 'description') { ?> <label><?= $key ?> : </label><textarea
                    class="form-control my-1" name="<?= $key ?>" id="<?= $key ?>" /><?= $value ?></textarea><br>
                <?php } else if ($key == 'date') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="date" name="<?= $key ?>"
                    value="<?= $value ?>" id="<?= $key ?>" />
                <?php } else if ($key == 'id') { ?>
                <input type="hidden" value="<?= $value; ?>" name="id" /> <?php }
                                                                            } ?>
                <button class=" btn btn-success" type="submit" name="Uexperiences">Sauvegarder</button>
            </form>

            <?php endforeach; ?>
            <?php } else if (isset($_POST['ADDexperiences'])) { ?>

            <form action="admin.php" method="post">
                <label>Lettre : </label><input class="form-control my-1" type="text" name="lettre" id="lettre" />
                <label>Date : </label><input class="form-control my-1" type="date" name="date" id="date" />
                <label>Nom : </label><input class="form-control my-1" type="text" name="nom" id="nom" />
                <label>Lieu : </label><input class="form-control my-1" type="text" name="Lieu" id="Lieu" />
                <label>Description : </label><textarea class="form-control my-1" name="description"
                    id="description" /></textarea>
                <button class="btn btn-success" type="submit" name="Aexperiences">Ajouter</button>
            </form>

            <?php } else { ?>
            <?php foreach ($experiences as $experiences) : ?>

            <h3><?= $experiences['nom'] ?></h3>
            <ul class="list-unstyled">
                <?php foreach ($experiences as $key => $value) :
                        if ($key != 'id') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li>
                <?php }
                endforeach ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mexperiences">Modifier</button>
                <button class="btn btn-danger" type="submit"
                    name="Dcompetences-<?= $experiences['id'] ?>">Supprimer</button>
            </form>

            <?php endforeach; ?>
            <br>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="ADDexperiences">Ajouter</button>
            </form>
            <?php } ?>
        </section>
        <br>

        <h2>Projets</h2>
        <section class="border-top p-5">
            <?php if (isset($_POST['Mprojets'])) { ?>
            <?php foreach ($projets as $projets) : ?>
            <h3> <?= $projets['Nom'] ?> </h3>
            <?php foreach ($projets as $key => $value) : ?>
            <form action="admin.php" method="post">
                <?php if ($key != 'id') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" id="<?= $key ?>" /> <br>
                <?php } else if ($key == 'id') { ?>
                <input type="hidden" value="<?= $value; ?>" name="id" /> <?php } ?>
                <button class="btn btn-success" type="submit" name="Uprojets">Sauvegarder</button>
            </form>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php } else if (isset($_POST['ADDprojets'])) { ?>

            <form action="admin.php" method="post">
                <label>Lettre : </label><input class="form-control my-1" type="text" name="lettre" id="lettre" />
                <label>Date : </label><input class="form-control my-1" type="date" name="date" id="date" />
                <label>Nom : </label><input class="form-control my-1" type="text" name="nom" id="nom" />
                <label>Lieu : </label><input class="form-control my-1" type="text" name="Lieu" id="Lieu" />
                <label>Description : </label><textarea class="form-control my-1" name="description"
                    id="description" /></textarea>
                <button class="btn btn-success" type="submit" name="Aprojets">Ajouter</button>
            </form>

            <?php } else { ?>
            <?php foreach ($projets as $projets) : ?>
            <ul class="list-unstyled">
                <?php foreach ($projets as $key => $value) :
                        if ($key != 'id' && $key != 'Image') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php } else if ($key == 'Image') { ?>
                <li><img src="../<?= $value ?>" alt="Image_<?= $value ?>"></li>
                <?php }
                endforeach; ?>
            </ul>

            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Mprojets">Modifier</button>
                <button class="btn btn-danger" type="submit"
                    name="Dcompetences-<?= $projets['id'] ?>">Supprimer</button>
            </form>

            <?php endforeach; ?>
            <?php } ?>
            <br>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="ADDprojets">Ajouter</button>
            </form>
        </section>
        <br>

        <h2>Réseaux sociaux</h2>
        <section class="border-top p-5">
            <?php if (isset($_POST['Msocial'])) { ?>
            <?php foreach ($social as $social) : ?>

            <form action="admin.php" method="post">
                <?php foreach ($social as $key => $value) : ?>
                <?php if ($key != 'id') : ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" id="<?= $key ?>" /> <br>
                <?php endif ?>
                <?php endforeach ?>
                <button class="btn btn-success" type="submit" name="Usocial">Sauvegarder</button>
            </form>

            <?php endforeach ?>
            <?php } else if (isset($_POST['ADDsocial'])) { ?>

            <form action="admin.php" method="post">
                <label>Nom : </label><input class="form-control my-1" type="text" name="name" id="name" />
                <label>Lien : </label><input class="form-control my-1" type="text" name="lien" id="lien" />
                <button class="btn btn-success" type="submit" name="Asocial">Ajouter</button>
            </form>

            <?php } else { ?>
            <?php foreach ($social as $social) : ?>
            <ul class="list-unstyled">
                <?php foreach ($social as $key => $value) :
                        if ($key != 'id') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li>
                <?php } else if ($key == 'id') { ?>
                <li><a href="https://<?= $social['lien'] ?>"><i class="fa fa-<?= $social['name'] ?>"></i></a></li>
                <?php }
                endforeach ?>
            </ul>

            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Msocial">Modifier</button>
                <button class="btn btn-danger" type="submit" name="Dcompetences-<?= $social['id'] ?>">Supprimer</button>
            </form>
            <?php endforeach; ?>
            <?php } ?>
            <br>

            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="ADDsocial">Ajouter</button>
            </form>
            <br>
        </section>

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/jquery.form.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </body>

</html>
