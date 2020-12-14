<!DOCTYPE html>
<html lang="en">
    <?php $title = "Assignment 3" ?>
    <?php include "includes/header.php" ?>
<body>
    <?php include "includes/nav.php" ?>

    <?php
        $word1 = $_POST["word1"];
        $word2 = $_POST["word2"];
        $word3 = $_POST["word3"];

        if(empty($word1) or empty($word2) or empty($word3)) {
            echo "Er zijn minimaal 3 woorden nodig!";
        } else {
        echo '<div class="mixedwords">';
        echo "$word1 $word2 $word3 <br>";
        echo "$word2 $word1 $word3 <br>";
        echo "$word3 $word2 $word1 <br>";
        echo '</div>';
        }
        
    ?>
</body>
</html>