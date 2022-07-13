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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sevenatnine_db' );

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
define( 'AUTH_KEY',         'Vka>TymsqA4TXN@y81PbZR:nk,Jc4Nkfm+,*K(g)*ZkS725cwMjc_kdJC:k vRSo' );
define( 'SECURE_AUTH_KEY',  '+?RO3)bt?877z&Q|Ai1~-}*chxL#*[H#4ox7HxIy,73mI^6,cIH{3/9B=(Dw<W&S' );
define( 'LOGGED_IN_KEY',    '^Ys5tEP`7:MI}?l)pG!q)/y{W 7LM7^b`wGi]x._$3im}xeKIp)U$chDuJQ0hp|+' );
define( 'NONCE_KEY',        ')%t$U^xI1bxt9RU$rU7#h5k+4a#u4oBk-Z!e1$x]|d~xyc.UJb/Bh98Af4?Ypm[y' );
define( 'AUTH_SALT',        'y=FwI+5ODV=@:ZzFKO7Y@1wZ_Mv3JtloF<2#{<`C0IM?:W{(HL6Gv74sN#MWGV55' );
define( 'SECURE_AUTH_SALT', 'kt` S(#Ub8(AF~sT6(o02x,N]iDsiD(p>O8ostSLP+EV>CBz#hzhO<`gfyG!GGTz' );
define( 'LOGGED_IN_SALT',   '#WUMBonFiNGY?Ir*g[K= N2]Pd/omKD3xw#h7 <Q:m-i%/j%H %nqkvH.Hx[[_IF' );
define( 'NONCE_SALT',       'j-ZcPB@?TUCKDIj^Z`*/fL&70qp0c,rf[`fIPaH_8=lKX` S~:?c>(j=nJbFt9V0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
