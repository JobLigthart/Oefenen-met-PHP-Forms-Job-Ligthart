<!DOCTYPE html>
<html lang="en">
    <?php $title = "Assignment 3" ?>
    <?php include "includes/header.php" ?>
<body>
    <?php include "includes/nav.php" ?>

    <div class="assignment-3-box">
    <form action="mixwords.php.php" method="post">
        <label for="">Woord 1:</label>
        <input type="text" name="word1" id="" required><br>
        <label for="">Woord 2:</label>
        <input type="text" name="word2" id="" required><br>
        <label for="">Woord 3:</label>
        <input type="text" name="word3" id="" required><br>
        <input type="submit" value="Mixen">
    </form>
    </div>
    
</body>
</html>