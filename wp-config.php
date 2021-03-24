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
define( 'DB_NAME', 'littlebr' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Secret123!' );

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
define( 'AUTH_KEY',         'q^7^F>J(6[#$u2*e9#i[DU;YyZ7[*f=vgZgRDGs)[|+(V1?$Wj$Lz +=0p[$lbR<' );
define( 'SECURE_AUTH_KEY',  '#`?G;rdV(UE5ai|LqO,3xEr%^xBHv[GAqX^6OcM=Q ]O,a]!ZMC?OkOEr(&:e9yz' );
define( 'LOGGED_IN_KEY',    'W<F$>s4:EYc3<>GH&9GhuVb;$zj~zWVakcaLR|xdZyS$WiB[~5=%Dd5Q]l($h/4d' );
define( 'NONCE_KEY',        '=N&.wub^5OdhAC6^hON:s6GlAq*pWJ`[uQv9!^uq2.O?K{Nb{Jb8P6`/[7e_09_`' );
define( 'AUTH_SALT',        'Vq/zd9](jw2T;=Jc>zkO;>)D?Cw3PLMj00IN!tVGF}lCLX8qe<.pk4>P)vR1- LQ' );
define( 'SECURE_AUTH_SALT', 'TVr-O`.OTJ6aslL9yMCL<T-bZ*@_t6m:)E{_CF.p$rS-_Jo&<NDylqm|y<&]ba8#' );
define( 'LOGGED_IN_SALT',   'D:%9qIG43E;^8j+fz:o$nd|u)Y*t=6l5tozC-LZs+Us+@mq8@V^xHAJEz4hM[Bl,' );
define( 'NONCE_SALT',       'hHNM5IrkWeb]]@9|EjE`o?oWKb:/+%c>&.F&H@2N-iZLz)EX4V]xBY.mO8IF:!U$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lbt_';

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
