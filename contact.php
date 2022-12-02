<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fansite.css">
    <link rel="icon" type="image/gif" href="image/logo-OM.gif" />
    <title>Nous contacter</title>
</head>

<body>
    <header>
        <?php require 'header.php' ?>
    </header>
    <main>
        <div class="contain" id="column">
            <h1>Fomulaire de Contact</h1> </br>
            <form action="tcontact.php" method="post">
                <div class="sub-contain">
                    Nom:
                    <input type="text" name="nom" minlength="2" maxlength="32" required="required"> </br>
                </div>
                <div class="sub-contain">
                    Prénom:
                    <input type="text" name="prenom" minlength="2" maxlength="32" required="required"></br>
                </div>
                <div class="sub-contain">
                    <div id="text">
                        E-Mail:
                    </div>
                    <input type="email" name="email" minlength="5" maxlength="128" required="required">
                </div> </br>
                <div class="sub-contain">
                    <div class="text">
                        Message:
                    </div>
                    <input type="textarea" name="message" style="resize: none" cols="30" rows="10" minlength="10" maxlength="512" required="required">
                    <input type="submit" name="submit" value="Envoyer"><br>
                    <?php include 'err.php' ?>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require "footer.php" ?>
    </footer>
</body>

</html>