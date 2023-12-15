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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '|gPYf9y/+yk<6V(@Ib*`HNk`J$;!~`}jq&7#}z{~TiIw{%!T*KM-|%*hZca=<fN]' );
define( 'SECURE_AUTH_KEY',  'KLUU5;f-];)w7cC;v1F{|#9_-D>7RcZ]tfgFUTZ0L;{?fF|hAem_Ht74`mNa>-=k' );
define( 'LOGGED_IN_KEY',    'a#.#3C`P}7SsQvN`a|9+^]a0%an5fC+^c$O>lj(H{fIrFKKWduR)!UD=DkvvgJR0' );
define( 'NONCE_KEY',        'HYyo|WgC{ppZo2#N,i&TPW /E7plV+*Ttz8nsB:nOI5;2gWj1Bj`XT5QWjJp!?Jb' );
define( 'AUTH_SALT',        'ViO=KnQ+fp|QHT]a28#-x+ppT1N/f!B1-viJ4D?8ec)I-RIuRLRYgI9-:n7|c*pw' );
define( 'SECURE_AUTH_SALT', 'dG#;2CdCLV3fsc4{| z,qW5HFx>M*Qw7Heh.l4-/t@Yu(d|ZT{^Q)n@_G]>~3Fk#' );
define( 'LOGGED_IN_SALT',   '{x{_<t8*^|nq%@0/|D}eY&qKbdWYt3wtgX<- p%<^!]SvR1gSr|^~!]*~#;1K4*f' );
define( 'NONCE_SALT',       '>r@.*K7Vtu%kpKD>U$PEz#f$Af}iN-cJ`<d5-p})|0>0;(w~,mG-k}<D$+Jb`dTf' );

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
