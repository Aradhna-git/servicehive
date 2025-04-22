<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'servicehive' );

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
define( 'AUTH_KEY',         'Qs.yt%;5ob(XNU{D{kA=/zz0NHO};vM8,zVG==0U1Bh(u}TYLQgpMIA!7KB+U^g@' );
define( 'SECURE_AUTH_KEY',  'zs=5nRJJ,YL+,xZp@x+ZnIuU3MHURf`n768Zx8u!t!mkc)mA,7kEZU3suhAaH`to' );
define( 'LOGGED_IN_KEY',    'O(Hw)Yn)TsR$M*LrzKP7[9sAhxZs4_T?Osd^vwSRiDjT=$m#x .Zw h0Dt0Sr)QL' );
define( 'NONCE_KEY',        'PM=l|Z#d`WAf26}u4~M=N-E`!KRqX]-(Yt~>#&>9PLq)4O>a_[%d8cC32*oogxQB' );
define( 'AUTH_SALT',        '%@xaPn_;%F8~.hZdhRWf3zt3,z,9@r!}zT&%i),(.&j2&US*<u`<O}oG[UBq$CEQ' );
define( 'SECURE_AUTH_SALT', '3.RMQ9te$SC&4.b7V/N:-&9{UEFS}^UvOU9y?&9puq[=2_A`]voz$_a@>>]98CJ0' );
define( 'LOGGED_IN_SALT',   'rvXLo~u;! 3V/]2-T&awI:tdqy/>Iz]8;7s5v$9,^7jOd>.?xD{pasIPU9%6Mr?r' );
define( 'NONCE_SALT',       'ay5m/EI4gg:+Gy+vWlA-v(O[m$kO&TOF^*2;{,h[Ij,z[ZirMRU|o2sv=5t2N9iA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
