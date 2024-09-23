<?php
// includes/header.php

// Ensure that a page title is set; otherwise, use a default title
if (!isset($pageTitle)) {
    $pageTitle = "My School Projects";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
