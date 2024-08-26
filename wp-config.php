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
define( 'DB_NAME', 'banhang' );

/** Database username */
define( 'DB_USER', 'duyanh' );

/** Database password */
define( 'DB_PASSWORD', 'duyanh5d123' );

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
define( 'AUTH_KEY',         '?opo$[yt:vEmS_LNijp,R:]*w0b#A{gDX2sZ&k,6_Y4DHiW:y^.f)PV-~qT_dP^_' );
define( 'SECURE_AUTH_KEY',  'Yzeu#7(GkFe=F)t)vQ2!3FvWbL^k;nEmg&p(DDVec)WDV)hbxnq+.x_O{%1TE5Ff' );
define( 'LOGGED_IN_KEY',    '1%farDbi8W)|Zx~}OZtgif(Ss>^.diOUhK3rwFZ}vx5(CkY*4!Z#d}!>6M<x&}k0' );
define( 'NONCE_KEY',        'N^ogM_|nI|8QoZ6Nz_?1xovr.e!()X3^3`0^z[:|_xwWsDFRD:n?`j*+JoO4HjwF' );
define( 'AUTH_SALT',        'oc<!E.:1)VJHCC#hdj6 srmqYy1Y%=:udSy/*EHCbhO~q~J ]/3_] to 4*ndBcQ' );
define( 'SECURE_AUTH_SALT', 'o(bc:sypbwCrW8:0Hd&U__*UZOpavY/rexEh/;>J,F+Ev(Q`?m@WWx@z(<]$t<|&' );
define( 'LOGGED_IN_SALT',   'cIb]R-G3AdykLoD2*aQSsjP;v^Io&s$nsl+a#)pV`htjTJ@$uEjAQpqcf}|k<0k:' );
define( 'NONCE_SALT',       'e[`lgnp8Vj?#fk1!loJhF!UW$H9&Rb]dgnSKUqIfT0L|2}b.% )!*a^?q@ J@<*u' );

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
