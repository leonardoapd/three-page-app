<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/slider-style.css">
    <link rel="stylesheet" href="../css/style_template.css">
    <title>A6 - Leonardo Perdomo</title>
</head>

<body>
    <?php
    // Get the guessing number from the user
    $guess = $_GET['guess'];
    // Get the random number from the session
    $random = $_SESSION['random'];
    // if the guessing number is equal to the random number, show the message "You win!"
    ?>

    <main>
        <header>
            <h1 class="titles">Assignment 6 - Leonardo Perdomo</h1>
            <p>This webapp ask the user to select a range and then ask them to guess the number that the computer choose.</p>
        </header>
        <section class="wrapper">
            <div class="form-container">
                <?php
                if ($guess == $random) {
                    echo "<h2>You win!</h2>";
                    echo "<img src='../images/award.gif' alt='You win!'>";
                } else {
                    // if the guessing number is less than the random number, show the message "Too low!"
                    if ($guess < $random) {
                        echo "<h2>Too low!</h2>";
                        echo "<img src='../images/sad.gif' alt='Too low!'>";
                    } else {
                        // if the guessing number is greater than the random number, show the message "Too high!" 
                        echo "<h2>Too high!</h2>";
                        echo "<img src='../images/sad.gif' alt='Too high!'>";
                    }
                }
                ?>
            </div>
        </section>
    </main>
    <?php
    session_destroy();
    ?>
</body>

</html>