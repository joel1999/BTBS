<?php
/** @var mysqli $db */
include "include/Connection.php";
//include "Validation/Server_Validation.php";

//als submit
if(isset($_POST['submit'])){
    $naam=htmlentities($_POST['naam']);
    $telefoonnummer=htmlentities($_POST['telefoonnummer']);
    $taco=htmlentities($_POST['taco']);
    $delivery=htmlentities($_POST['delivery']);
    $adres=htmlentities($_POST['adres']);

    $sql="INSERT INTO bestelling( naam, telefoonnummer, taco, delivery,adres) VALUES ('$naam','$telefoonnummer','$taco','$delivery','$adres')";
    $result=mysqli_query($db,$sql);
    if ($result){
        header('Location: index.php');
//        header('Location: overzicht.php');
    }else{
        die(mysqli_error($db));
    }
    //Close connection
    mysqli_close($db);

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <!--    stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--    icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--    bulma bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
    <!--    javascript-->
    <link rel="script" href="js.js">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.html">
            <img src="img/LBS.png" alt="B">
        </a>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.html">
                Home
            </a>
            <a class="navbar-item" href="#News">
                News
            </a>
            <a class="navbar-item" href="#Overmij">
                Over mij
            </a>
            <a class="navbar-item" href="#Contact">
                Contact
            </a>
            <a class="navbar-item" href="#">
                <ion-icon name="search-outline"></ion-icon>
            </a>

            <div class="navbar-end">
                <div class="navbar-item">
                    <a href="Security/login.php"> <ion-icon name="person-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--<div class="container px-4">-->
<div class="container ">
    <h1 class="title mt-4">Birria bestelling</h1>
    <form action="klant_overzicht.php" method="post">
        <div class="field">
            <label class="label">Naam</label>
            <div class="control">
                <label>
                    <input class="input" type="text" placeholder="naam" name="naam">
                </label>
            </div>
        </div>
        <div class="field">
            <label class="label">Telefoonnummer</label>
            <div class="control">
                <label>
                    <input class="input" type="number" placeholder="telefoonnummer" name="telefoonnummer">
                </label>
            </div>
        </div>

        <div class="field">
            <label class="label">Taco's</label>
            <div class="control">
                <label>
                    <input class="input" type="text" placeholder="taco" name="taco">
                </label>
            </div>
        </div>

        <div class="field ">
                <label class="label" for="Delivery">Delivery Of Afhaal</label>
            <div class="control">
<!--                <label>-->
<!--                    <input type="checkbox" name="delivery">-->
<!--                </label>-->

<!--                <label for="Delivery" class="label" >Delivery Of Afhaal</label>-->
<!--                <label for="Delivery">Delivery Of Afhaal</label>-->
                <select name="Delivery" id="">
                    <option value="" selected="selected" disabled>Kies manier:</option>
                    <option value="delivery">delivery</option>
                    <option value="afhaal">afhaal</option>
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">Adres</label>
            <div class="control">
                <label>
                    <input class="input" type="text" placeholder="adres" name="adres">
                </label>
            </div>
        </div>

        <div class="control">
            <div class="control">
                <button class="button is-primary " name="submit" type="submit">Submit</button>
            </div>
        </div>

    </form>
</div>
</body>
<footer>
    <section class="content has-text-centered">
        <section class="socialmedia">
            <a href="https://www.instagram.com/j.ignacius"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100010094556577"><i class="fa fa-facebook-official"></i></a>
            <a href="https://youtube.com/channel/UC1FyyqvIHMtRCOOtnsJID4g"><i class="fa fa-youtube"></i></a>
        </section>

        <p>
            The source code is licensed <strong>Joel</strong>
        </p>
    </section>
</footer>
</html>