<?php

if (isset($_POST["character_create_submit"])) {

    $charName = $_POST["charName"];
    $charTitle = $_POST["charTitle"];
    $charAge = $_POST["charAge"];
    $characterPlanet = $_POST["charPlanet"];
    $charRace = $_POST["charRace"];
    $charFlaw = $_POST["charFlaw"];
    $charAptitude = $_POST["charAptitude"];
    
    
    require_once "dbh.inc.php";
    require_once "./functions.php";
    
   
    header("location: ../createCharacter.php");
}
header("location: ../createCharacter.php");