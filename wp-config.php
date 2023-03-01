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
define( 'DB_NAME', 'FnovaC' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'p@TtxLOcYGU?{R^$tHGrF*L;gj&/y#FK,z8fW-y2kKWf9NE|Ue,d)lM/wsvS>NXx' );
define( 'SECURE_AUTH_KEY',  'j#<QHHK92v5$J~s/K`4~#:DL%4pjE5ms7XuH-YCJ6{%]@;qWOV#Qqf:+m&_j@IEI' );
define( 'LOGGED_IN_KEY',    'maI$0`-1%]{p^3,@^^7ij{fi}Kp=Q)yn%O2}p;]Y_k&7u&RIcs*R]R|wTLcD*Z3b' );
define( 'NONCE_KEY',        ':kO|@V-;[o5k[`)o7y?+cp 7ac|vTm I4jN~D=1JN MKl{!XS4Fg.]mEJa;gB{Z1' );
define( 'AUTH_SALT',        '<s$6bO+`9!Hgb6!qxwxy+6=d=dVb3k*M>3KU]T^/m/Y>*+a00iq}fv6fBicWi=YO' );
define( 'SECURE_AUTH_SALT', 'PP-fJ8)(7JE[=r_2@n>0L.:[K,L>v}l)e!$m#*q}Fh}o!$HAospw#W>Vir&.MIRP' );
define( 'LOGGED_IN_SALT',   '# [)0ael6B(b+9H0r:SqT~i$%b;{Nc3s9gv:)}:W>B-23 ovaL:8O@47$|$_K#hv' );
define( 'NONCE_SALT',       ')2$26<(p/nU!8CB24`V$?&&P*RSz<T:7m{WQb{x>U%7^(DSGdPls|hzoX;hHk? u' );

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
