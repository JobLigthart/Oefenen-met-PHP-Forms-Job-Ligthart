<!DOCTYPE html>
<html lang="en">
    <?php $title = "SimpelLabel.php" ?>
    <?php include "includes/header.php" ?>
<body>
    <?php include "includes/nav.php" ?>
    <?php 
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $adressline = $_POST["adressline"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    if(empty($name) or empty($surname) or empty($adressline) or empty($city) or empty($country)) {
        echo "Onvoldoende invoer aanwezig om label te maken!";
    } else {
        echo '<div class="label">';
        echo "$name $surname <br>";
        echo "$adressline <br>";
        echo "$city <br>";
        echo "$country <br>";
        echo "</div>";
    }
    
    ?>
    
</body>
</html>