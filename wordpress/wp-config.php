<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wcag' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/phpmyadmin' );

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
define( 'AUTH_KEY',         'i*u`!d~qcg!U_PGjG`?;]w:ZaiXc-Z&sF=l=$U0PP1*c5lE[|QBh2db*-`rK& P0' );
define( 'SECURE_AUTH_KEY',  '$oG_lFb|*@D0DFJB/cP7tPc}bW38lR{WNxp(UM`]|e*P6Kn4i**,2Y/ hmZDqIW0' );
define( 'LOGGED_IN_KEY',    ' }AP~N}i@Q&!nGth_tMaA:A@kkAvEo3BF]`xy7R83$3,|`c,Ki*y=6xs!Kz3Z;o:' );
define( 'NONCE_KEY',        '~]7U>X4YhN0-&zxM)XH;X?pz+1fy?s|JF NcaZ1(`n/oPnek`e}ySPFuXEO6D)9x' );
define( 'AUTH_SALT',        '[OH|GSN:JKuH~97un!*Rb ,p A08aZX VDf0i%b/[kZUBt;C<*H1g `r2A7KV+;3' );
define( 'SECURE_AUTH_SALT', 'C2H-K|zY{IVE2lQD775`*:|0hW1`5^I!z)UZ=0rbTGL;QaqtqhwOvTY(kG<X$Yic' );
define( 'LOGGED_IN_SALT',   'xI1_}mQ7+eZS-;J5I*vCjHg#+icPKhT~_=WN;.b*|kLiPQKU@3zE]B<sOuo7e_<<' );
define( 'NONCE_SALT',       'rWdvqN<~?65GUGzIa/!7h@N%3=V-Lm i=tPp)GwPS=HG*o<~{Zt,#4$Px>)Y,NPW' );

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
define('ABSPATH', dirname(__FILE__) . '/');

//define('WP_HOME','http://192.168.0.105/testwordpress/wordpress');
//define('WP_SITEURL','http://192.168.0.105');