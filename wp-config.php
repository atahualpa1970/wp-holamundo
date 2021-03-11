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
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pebels01' );

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
define( 'AUTH_KEY',         'd1O,_d[+ln|)|6tbI)[eY8}_g;/_*cxdrbW]G;bMlS=7{cC4+^cg6<C1Y<*pMO6Z' );
define( 'SECURE_AUTH_KEY',  '/e:~s?{`1CON!)y|OJi?nZTZAN.!gO;<Q71P)lFHuLFV^JyfB^g.cHqrZ q~V{WC' );
define( 'LOGGED_IN_KEY',    '.8N%^X.Kgihz1[1`([szu[IHRsdbmA-ikkW1{0`-&b;Xih .*%lU%%MYD;F8 mX&' );
define( 'NONCE_KEY',        'iyBe;dQ+SeYI20BB4L!h+~6*i:(=KR+}`PP$W`5ZCKQ/!`H`VrXX~K/8M~->T3.b' );
define( 'AUTH_SALT',        '.=|o*~t!{A;WF;rO]0J0oRPoYKtY:UbXZ=fs)83>q&k~QM~oZ|%%Lu.sY8yiao63' );
define( 'SECURE_AUTH_SALT', 'LLsSZ/~Mr^<ke*Sn~k1w&3yQI-K#^E&[``yp_[BT~5eZtwlmsCS?lI9+mkcq])w@' );
define( 'LOGGED_IN_SALT',   ';0e?Y8|IslKYN+f+pWJAJ#X0O&b5*wNad!j31)/1m=Qq9dOr~ha3M1dBNG_H0GZR' );
define( 'NONCE_SALT',       '[G<{T?7m[A@d,mPOz97N@o/hX}V5!aVL6&icuT)I5YRPi5yvM }c&T1xTmJerL6d' );

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
