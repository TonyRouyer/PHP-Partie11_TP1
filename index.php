<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 11 Calculatrice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <div class="container">
          <div class="row d-flex flex-column text-center">
            <h1>Une calculatrice en PHP</h1>
            <form action="index.php" method="post">
                <div class="form-group">
                    <input type="text" name="chiffre1" value="<?php if (isset($_POST['chiffre1'])) { echo $_POST['chiffre1'];}else { echo '0';} ?>" />
                    <input type="text" name="chiffre2" value="<?php if (isset($_POST['chiffre2'])) { echo $_POST['chiffre2'];}else { echo '0';} ?>" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="addition" value="+" />
                    <input type="submit" class="btn btn-primary" name="soustraction" value="-" />
                    <input type="submit" class="btn btn-primary" name="multiplication" value="*" />
                    <input type="submit"class="btn btn-primary" name="division" value="/" />
                    <input type="submit" class="btn btn-danger" name="raz" value="reset" />
                </div>
            </form>
            <p>Résultat : </p>
            <?php
            if (isset($_POST['addition'])) { ?>
                <p><?php echo ($_POST['chiffre1'] + $_POST['chiffre2']) ?></p>
            <?php }
            if (isset($_POST['soustraction'])) { ?>
                <p><?php echo ($_POST['chiffre1'] - $_POST['chiffre2']) ?></p>
            <?php }
            if (isset($_POST['multiplication'])) { ?>
                <p><?php echo ($_POST['chiffre1'] * $_POST['chiffre2']) ?></p>
            <?php }
            if (isset($_POST['division'])) { ?>
                <p><?php echo ($_POST['chiffre1'] / $_POST['chiffre2']) ?></p>
            <?php }
            if (isset($_POST['raz'])) { ?>
                <p><?php $_POST['chiffre1'] = 0; $_POST['chiffre2'] = 0  ?></p>
            <?php } ?>
          </div>
      </div>
  </body>
</html>
