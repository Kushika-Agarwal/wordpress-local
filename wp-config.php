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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'N]w[i^m0i_xk>7XgQ=8X}>wd?6$251%6~jk^GN4NpR)V8@4Y0vF6B&%0+R-v&]Z?' );
define( 'SECURE_AUTH_KEY',   'j2yvNRIL1s:huB.,!*m0W+9GZ>2?Y74{?adG3-P}Kz#Z@=Ncenn=O3l.ymks3C-=' );
define( 'LOGGED_IN_KEY',     '[cr~u*Y2#>t:<=WhE-qH$`U{cYZ,-<jg0(#tx!;:zbALA`7I)f8sN.XE6L{>dj{D' );
define( 'NONCE_KEY',         '/;P-D&_oLY%78ed%];[Yem*C,(7&%~lb&Tj4O9zGT3(0=mCgGvPw~cC! ?6kO0Op' );
define( 'AUTH_SALT',         '&3({M$X8ubOCBrdRDg<<lUT9X^j}0X3tdzh7C@L_k`>n$EPNYc7[t)Z.aO@cPBLZ' );
define( 'SECURE_AUTH_SALT',  '54Xx@>sb|z:l{r7F%<$Y:doT?k<rQtii$+K50r|rleu|T;GpKH7f5>M>+ %W4Lau' );
define( 'LOGGED_IN_SALT',    'a5IsiXp}G7:,C8Z^5lA ]f]<XEy~KDw;hMYKtLe;$<YtTV`iDgZ<Y!%I7jX)n&pJ' );
define( 'NONCE_SALT',        'sSrx EqI5un}!TrCzq2k%OA>UWqlI!LlOZFn.SV|HzKQ&G8fBzQ=B6?V6t9bAr &' );
define( 'WP_CACHE_KEY_SALT', '$]R3D`_m4I,;c<K(jA2vyE_^^t5H4o?,p;<=;[,c[!AmNo9ze<g:aQr`2<Qj@syi' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
