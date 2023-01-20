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
//    if ($result){
//        header('Location: index.php');
////        header('Location: overzicht.php');
//    }else{
//        die(mysqli_error($db));
//    }
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

<div class="container px-4">
        <h1 class="title mt-4">klant</h1>
<!--    <h1 class="title mt-4">bestelling ID = --><?//= $Id ?><!--</h1>-->
    <section class="content">
        <ul>
            <li>Naam: <?= $naam ?></li>
            <li>telefoonnummer:<?= $telefoonnummer ?> </li>
            <li>taco: <?= $taco ?></li>
            <li>Delivery Of Afhaal: <?= $delivery ?></li>
            <li>adres: <?= $adres ?></li>

        </ul>
    </section>

</div>

<a class="button" href="create.php">Terug</a>
<a class="button" href="index.html">Home</a>

</body>
</html>
