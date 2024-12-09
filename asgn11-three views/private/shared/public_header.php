<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <link rel="stylesheet" href="../../public/css/styles.css">
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          WNC Birds
        </a>
      </h1>

      <navigation>
        <ul>
          <li><a href="<?php echo url_for('/login.php'); ?>">Log In</a></li>
          <li><a href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></li>
        </ul>
      </navigation>
    </header>
      