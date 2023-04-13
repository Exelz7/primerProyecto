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
define( 'AUTH_KEY',         '.w;y~~fWg:+?r+v7l#kyH|cs<q4K:O&KTSr&eTfNs$[%W5{-3~_1 y_q4g3=Wtfw' );
define( 'SECURE_AUTH_KEY',  'C9U9KN?J$-67l+`B~qe RIO:_r}d[4MxxCA4Q9#GC^J[YPVmKO}Z~>x]Cn|b/+U9' );
define( 'LOGGED_IN_KEY',    'F,P BJk|/qe2b8Q;1iD-Rk$LdrzTEsCV$F87 j8+D%?W`O)l|cJ):ji zM9~3Xqc' );
define( 'NONCE_KEY',        '-vU.l^jnoL6A81_:jP;9ZeDa18~<C]GCEy4u(&)D*vP|M<APC3U!kJ6I4)ID$~~s' );
define( 'AUTH_SALT',        'NyL)*=(N_+C2/uP>XJ4Y<>On+GS)T3^u]yk`ao}7] $N=VF`H~,rW.&D%[FUg3a,' );
define( 'SECURE_AUTH_SALT', 'u|tnKHx~sBVKy!!VbthBCIqkJ7!(6E]5dQt^%X)LZ|kwOsEwikH$O3791^ *o&,)' );
define( 'LOGGED_IN_SALT',   'U:GR-^jA=d%TQY7E%(7qu(:.WrIu^*hfX8mi`0jPWTSQ@pEBveP>`)Ar+C|w{lW?' );
define( 'NONCE_SALT',       '4~x:AH/[i49a;%_uEOshklx~<_>a)_O:?J[h%a[n*/i9~j(Kvo~9QG`50m6ZV5R)' );

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
