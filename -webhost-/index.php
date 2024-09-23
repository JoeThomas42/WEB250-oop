<?php
// index.php

$pageTitle = "Welcome to My School Projects";

include 'includes/header.php';
?>
    <h2>Assignments</h2>
    <ul class="assignment-list">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $assignment = 'asgn' . str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<li><a href=\"{$assignment}.php\">Assignment {$i}</a></li>";
        }
        ?>
    </ul>
<?php

include 'includes/footer.php';
?>
