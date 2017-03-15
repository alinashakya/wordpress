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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*W,ZeakFLDV/GP]L9(4NiEO*wVnJM%plt&~@yXL+nt0VucR9^a]T+FroWL<.y9c`');
define('SECURE_AUTH_KEY',  '6~_w@1O}qcg$.0 ~[fRi]89,=Ax>TLA|L:(ERIe<-#CoWk4yL:/T?o,/r&hF?8mX');
define('LOGGED_IN_KEY',    'MUzui*I9&_,r&!s?R)-S m//Eow@<9R=vK&~z6aoYuw}A=-T~A:tUGfi.@:RE^]P');
define('NONCE_KEY',        '8~Yj!l]iFO<AjaL?QJc*(p[d(mTh9 ba)2aNqxw?Pu[.R)qj.^}99]Dx>@u/>.Qt');
define('AUTH_SALT',        ';ibRBVXQT%&6k/a~K)f4!muF*w=6$NIU^~cRX9c 7iuRVmB+bg)Yt(GgHka]B>HG');
define('SECURE_AUTH_SALT', '$Ut1EJ~IcpJqPl}io5w,N7,R3+`<oZSa:0y:wmE>WY*jv2TsV_mf|qhufU&%C<.&');
define('LOGGED_IN_SALT',   'N.v`N^SG4o!@d15jn+wnaN5!@<vYDejYyB/Tz~y;;9y*[BPzM71mi>n|3:a!M/_/');
define('NONCE_SALT',       'F`rms@q-^^S8{*=}E%8Rx4I#DxL9N%Z`^:q|EGKtA6DAk8`=XF<LZ:;7p?QJE[=h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
