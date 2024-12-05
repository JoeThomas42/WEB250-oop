<?php
  ini_set('display_errors', 1); // Enable error display
  ini_set('display_startup_errors', 1); // Display startup errors
  error_reporting(E_ALL); // Report all PHP errors

  ob_start(); // turn on output buffering

  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);
 
  require_once('functions.php');
  require_once('status-error-functions.php');
  require_once('db-credentials.php');
  require_once('database-functions.php');
  require_once('validation-functions.php');
  
  // Autoload class definitions
  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('classes/' . $class . '.class.php');
    }
  }
  spl_autoload_register('my_autoload');

  $database = db_connect();
  DatabaseObject::set_database($database);

  $session = new Session;
  
