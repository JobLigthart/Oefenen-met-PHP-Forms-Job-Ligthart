

<!DOCTYPE html>
<html lang="en">
    <?php include "includes/header.php" ?>
<body>
    <?php include "includes/nav.php" ?>
    <?php 
    if(empty($_GET["invoer"])) {
        echo "Wat is het stil!";
    } else {
        echo $_GET["invoer"];
    }
    ?>
</body>
</html>