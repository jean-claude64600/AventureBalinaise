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
define( 'DB_NAME', 'aventure' );

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
define( 'AUTH_KEY',         '0_W0`YX2AkT70D+)N?h}N2i;v&~8*&Z0e||<F%M!Me0{FkdyK#Z/rB#_?#Vj~wCy' );
define( 'SECURE_AUTH_KEY',  '6c?w(S>N>JHF=HZh!-yEn~,v~$S|b;owgoaj6_n,h16$y2&<M4S^GiV6b{5=7~f?' );
define( 'LOGGED_IN_KEY',    'Q@ = *HQOs.L7l5vFK;@J&>v[ay=$@Z EtU}%aK.Z[u]RK+NtfSK=+QA>#=PpOsH' );
define( 'NONCE_KEY',        '_$fX5=:X+KV*2]M[6gFQ_<I7rH;;J4rsl/T8f+V2Kgn`6socnu7.*EDlH16pX,N/' );
define( 'AUTH_SALT',        '4VP5[7=KK9s1zz!CT)3i78[Ig<+.8wVPOb|$j|aR}f)CZjTiCc8D:p`[3SKk5LnL' );
define( 'SECURE_AUTH_SALT', '(S#c77@|}cl?/Z.relQlG`<]*ZNeiDPxg$5*f@@~Xb Z7x$5%^iuYf.YU-x*ux!b' );
define( 'LOGGED_IN_SALT',   ';eFbd#B)C_$g)RnVWoP2.qV6n%VW#;6!/)#N5Bpv8~<[BD@Fu<!={FB ]btnA<[i' );
define( 'NONCE_SALT',       'U&f#5ZAe:pOS&wbfn[M{67s,p77.~kJ9HOp%pxc0cYCb6%S]6:2_}2pPrmKE#y)9' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
