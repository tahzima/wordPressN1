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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Sm~QiwKk86lsP6WWBp`T:zViYkI^97S*KIIAy&8EFx<WA!Tc$zk:/JFZ#KK)``n2' );
define( 'SECURE_AUTH_KEY',  'h#f%6y|z,5)?E1bu6>ISxEt3_.~S@6B?ycvUrXZ||_+kn=rmKg#pzmT^n$>e4DXo' );
define( 'LOGGED_IN_KEY',    '$Gn.Eg*v%YzlVN)<5Z69-;VhfQMXH8t?!5Sn}S$NA;hZu#,YY{7I^LIuQ#Xn3b[x' );
define( 'NONCE_KEY',        'od[~C-0$^+i+$P3mue4b35C_2U+mi<4_!gU!Nv<[AHJv@Q9>6_LAf{T.g3QspN.n' );
define( 'AUTH_SALT',        '4[<2m5=kK,/ZBq/c}B>Cs c@+HiID_b>|7;BV^6_3?.t9fTHm03:SiB(C/g#,#oh' );
define( 'SECURE_AUTH_SALT', 'Eu:l24AYKZi@7`!f!PvHHm`+|j!R4St,.xXcA/Wyw$ZSGvN1,(uyJ?p4;19=(&rr' );
define( 'LOGGED_IN_SALT',   '&_dhyj<I^.jB%.BvV*HDe^Qq[`>>RF6IRJ6gat8<:SSTi3[V)5@g/s`+-A^!3iAQ' );
define( 'NONCE_SALT',       '&&)JBx)qcT/ESLT^}xj3JL&mdEGOL-&MR[)aF;LCM {w!ZTYV@hsFs$-x72x`M7L' );
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
