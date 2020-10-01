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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S}q+*ghUnKjq}o59}(B;8y~qd[p!6MbT3oj elvU|^b!?]!*tIXVEe:tS2`,OLTw' );
define( 'SECURE_AUTH_KEY',  'Q?+r.avIti,L8UpuD5Ce#Q}K;z#u`j`rZ S&SEP>q?7t&|5BsLIF`iNXM[0QUaRK' );
define( 'LOGGED_IN_KEY',    'Qn5}.{ec=01;=Q_BdotdZWqt?#k1.zt8 ?INihY%[14EAoz0Dd.%iQsKk<61zmT%' );
define( 'NONCE_KEY',        '>vhR`Y*+G[bnmm(uNX:AmMTyUskCe#}Lu)Aa[? $C{yL(|i9J)v`:~L!aG&tbL*U' );
define( 'AUTH_SALT',        'J #>N<^/(vHyAiIJu0>dBUlaW8M2OrG~iIxkZi-dDvT0i4Y@ H6.6z?&AB7dEYrD' );
define( 'SECURE_AUTH_SALT', '8 `5A<+oYM^gYPsu`2|5a!qR8]/H`r>df#yb)V^*xx^p(#/KAG_^gv1N:J9P, X1' );
define( 'LOGGED_IN_SALT',   'oVTm@;-^8[fF52K#?<AqRX @WfTv.Le?wK{A@=J=$,i%$;g63qx0M~w?aEp;{XbD' );
define( 'NONCE_SALT',       'U|Mfo&ZVff(.HroyHdfc9*7>t*~]xGsvhZd G`^C63WPHkwl!f-&u<Q./ahH5.HY' );

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
