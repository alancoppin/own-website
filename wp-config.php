<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'frontend-website');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`tksVdK>-+b<2SrS)O~/9@gE.Q?NN70pQa1q83|G++MiT|x8.Op=CNb..(J]}}Fe');
define('SECURE_AUTH_KEY',  'QJ|jOts^K2|8VCCOzeZ95&|rg)=9:Qh#^67jlPc8z)zqfc&-@LZevHRuQ$?8Y9p~');
define('LOGGED_IN_KEY',    '^]Z.xP`53oF`1}/z3K>EDi4l#wS+p^ex%/%[f.wN=5/i56M{c<+_]vW:N!-QuBdS');
define('NONCE_KEY',        '[4mGCQMY0M%^E~[P8!lzND|SpDkC6-zzR+92~!2GR2Y2f9=Aws@NzY-!pCb23f3/');
define('AUTH_SALT',        '8RCcHnrJE!~qEuqtEp$.m<22%Vs(t`5Li,qY@=By%8V1kbHHUf({UxDg5-UAiEE~');
define('SECURE_AUTH_SALT', '0-6`Hv;z>=cr~ `]<!.t9cfMLX$,.O%XXNbi3mIl<)w_B>XlZI7hs~ot#%n0P!2B');
define('LOGGED_IN_SALT',   ' /0U9&;~e3g_LMUIF{J2bVywMcj~ P>t0yD}DPYQV4!cO$~B2N5tKn^1V23fJt=H');
define('NONCE_SALT',       'l(pd*BJ9,?Sycq&86d uD&5v&gwV]]Z`NJ.m<(x]}Rb^8KZvm`Bx5G,fbN(J+G]o');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_2018_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');


define('WP_MEMORY_LIMIT', '128M');