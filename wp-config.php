<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'template' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MA,3Sbcd2Sr/21+0gP_iBSspk)sf9!zq,ARp9P`v7%N!@f_JzrR?F@316N~8Fg> ' );
define( 'SECURE_AUTH_KEY',  'W@<D*;zhKJU4x.R{tLUB4z}8<$$Hm<mfSkf0G%r6amDrKJZPyZy7F15k[_pXzj7F' );
define( 'LOGGED_IN_KEY',    ')_oYA(Ii ,jDPuz!MKm|d,-ioNf%atEBD(x:VkvKW~ PewZ*yR[2`q-}L%~**@mG' );
define( 'NONCE_KEY',        'rYE)t/m]m[wpq6I1IK*@J/SUxt9$@<A738-Ll4Epn8FxRPD%`_y1wsj-4)^{1-tO' );
define( 'AUTH_SALT',        'K5>kD3i#!{)c:yq)VTj`:=>n+[YsB$sv80bGWvh4:HvkS!QCJ`)[y+7Cs%Acuht^' );
define( 'SECURE_AUTH_SALT', 'Yu;Rcb0I&MfY`_e8{v-B~Cv]I8t=N;rQ2h/d -*UrPY*iejoCG*2ln$(=U/^;W<k' );
define( 'LOGGED_IN_SALT',   '^h/y]l7jiEh;EFHZ9z vwtHKC +:PW3-p_9?*L~!9osmcJCT23zDzG#_CF-O(ACQ' );
define( 'NONCE_SALT',       'uKH`n>G}k[>*bTMaLr;}f?1d#jaBF%@b%v>c!!IA_(W]+5iWf}d,Bg?lSWYd%=r_' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
