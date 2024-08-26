<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tintuc' );

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
define( 'AUTH_KEY',         '$ic2q68D(c+[M+T62tz %%Pa12t DS; 9C]pC:}`Yz;Jd#a}%/}`l0{Orv,UNca*' );
define( 'SECURE_AUTH_KEY',  'c6zM%3Eh9%?q74pIuOmtU)qMEo(2D1i<>EMpznt+j^`-hL_^A3;9A6}z%.)t8+<5' );
define( 'LOGGED_IN_KEY',    '{2,?*o4gT!RHS%c/NE>UX3M$vPN#g~9S.,Ag:ac)S^eCJl|x._aXH}ng0/3V>r{9' );
define( 'NONCE_KEY',        'Ez=MEd-Hi#@o@PTVzPZbV~y;4mU*=>Jlqs])Hmj/X@;<}sLy[@GOdogcvZ)rh mU' );
define( 'AUTH_SALT',        'lwwqa&f#O0rAPi$H/K_=!A0$ODa,N^i+C>AB[|/L.YF?XnQOO*OgXz/gw>O.^A?>' );
define( 'SECURE_AUTH_SALT', '2M~3!+HX-Xz@gWcnPizCmZtp@jQP?mxCOPjT@74bX0N ISJ!iW$z^ERC1yb(g#d|' );
define( 'LOGGED_IN_SALT',   'amg$ucUsBa4.Ph~;$ycQc d{N(TPQ4VJY`Xtu<_4yTjV?HPP {^}wnqUX${jekM@' );
define( 'NONCE_SALT',       'Z0$0f*J31t#,N`y)fJP%vu)sFtM+;*Jjq}s)h iLfWc2a^vWg5|c/s[qmI$#e$9y' );

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
