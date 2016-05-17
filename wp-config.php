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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gloverzfotosdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'de(;9X%T~F{J]-fk|{0%_jZC${FB23?%2ucDsr+Vy$}w#(I*[wA.x0TU}.KK{NkK');
define('SECURE_AUTH_KEY',  'jpK1a#!B~2Jou?vmiJz67UqCEu?o&IVIy}Gs-}~>NqO{.<Oj@0@y_X(%yDPp$xxB');
define('LOGGED_IN_KEY',    'GTh>zJ>0 HiGCuQ!bB~!q+ubuoZgy2#ue-iVoni0Wt<}B9U{I7P!boT$[|hhhK]K');
define('NONCE_KEY',        '8@grwx8pHtf`051]-(4pS!J9xaF`Gru)BhES6>ioIcXJg0:D+@a&+f4DBFc92ss%');
define('AUTH_SALT',        '^qwJAbI0?d8wW|44CjArOPDU 5K)p#y*88v|N]%hUayVX UQxBj.)Nj>FWdq%6gB');
define('SECURE_AUTH_SALT', 'y9=,ot #S4X*st<ffc5~HMQ:!Myo$n#brO~?p*h>AZ=e?V;Z{CB)QWdcaAn2bxnW');
define('LOGGED_IN_SALT',   '+eR1s6Ix#eciotSuCW E/y;i#RMRd^leAZh#b,K6GOv1H^f7u#~,JQnFq}Bpuj.A');
define('NONCE_SALT',       'bU@)9%H:sq+y C]{w[A<L* EH0VhbNS<>#J`a~J#]neo3D>fJvwe:CB*`d5>y!xY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
