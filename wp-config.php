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
define( 'DB_NAME', 'testenvr' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ']zJ_2bc461`>.$Q.SNf`C!g_/q#e8`n3c0FD%FPpbT!oWB:&I#0m$N7oKX9$2yM3' );
define( 'SECURE_AUTH_KEY',  '`rd6KonbE+kmj0E5-Hms+pZP=IJhx&]2Z$-)rc8Iq.m*G/PI4utl-LK!&GH *$DJ' );
define( 'LOGGED_IN_KEY',    'p!UdBXoeE]a[&;O61u>x4,=Mif$<.!.n)#s_<i`|~ildv1=N/bt?+kt7ufuZY97l' );
define( 'NONCE_KEY',        'qE[qt.w3^K5PP#t~]Ed]27yGS#:zV.@iM)yfA?FC?mXtASmxDQxiRmi,Y~D7sBua' );
define( 'AUTH_SALT',        'A<9k1WskR/<WR9m$GC-KAcT/W/%Uy,wX3[jQ^)BF+qd&9aS%3qqr^CnB6IO pu:o' );
define( 'SECURE_AUTH_SALT', 'QD1Xy|Tz4?O:N<FHl]Zw*}|8_U(fBEX=phy~ic/=<Bt&eB..{U7+i+59iN&Xn4xg' );
define( 'LOGGED_IN_SALT',   'Zx%6y<E4Ns+W[tOO;e5cPL9-3e,8Ers5VILh+..t,-_5kc_=1IKR.[.DWB|T,:>*' );
define( 'NONCE_SALT',       '*w`J@#ja[{%TxrQh|@)EYH5o76<!D24bW3{~/@[VSqmrD!gZT657NdKiVGi@?YPA' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
