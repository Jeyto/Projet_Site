<?php
//
// FICHIER : app / Config /config.php
//

// si machine=localhost alors on est en développement
if ( $_SERVER['SERVER_NAME'] === 'localhost' ) {
  include 'config.local.php';
} else {
  include 'config.prod.php';
}

/** séparateur entre dossiers */
define('DS', DIRECTORY_SEPARATOR);

define('ROOT_PATH', realpath(__DIR__ . DS . '..' . DS . '..') . DS);
define('APP_PATH', ROOT_PATH . 'app' . DS);
define('ASSETS_PATH', ROOT_PATH . 'assets' . DS);
define('STORAGE_PATH', APP_PATH . 'Storage' . DS);