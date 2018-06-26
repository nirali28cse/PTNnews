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
define('DB_NAME', 'ptn_news');

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
define('AUTH_KEY',         'zfVxGe!mkv|i8iY/XxguB}@Z.T.F!ecz4Lx@=Pe-eSYxG^~lV0^0)Zo;tbxt(fIi');
define('SECURE_AUTH_KEY',  '6a97%&wu47(0C*HTfk6~Jw0-n`U_(cJZe!`fBybIQ9:o[=/}QXHCaNae|c{T$FPm');
define('LOGGED_IN_KEY',    'kk8L~u/QJt9<6B|Ag[:$h-3.U[~VnfdJc~H[3u(T46F=~ysKO#:[jF59bqlioLP_');
define('NONCE_KEY',        'uF4I+o.4@BtUeA5g[`GL]24 )qpA,t{jv2?5dIrB,I86RDoO7HtLmu5_Xb/:&bR2');
define('AUTH_SALT',        'mtjueNnP.<@WF?h)[|.8FIJ[jaaG*/kgC9Uj8On`Vs,9P`t ^Ok=!x$_+jemo?~=');
define('SECURE_AUTH_SALT', 'pIYXb*z,zj|{njmb6G4E5,}Bh`<~A9aKw+lC0X oB5(YJmr@Dvt,?r0-^d~IpJ]_');
define('LOGGED_IN_SALT',   'r^ >,w+<xVeqFlT@%*PS?un=JJ|dpSP=C(}BUm1@Wz^kyf4.SQ]XFt*?^7GhIk@I');
define('NONCE_SALT',       '7h]ikGuxOK4D{jNs1?5G[Jxp#lURyneU.6lV#.LP.Gs.rR/O,z3*>S=S/hJZpryg');

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
