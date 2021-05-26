<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|<RacZ_gvRBG7*!+Q)+y}~zYVqc|5{C-]rvt3#L%YA7D.TiHWMA}}w!9m+9W}~vf');
define('SECURE_AUTH_KEY',  '+pD/Dy/z] BF$k-[^:%#geLd&PG=Rg=;lH4_/,00[Z<:EyEY0&/7-j_5W*K_@l;a');
define('LOGGED_IN_KEY',    'S}rqz8BRa-3Bm8r7}qTejeCG&*LJv4x-w&)S-Cw(=$A/{Tn/G<C)j?U7$jq-K7K,');
define('NONCE_KEY',        'q-!YFA;f>,c[O.w9mXwP_w1zS2Fz:_|.&jAR`C},ZRKmp>V%Pz!wmquk+UUD^cg3');
define('AUTH_SALT',        '$U6mh7TNO/6 )=]O/eRf.jcKRc,+D2m08e%k<f;|!i (nhfPAm./<=V|^s0Z%geE');
define('SECURE_AUTH_SALT', 'Lgm1Jw%O-r=h`7k |PbWQ}$)s/&#*3cV@?-)N/hP]1Wd]L||F.e`~UY}$FPj,b^S');
define('LOGGED_IN_SALT',   'Ub,6w3(koBqRh<M_MsQ^w]y%aD1?iEyMMU2`(kK,e!%*M^-O(%mwQP/?mpZXNqTs');
define('NONCE_SALT',       '9V@hM1{>_4JzFWRRpd=pd<-I|v<|ifrORVWSdJy(m{5!(N|Q1DFiV dhI[l5iZ.8');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'ALTERNATE_WP_CRON', true);

/**
 * Backup path for WordPress Backup plugin
 */
define( 'HMBKP_PATH', '/var/www/html/wp-content/backupwordpress-9a736b2682-backups');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
