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
define( 'DB_NAME', 'autoplug' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_FD^^/I}85n0[|F$Rcyj?Hz4QMz&/G`j=Tn<58PXPBOP,7{PNogOh2/+w%n;f(4y' );
define( 'SECURE_AUTH_KEY',  ']$1_R;0W>m3m~Pb84ES-A}Fz CW @5Ezq}RXOt{N1kb}*6Z!9(U<V(9ON0(ZA.[5' );
define( 'LOGGED_IN_KEY',    'D@t4Zget#}LB6Lk1n0^JwzJQR}~V^U#NaLO1#Remy=T[*GHuA.i#_JU4TiiD2Kqo' );
define( 'NONCE_KEY',        'GyYr)|]kuTgoQ,qx0b]~n^Y6,.~}J~68Y_9dJ3!Gb{lf5,r)9UYaB/|[u4U JR1n' );
define( 'AUTH_SALT',        'FJ8VFcVT0U~ 7eZ,/sB2uA>bdm7q/xcU<vv2mjMT$U8{3aCe{/QYSF,.=SpTtN[O' );
define( 'SECURE_AUTH_SALT', 'zp_p6ZDD~WB[^M}UkVRUNNJC`o|gv@v{DsbaD&&wmV~$TZjjD$kLzw}.F@]|a@wq' );
define( 'LOGGED_IN_SALT',   'k4Jr$-6U,cABiEPnUEythFZ=^ G/-c+DE-cO7|1{:k+K(qF%ckD^4JOT=87>Q=4:' );
define( 'NONCE_SALT',       'wBIt,/*OsIRtbu)3v+lw<ODb-[?1HD&o^}]x+R}L9&Y_csgE{<WBG?9%W[&bm.kJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ap_';

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
