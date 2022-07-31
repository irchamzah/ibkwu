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
define( 'DB_NAME', 'db_kwu' );

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
define( 'AUTH_KEY',         '5>(EK*(dY7tspTQ`WMnclj]2DC~.z2su8tDUV4d!3Q?e8(50XsY_hr)I%{+e}1hr' );
define( 'SECURE_AUTH_KEY',  'Aku|60(;bT#.MH~gg^Fb4d$U=zOw,Po8q`a{skeHukH=}^1Zt@Z%C*,H~t;hkG*(' );
define( 'LOGGED_IN_KEY',    'Ycggd+P5ed6TfWQ);X5~vgSw4<MC`7vxP<#a_!8@8 +0BsIHn!L:)l4ve:|cgsX_' );
define( 'NONCE_KEY',        '0U?YOonH=vS?mvK%(ozy9C[Z8zYvd{MzFQ=mop,9=kK(b8(zdtx}ZL+GIP)TD|F+' );
define( 'AUTH_SALT',        'jlCVMsZJoDl46^FB[`:@*!MhbD)VTNfJ(s~?GNF^?VO/V5{y@([Y]S<dp^_v~v|#' );
define( 'SECURE_AUTH_SALT', 'N_tO+kSkzi7O&.K4>9A:Q.DbDO1/cC.(@*ck0n]#w/Rf# tO()p1,glm3]&OU%[D' );
define( 'LOGGED_IN_SALT',   'h$7ipk@IQ0m1u4dP,Ai_im9le{Jm<=e?,6W`,{31vtl[$xx:q;z#m)i~V4<mA<:?' );
define( 'NONCE_SALT',       'm6JR0}_WvVS#@./+*dyP,o)g6B5{c(OkcYTbm,~1@*48h9#%w3fzFPb<dF6{;64,' );

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
