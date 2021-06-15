<?php

include_once 'Pokemon.php';
include_once 'Charmeleon.php';
include_once 'Pikachu.php';
$Charmeleon = new Charmeleon('Charmo');
$Pikachu = new Pikachu('Pikachu1');
$Pikachu2 = new Pikachu('Pikachu2');
$Pikachu->setName('Pika');
//$Pikachu->Attack($Charmeleon, 0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Pokebattle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col" id="pickachudiv">
            <div class="row">
                <div class="col">
                    <img class="pokemon" src="pickachu.jpg" id="pickachu">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" data-damage="50" data-pokemon="pika" class="btn btn-success btn-block Attackbtn" id="PikaAttack1">Electric Ring</button>
                </div>
                <div class="col">
                    <button type="button" data-damage="20" data-pokemon="pika" class="btn btn-warning btn-block Attackbtn" id="PikaAttack2">Pika Punch</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col" id="charmeleondiv">
                    <img class="pokemon" src="charmeleon.png" id="charmeleon">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" data-damage="10" data-pokemon="char" class="btn btn-success btn-block Attackbtn" id="Charattack1">Head Butt</button>
                </div>
                <div class="col">
                    <button type="button" data-damage="30" data-pokemon="char" class="btn btn-warning btn-block Attackbtn" id="Charattack2">Flare</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!-- Bootstrap -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="resources/scripts/script.js"></script>
<script src="script.js"></script>
</html>