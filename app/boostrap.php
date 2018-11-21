<?php
//
// Fichier: app\bootstrap.php
//


// charger les fichiers de configuration globale + les librairies
include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/Config/config.php';
include __DIR__ . '/Libs/functions.php';

///////////////////////////////////////////////
/// Intégration des composants ////////////////
///   - errors
///   - twig
///   -router
///////////////////////////////////////////////


// errors
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//twig
// spécifier le dossier des templates twig
$loader = new Twig_Loader_Filesystem( APP_PATH . 'views' );
// paramètres de configuration
$twig = new Twig_Environment( $loader, array(
  'cache' => STORAGE_PATH . 'twig' . DS . 'cache',
  'strict_variables ' => false,
  'debug' => true
));
// composant additionnel pour le debug
$twig->addExtension(new Twig_Extension_Debug());
// composant additionnel pour tronquer les textes
$twig->addExtension(new Twig_Extensions_Extension_Text());
// ajouter une fonction url() dans Twig
$function = new Twig_Function( 'url', function ( $sz ) {
  return ROOT . '' . $sz;
});
$twig->addFunction($function);
// ajouter une fonction chr() dans Twig
$twig->addFunction(
  new Twig_Function( 'chr', function ( $i ) {
    return chr( 64+$i );
  })
);

// Le ROUTAGE
require 'bootstrap-router.php';