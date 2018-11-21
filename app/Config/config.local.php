<?php
//
// FICHIER : app / Config / config.local.php
//

/** Nom de la base de données */
define('DB_NAME', 's3.alphacorp');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');
/** Mot de passe de la base de données MySQL. */
define('DB_PWD', 'root');
/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Préfixe de base de données pour les tables.*/
define('TABLE_PREFIX', 'bg_');

/* URL de l'application sans le nom du domaine
Par exemple, en dev si votre URL est
localhost/projet/sous-dossier/commande?id=2
alors la constante va contenir :
/projet/sous-dossier
 */
define('ROOT_URL', str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']));

/* URL complète de l'application */
define('ROOT', 'http://' . $_SERVER['SERVER_NAME'] . ROOT_URL);
?>
