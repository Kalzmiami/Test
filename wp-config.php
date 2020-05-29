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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{lC4L][OHN>MKmGq!vXWEJ)@=O^*fV>ye)4BlJ&z-KYp]y&Kwl)fN~o#{;5>P7OR' );
define( 'SECURE_AUTH_KEY',  'N@.a6Oy<)S&{4iM56ZX ST02;Svb6;Cvp{nA$&y#kkot:]s*BP}8_g`uGM`M!/Fh' );
define( 'LOGGED_IN_KEY',    '*lDSnHMBF)]{t([^tyj&UTJJv|VLq}D5^&T6{HuQ_@0(3.R-GcO+4#f/e1UtK6C;' );
define( 'NONCE_KEY',        '=jd0:=ne4&Vhni:KA9X=jT8[.q)6biz.xr/[3mkL5sGS<quo?9xRpl|hasY0}EAX' );
define( 'AUTH_SALT',        'bfJtwiI5#SYKlG28N24zu,FPc?*cx0?+>!0S0f)yk!Tg311wJ/Py8JuVnVsZDqS/' );
define( 'SECURE_AUTH_SALT', 'myeF:5P1TntSJ*uW-j;& =|fuGA|{tmasHHAa8Gf4e_zBY.bC0CN[r5|>l*T| Jk' );
define( 'LOGGED_IN_SALT',   ':TDG=xzr)uDCmlEB5THN{J`:j]fly4jL-dJgu1|6#jtwsH,gI3.#Im82z$uf^M88' );
define( 'NONCE_SALT',       '#&ZMHF[iI1,Q0c9]]J7`9E}cC*FM$*yTL+PE`Q7Q7XW&A}M@:F>g>^6s2ATG!&#h' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
