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
if($_SERVER['HTTP_HOST'] == 'localhost:8888') {
	$db_name = 'joshrcook_wp';
	$db_user = 'root';
	$db_pass = 'root';
	$db_prefix = 'joshrcook_wp_';
} else {
	$db_name = 'joshrcoo_portfolio';
	$db_user = 'joshrcoo_root';
	$db_pass = 'IloveTara23!!';
	$db_prefix = 'joshrcook_wp_';
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $db_name);

/** MySQL database username */
define('DB_USER', $db_user); 

/** MySQL database password */
define('DB_PASSWORD', $db_pass);

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
define('AUTH_KEY',         '%WR^dxr?jAc];I^9nl7__FXeapJ7t`>kp=RJ(S}uOAGi?nZ^dmZWK]|+=5Oso-T{');
define('SECURE_AUTH_KEY',  '[>FrBb/MK|9+|Om.d8^eUkA>?VSRcAK;AN]lMn}Hat[Etp18jb.B3vg-Vx$#Pk(`');
define('LOGGED_IN_KEY',    '8N}wImmg!=(i>}&qe9/+a>!nmb|Tt.KH{o@<PN772S>Vg1WlMot_7eVAS7=u^cB6');
define('NONCE_KEY',        '[xM?~LE`v=sT##LZ`gN~O*$`eG0Q)H$@OF:(Y_k((!dF3+%7Y$E@S^{uCo&{[$<{');
define('AUTH_SALT',        '%Z1V#vEM|AyunnJhQ<8CaM5jY?_[1JH!+|z`oox;6LZN:Lw{?.u3Aj1B5q2p,lRV');
define('SECURE_AUTH_SALT', 'LO{~* 5&*/SGBf5&$2:b-b?M<2+H2ztj4cA0he(p@G`S~-pXd+6@ tS|F>rrh!g-');
define('LOGGED_IN_SALT',   ':Y&#GsQn,`v9SbWu?zbEeAO/]YtS.,g.,|&|NZ3kMe@(T!+=6j-CX^{L/EW~+J>:');
define('NONCE_SALT',       'GY]bq|?qgya>`.vJFm/Q|8`Y5qt&8Om(|-C5g-H_9dH&_Rpf&9@E]<}z_9>bfRQt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $db_prefix;

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
