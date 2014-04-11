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
define('DB_NAME', 'wp-ppc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(P013-o$e3vNMxpeIsMu+3?Fg8-SY5@-M5(zg?QqdO.Yn )K{CuiU&A5W9mS*]KL');
define('SECURE_AUTH_KEY',  'qX<[)xB?T^GX oc!3P5 7}L79`87ArZ-M1[>!l__Z:31o$-Zq^WLBNlL2`d.vm:e');
define('LOGGED_IN_KEY',    '|7n [- 6E|!k=(W|G!47L&@:Z|@!`K%|%!w,}Y3_KWx#b#uo-b+Meqy!e^qyyg5~');
define('NONCE_KEY',        'cdj3[%1:W#lH,-;=3nu.9|T9R__0z%v-<>H,AD&(df(X f6|B]j7faXN#-2iJ+kw');
define('AUTH_SALT',        'L-Wk1u{%eRsjTu|1KESDPC,6|l1B[3j{,z.yoRH+9d`[F}:)H+0Zegv|fZ~E~+:T');
define('SECURE_AUTH_SALT', '-QV9E(*a_{R?)GM:-tII!}mf,`-T3`_|])!Pz(H8GCd+Y*NG,+$OTKhkCt]-i.?8');
define('LOGGED_IN_SALT',   'U_Z{.H6{{,Fy){E3Hna#q 999N^7=uz-;Kz]c]v F;(IG -PY<]Q9]d[C`D[IFl~');
define('NONCE_SALT',       '?zD#ALJV+2KzyRnj;#Cr{=[L+[>pZH6H3+xtq_XX{njpti88.).QY :]D!qt$r}X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
