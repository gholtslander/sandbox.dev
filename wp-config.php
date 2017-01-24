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
define('DB_NAME', 'sandboxDBggdm');

/** MySQL database username */
define('DB_USER', 'sandboxDBggdm');

/** MySQL database password */
define('DB_PASSWORD', 'GpuXmM8WIL');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'W#5OhODWp_xSl*2#t#9;Hk@r|8,z}FYN}FZNgNgVo!gVo!4[w[C0J[C1KdK8Rk@su');
define('SECURE_AUTH_KEY',  'xt_5]D_1]9S9SHatSHat#+ix]D24NgVoUocv>ocw[C0@0J8R1K8RkRGZs|-Zs|-[w');
define('LOGGED_IN_KEY',    'OSxOxlex]D6_5;HaS2LDWPiPHatm*!z}G8R80JgVoRGZwk@odw:!4~s|C1K4[CZOk');
define('NONCE_KEY',        'y^EIa_~_tSH;HaOiHaPi+iWp.6]q.6{<D2PiX@0|CVK4NCZsgKdRo!wd-o!4:s|~1');
define('AUTH_SALT',        '@}@B8BoZ!Y!2bfb.y$*u<E3M<BUMfXEXQj^uUrfy},r,7MBe+p_9;-1#9WK]H5');
define('SECURE_AUTH_SALT', '^SHWpWpex]pex]D2*2L9T2LATmTHat<iXq.6{x{E2LOhVo!k~s|8~s|SG:G8SpdDa');
define('LOGGED_IN_SALT',   '}7>NRNvVJgzr|rk@0>BeXq.+;+q<A;L{*2PEbH6TmbyXMj$q.ui$2<A,y{E7Q6If');
define('NONCE_SALT',       'UgFYrg@kYv>@0XLi+q<ti*2#D.y;I6TA2LEXqiIbTm*yfyq.6u{^3QE{E6Qnbd-p');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
