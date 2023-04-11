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
define( 'DB_NAME', 'dbproyecto' );

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
define( 'AUTH_KEY',         'EUm Bxh)N_xOS6EpXzJ3i3Y`304X!g~N_Vo.0bz:r<8xkR{(A?Y(P82+P(>Sc =S' );
define( 'SECURE_AUTH_KEY',  'nv,#*0N;&s~6l];>>5q||[:JKy@CF%s2!EvQsi#*&<:U#t<%1AZYZKZ :3VdzcPE' );
define( 'LOGGED_IN_KEY',    ' 8U+a6gBTiS^$:mXQ1<x/;|s10SkSunB|N]EZ-+-,s)4j_BZo8m|iVq+uKfwb,qB' );
define( 'NONCE_KEY',        '=_~}@4:*]Dk#@t_ljpTt2Z.wp6Xz,V:)PX3AHd1_yoGj7[`9l_? ;5vY@z,^?#Y`' );
define( 'AUTH_SALT',        'gre(Io~#jZO,^Tw^pCpV}>M}W#cC-?;sh_(W[f^@7zAmOIiYu:?xC9TD34y}__&7' );
define( 'SECURE_AUTH_SALT', 'b:mk,$=dd`p&ovYSD4b}M.}k>jS|ZeQxl_Df5IaZw!OzLq9zds2;cCwOPu_TrW`p' );
define( 'LOGGED_IN_SALT',   '-s&WPB`pY5hq+)x4M@u$u/j<.$7/jx4DH$[lz<r]j*9nkiP+I!$u||-:nIm#`d4l' );
define( 'NONCE_SALT',       '$4BVBh|^B!*z#xrv6{@GS 5HRt~^mr2mw#w H5YXwz-dhYZ6<W nph7W_tm?DB3m' );

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
