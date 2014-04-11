<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'twcc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ruth');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Xx0^>( V-?-e{r(Uhbhb ?7XjU5oc5f~Hw{9=1`@9OYXnS+Up6)P> DqnaIp4KCt');
define('SECURE_AUTH_KEY',  'KEstcv<G4I@#e2g^--dre|C*|MwRTG)=OvdRlZ~EMNJ3Ta_1%$hB#ILZ|x|`:m 0');
define('LOGGED_IN_KEY',    '2)ns[McD$F|Y;,*3Hn7j`pqCP{udSG!?&`+Usu4c5l!-ZO{1|1Id,bGd]wZklQF7');
define('NONCE_KEY',        'N4s!)bhugiqu.=f#?gt7Kh1.nH3C9i|?x6%keZC8+@/0H@0@88jh[oJ5D!CXf/[1');
define('AUTH_SALT',        '[_c.NfQ>dFl~|/yb)X%CfPTfJdo[.Griy%1.w&ca.LNYdg7z4;jX|g,f4|f!y/Y1');
define('SECURE_AUTH_SALT', '@~Do[X,_/i*&xL&qQ|-egZqz5#^7xQXh< vsd@fC;M8K.0~HWN57tF#s|^EUBDFd');
define('LOGGED_IN_SALT',   'rBv vQn$zZ{,inP!^N@pq@^ZpbOUm-UNMXi i8HTB9i,@-K~/kTAWSt<Bi#70R5I');
define('NONCE_SALT',       'R]c2I:,G+pb>61+([N>x1/;G6ukS:%]Z4XZ`|&A/A]:`8%euU+e*czbLcI&;-WW0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
