<?php
// index.php

// Set the page title before including header.php
$pageTitle = "Welcome to My School Projects";

// Include the header
include 'includes/header.php';
?>
    <h2>Assignments</h2>
    <ul class="assignment-list">
        <?php
        // Dynamically generate links to assignments asgn01 to asgn10
        for ($i = 1; $i <= 10; $i++) {
            // Format the assignment number with leading zero (e.g., asgn01)
            $assignment = 'asgn' . str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<li><a href=\"{$assignment}.php\">Assignment {$i}</a></li>";
        }
        ?>
    </ul>
<?php
// Include the footer
include 'includes/footer.php';
?>
