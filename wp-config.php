<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'YoKar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rnHrc48$k@|ZJ<6Hmhu(]3{yc* 6TC();iGN]d|#>q*@T--$xW`+:+vk,9];W{$>');
define('SECURE_AUTH_KEY',  '~.<y^<4J`S%42UkQ.Y$guL&8nOy)5=65yf@Ex3+?4U$YUlv]neJ*PvrPH)A=Y{#3');
define('LOGGED_IN_KEY',    '8UWGTIGv0J.#X8. _++As^q3ujsrcv5 ,@vq}y1`|Np<Ey3__hvI2/`+Rx{HotR-');
define('NONCE_KEY',        'qsREM.|QU3/X$22OOk]zvvNttM2+Sl!V1- :@rj/|#}uTOHZ*u`?tOxZ^RWam}jP');
define('AUTH_SALT',        '$^++2L^_+RxPqc <99(_2K{Cg~9c]}4{4=!w%$W:E./9&!BUUheu|4^X.m m/LA8');
define('SECURE_AUTH_SALT', '`}==a/3+qal|7f=E,obLuQ7Jm+~:UtHm+MFWe&,qx MMo{*<SkKo4Zak?EVuL3]|');
define('LOGGED_IN_SALT',   'oanwJ-m5v=yFG;TGAX S@V$>(DGuGeSw;4 XBm8>+/cutD+ltD%XdRlH-[je}wp*');
define('NONCE_SALT',       'AO=O&x|sS/ts4duFyHI*39E|_^97WH1N?ob :A9?mp.}ysNj(P3p[cgjd7w=;+Ps');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');