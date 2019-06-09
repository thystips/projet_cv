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
                <?php foreach ($user as $key => $value) {
                    if ($key != 'id' && $key != 'birth_date' && $key != 'description') { ?>
                <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                    value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'birth_date') { ?> <label><?= $key ?> :
                </label><input class="form-control my-1" type="date" name="<?= $key ?>" value="<?= $value ?>" /> <br>
                <?php } else if ($key == 'description') { ?>
                <label><?= $key ?> : </label><textarea class="form-control my-1"
                    name="<?= $key ?>" /><?= $value ?></textarea> <br>
                <?php }
            } ?>
                <button class="btn btn-success" type="submit" name="Uuser">Sauvegarder</button>
            </form>
            <?php } else { ?>
            <ul class="list-unstyled">
                <?php
                foreach ($user as $key => $value) {
                    if ($key != 'id') { ?>
                <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
                <?php }
            }
            ?>
            </ul>
            <form action="admin.php" method="post">
                <button class="btn btn-primary" type="submit" name="Muser">Modifier</button>
            </form>
            <?php } ?>
        </section>

        <section class="border-top p-5"></section>
        <h2>Informations pour le site</h2>
        <?php if (isset($_POST['Mvars'])) { ?>
        <form action="admin.php" method="post">
            <?php foreach ($vars as $key => $value) {
                if ($key != 'id' && $key != 'description_comp1' && $key != 'description_comp2' && $key != 'info_contact') { ?>
            <label><?= $key ?> : </label><input class="form-control my-1" type="text" name="<?= $key ?>"
                value="<?= $value ?>" /> <br>
            <?php } else if ($key == 'description_comp1' || $key == 'description_comp2' || $key == 'info_contact') { ?>
            <label><?= $key ?> : </label><textarea class="form-control my-1"
                name="<?= $key ?>" /><?= $value ?></textarea> <br>
            <?php }
        } ?> <button class="btn btn-success" type="submit" name="Uuser">Sauvegarder</button>
        </form>
        <?php } else { ?>
        <ul class="list-unstyled">
            <?php
            foreach ($vars as $key => $value) {
                if ($key != 'id') { ?>
            <li><span class="font-weight-bold"><?= $key ?> : </span><?= $value ?></li> <br>
            <?php }
        }
        ?>
        </ul>
        <form action="admin.php" method="post">
            <button class="btn btn-primary" type="submit" name="Mvars">Modifier</button>
        </form>
        <?php } ?>
        </section>
        <script src="../js/bootstrap.min.js">
        </script>
    </body>

</html>
