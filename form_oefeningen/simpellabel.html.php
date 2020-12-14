<!DOCTYPE html>
<html lang="en">
    <?php $title = "SimpelLabel.html" ?>
    <?php include "includes/header.php" ?>
<body>
    <?php include "includes/nav.php" ?>

    <div class="assignment-2-box">
    <form action="simpellabel.php.php" method="post">
    <label for="name">Naam:</label>
    <input type="text" name="name" id="" required>
    <label for="surname">Achternaam:</label>
    <input type="text" name="surname" id="" required>
    <label for="adressline">Adress:</label>
    <input type="text" name="adressline" id="" required>
    <label for="city">Stad:</label>
    <input type="text" name="city" id="" required>
    <label for="country">Land:</label>
    <input type="text" name="country" id="" required><br>
    <input type="submit" value="Label maken" class="submit">
    </form>
    </div>
    
</body>
</html>