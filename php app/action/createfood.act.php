<?php
echo "one";

if (isset($_POST["createFood_submit"])) {

    $foodName = $_POST["foodName"];
    $foodBuff = $_POST["foodBuff"];
    $foodBuffStat = $_POST["foodBuffStat"];
    $foodDebuff = $_POST["foodDebuff"];
    $foodDebuffStat = $_POST["foodDebuffStat"];
    $foodFlavorText = $_POST["foodFlavorText"];
    echo "variables pulled from post";
    require_once "dbh.inc.php";
    require_once "./functions.php";
    echo "db loaded";
    echo $foodFlavorText;
    header("location: ../createfood.php");
  
    
} 
else {
    header("<location: ./createfood.php>");
}
createfood($conn, $foodName, $foodFlavorText, $foodBuff, $foodBuffStat, $foodDebuff, $foodDebuffStat);

echo "datass";
 

