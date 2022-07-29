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
    // Store the range of the sliders in the session
    $_SESSION['range'] = array(
        'min' => $_GET['min'],
        'max' => $_GET['max']
    );
    // Generate a random number between the range
    $random = rand($_SESSION['range']['min'], $_SESSION['range']['max']);
    // Store the random number in the session
    $_SESSION['random'] = $random;
    ?>
    <main>
        <header>
            <h1 class="titles">Assignment 6 - Leonardo Perdomo</h1>
            <p>This webapp ask the user to select a range and then ask them to guess the number that the computer choose.</p>
        </header>
        <section class="wrapper">
            <!-- Form for the user guess the random number -->
            <form class="form-container" action="show_result.php" method="get">
                <h2>Guess the number:</h2>
                <input class="form-inputs" type="number" name="guess" id="guess" min="<?php echo $_SESSION['range']['min']; ?>" max="<?php echo $_SESSION['range']['max']; ?>" required>
                <input class="button-sub button buttons" type="submit" value="Guess">
            </form>
        </section>
    </main>
</body>

</html>