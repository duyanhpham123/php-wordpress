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
define( 'DB_NAME', 'quanli' );

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
define( 'AUTH_KEY',         'L1uPuEZ{Ic4nqE2l]tI}]:S&Ht,}T7Oo4AB1HXN2&,+$8HmeS?LV-tN<:vQ*P,95' );
define( 'SECURE_AUTH_KEY',  ']oR;uZCJo,~{/s5}N-T=cVi_:7{W)VCz#DygcA8vM>==be /a+tSct iHa!5e3}a' );
define( 'LOGGED_IN_KEY',    'sm&R>k_.qi+xyL~IBW~_J7~`];4_*B;np4mvj!>Pw`}6,=fq^1#z6MGCcR*#|AV0' );
define( 'NONCE_KEY',        'jQo[yp,zP)8S&_!l8wtNoBAf$k|0p+@JRp?~%kahjKTnqnsWu<tw@L,|>`6zOlm8' );
define( 'AUTH_SALT',        'y^:Kc/.S|%W(Vl<eS`ZubN&<),MrQqmm]Fu|SuPlhPH^ss8}mmtP.f/X;4M#`cA^' );
define( 'SECURE_AUTH_SALT', '{kbJ/ad!B{igDXaxf<gbt{CM.r]`x[5`vng>l=t,hFHzMN0%2rUq.?aQ#{0LX`Iw' );
define( 'LOGGED_IN_SALT',   '0P01yqY_>mOi7`-Nq&iGr=_I3q@g~e]~r@NSP]6EI974blRTRrY`XR>0bEIX$r7Y' );
define( 'NONCE_SALT',       'Rdza <2ewM;I(#G>Bw;0? w?O4CE{}I$(5pa7x6WT#^C|)j7>;M`]T3g[o:46V<$' );

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
