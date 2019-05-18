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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'o@?K2%>}%R#7pt7Plbt{6KGh2oh%-o:P6{v?]=g]X&&nr=(p?oA?P,)&4^fJs=N_');
define('SECURE_AUTH_KEY',  'v@xG,7T8#/J$5+_{k+aD7:(s&UEjc,~z+pl?*7-pcNToeG3c1GAO=bK_K59/aS-}');
define('LOGGED_IN_KEY',    '.5}i~|(us)QgU$GMMWu-n8Navfpww$[/IdC+%=<d<nz+I-6EKw{Z0wGHP mV&8W(');
define('NONCE_KEY',        'MqtTIS<32~X|8~i7o]^rD-OcNbQDN&~?/{*:kV(j?Td%MlN]!-ghW$nPQhOynX45');
define('AUTH_SALT',        '|1&?RrN-j(:/LQLD21Q#FT|#e|==nA]a*ptb3A/wM,i&JFTFG~]uAG<LH_1L{I$A');
define('SECURE_AUTH_SALT', 'j^+vIxcbCa39W%-0PJa|IcgJ3rnFe|[+mIFvAz<0KAcZruXu1)}EpD7T(FcTHBVY');
define('LOGGED_IN_SALT',   'jfh%|(s@x-GUBXhi*071(YS;[&jc5L<S#qli<@L@hdCIiCp:MvXcIiv^*D ~O,8{');
define('NONCE_SALT',       'k>Oa%7<X@6F;oC5alSsjlKCFQ`uis|+7Q.-HB{Nx;2nBodDR1+X(i-L|?oD`=#i3');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
