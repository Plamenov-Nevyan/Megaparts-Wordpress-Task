<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/jOsA^($f 8+97v/|q((9pi*0Ij-iCb*vXXrXw:6}%1qQhTaEqGZeL`*_De/b<?-' );
define( 'SECURE_AUTH_KEY',  'A{iR#5vFd$9ioOPT:_?+Ie=9+g@8oK?.1|(Q@^~uQ~I{QMBy/c@lB{Es5vx 4vmt' );
define( 'LOGGED_IN_KEY',    'u}ZLou/~C=!;PG4<|s_T_l/`/K}ZXb_jL@ERF1]26U3b 8qdC^r/(=(P3;#+P`GN' );
define( 'NONCE_KEY',        'EasbN+2%:RgkDc< ?f^<>H_B2 vA@%jYER FSeXpK%wiAf,X2)vsXVIL/NGM[k!u' );
define( 'AUTH_SALT',        'D5!A-3/o<%|Kaw5+a}-Zedo,NLmR}bgxu}_(-(O{kC0rHT>M6KmPdaF@pIAC|LLK' );
define( 'SECURE_AUTH_SALT', ':mOruO}&6U^ML]!}9BI%5*&b-`%]]&#I{Rk)0k)o^f!`,s+X|V%u3*1P}dzJ;MjW' );
define( 'LOGGED_IN_SALT',   '{e^h$f_u5-@L2^HgfZ+agRJ_h1Pwj!W~)*=PWT<vxI8%%*a3r~ O.-Rv&*;0z[?&' );
define( 'NONCE_SALT',       ':@1ZjF2!WgU<bx%`-C^1&1vx(()1*K{-8zv9j7aODDE|R2T4y59@HEV9V^~N8sD4' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
