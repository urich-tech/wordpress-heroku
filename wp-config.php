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
define( 'DB_NAME', 'postgresql-colorful-27124' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootroot' );

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
define( 'AUTH_KEY',         '^[7m!6X*,f=#PDBr7c:6a_q4b0VIw*9#|tTK<}lV;ielh)!K^2$h+.r25Wx|Ku[r' );
define( 'SECURE_AUTH_KEY',  '?0v{1oz<5-l$#,^IG}aQoW!<&R~0~,>{>-(V4^7F8UDU9cCY}0[i9V&&dHCpe6F@' );
define( 'LOGGED_IN_KEY',    't4UFMV%(R$]o:%o,y$#3:>E3^4VZJ`&FT)$N;J=.sHDPj}>FeOAT9-MKmsagVFJi' );
define( 'NONCE_KEY',        'znbuo`EaOiVk/L]|ex<]hM?Qz5.B&O3gA].xEnCcB5<v:/k(#P $<uMrHyYss0!&' );
define( 'AUTH_SALT',        '@{3DL$*BFeT6^vJyT1&IJZV7v0lJ*lzL4.Rh4EweWA{+lu_V|ymYef=F.|-;n1Qu' );
define( 'SECURE_AUTH_SALT', '[BRLZ({xADSGu9O%M4&h9gEdO,|j%7.N,BH[ej1q#kR{vJ]UOw<WHL.#rCj0TxX,' );
define( 'LOGGED_IN_SALT',   'Ot._qW`SIF~G5w@@04l4W][LT]tcM5Q;SE/F4?XDisI{0f0H*HQtBTu4H&zxYhs;' );
define( 'NONCE_SALT',       'z?DoO9-Gy>u5[J=52M=.qVG.!+s^_O;2S<wGxe<#%19hK,,q6hy,..RQIQV<^v78' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
