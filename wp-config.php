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
define( 'AUTH_KEY',          'K8+G&LpGWh6dy-6?Zi=LmjoDP:t]Zx3VjWDl5i0go(`a9B;/:W&[JIAlOD=9,Go`' );
define( 'SECURE_AUTH_KEY',   '!+AV@<vhD`6H*5KYj1]Sd.-R?,U6087n_4Yx&De&Fd6*~Wz.aDLZ$Lr[AygcKnsq' );
define( 'LOGGED_IN_KEY',     'naD}oo]>cskt]TUcuiF<B7},TM,Jzu[$<4T`DGoA;}IeAK {KC(ZbtK*;zye:cb:' );
define( 'NONCE_KEY',         '`~ AZV@+*R7}fOh.1KXoX1o- E&(Vzed lzSF9~26$rpL{DCOPH1|^8uAoQKvNnK' );
define( 'AUTH_SALT',         'XSr7c gflD KJ~O>d&tF!BXczAJAUp]6|k:wZYc%/sG3>bKwaL_9p5 -xx)Kl`]B' );
define( 'SECURE_AUTH_SALT',  'z%}4d&~{O<`uFW+vey:eI/VY9(>7_jt%C=^]7]WViIgOV*{,Fn1^XU0H`O pC>/:' );
define( 'LOGGED_IN_SALT',    '3cJS(TDb^0]yPi)29D)CkG)Cq4O7uad~^(+C(di&yB|e5=`obR<9),,uz#zw|3(;' );
define( 'NONCE_SALT',        'mj8%*W:<ZIuPMuG2Re0v/td}U4s@%ir>4B>U^c!Kr4pU5=-9b;#b&-Apq(%-Ug>C' );
define( 'WP_CACHE_KEY_SALT', 'GidllC#P>e/:lIM5xsrF;r9e^Qx3<>/(B+raP,M<AgEa9^x~07S|PGSVyKHguXBQ' );


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
