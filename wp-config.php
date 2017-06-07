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
define('DB_NAME', 'wordpressdb');

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
define('AUTH_KEY',         'Srgejl&0pSf)QS_G1~o{1dTb[PNG~a,lWH9&7JbI^r9@PE!#5?<ZU31FpJit`}J~');
define('SECURE_AUTH_KEY',  'mhuBY=O^532f-LsY7A,3_aj+ lGU9.J!KP4A.b!h:QM!71GTKfwYni>h:<a B@+2');
define('LOGGED_IN_KEY',    '*+,ZrIT52|}~7~,jwo|.SCc<R e?;)g~Y#Vi~[{G@34Q|c9hVu(jaJmCBU,c}m%|');
define('NONCE_KEY',        'e_1P+Pke)a.hJhHgT1C)FO,DD:%Rmd(CQKBTla]|in D QrUe1^L-C>i^l>,#?@^');
define('AUTH_SALT',        ')6DT,a%(`A2|sslOZ$GRiTJ`L&oI}{6N?T(4(zW%HrZopO3m@e@2<7|*3hA^vUBo');
define('SECURE_AUTH_SALT', 'SvI8/NO5mv+Zk:@.+r_i?w!RtU+#sX4+#sh~Nl2}I3H9Kau>c=3;TOQqRkt;+A2T');
define('LOGGED_IN_SALT',   '<I)G<+cCO(S/}ode}JiX3?DCY>#(fDuYGkQf^$UE,h|j>_5e0Ufp,-N?~wc%mp^r');
define('NONCE_SALT',       '${d%8Aad`C#uzWsRLNCpjIon<Y;9|wud5x^7-Fu[XBu+IF|-X+i]f%^iRcnywCh;');

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
