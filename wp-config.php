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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'y5uB)aV0+t3S DQia/MPtBwc;=w@Zs9Q ut|)IS4)N46p38Je!NEuNop18W%n(!t' );
define( 'SECURE_AUTH_KEY',  'R B{$*D)v%CDrDp(E#b)hd]CH1XxOg+Wdh.F}:Tb$O)w=*^4TU9&tkX&d|0h3S`|' );
define( 'LOGGED_IN_KEY',    '^l uS:Y}hmFlA?e1-<`Xeq;YeZIBZ5#7X?=];b@qlCJ#SD[Rx*1x?(T h7|`*9:h' );
define( 'NONCE_KEY',        'C~BWhKfzlRJnaHtV-TUyLz>SN2dzB+z^gFsYHl)<T<xS5yqm]+Gm&iv6K7d+C4Hf' );
define( 'AUTH_SALT',        '{jOeGUF-h:Wcp3GjgDOQ{rYh60i/8rj`Z8GygZ&6c<TjIH4O$x4P-!f/MDO}~9&I' );
define( 'SECURE_AUTH_SALT', '&fqaV&f8jl7iB2P5|&c=WE@+}Xn?Xkx=]G2!@z;n5f:ob|9#)Ag:L0].y](5s9Ic' );
define( 'LOGGED_IN_SALT',   'i$_S1k]wDz}^O<|p^O^ty[55l$q=fIK-X6NbFMiTlpr.q2|ffLTa2VDGt mn]S-i' );
define( 'NONCE_SALT',       'R 9+YE<F{gU&p957N 6X~#t=8wO93*3`]JKYKQ;t<tTGJpZI9}`g{.`^XGbAL&.f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aadi_';

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


define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'UPLOADS', 'wp-content/uploads' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
