<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';

    echo '<p>Initial Bird instance count: ' . Bird::$instanceCount . '</p>';

    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $flyCatcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $flyCatcher->name . ' on breeding grounds is "' . $flyCatcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $flyCatcher->name . " " . $flyCatcher->canFly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->canFly() . ".</p>";

    echo '<p>Bird instance count after creating Bird, FlyCatcher, and Kiwi: ' . Bird::$instanceCount . '</p>';

    $newBird = Bird::create();
    $newFlyCatcher = YellowBelliedFlyCatcher::create();
    $newKiwi = Kiwi::create();

    echo '<p>Bird instance count after using create() method: ' . Bird::$instanceCount . '</p>';
?>
    </body>
</html>

