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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '|;b#vXA>suL8N6FUwS-)~++w|O+t3s{d@u,5=rM.5/P33(HKA;hV?{|8m5m`?SpB');
define('SECURE_AUTH_KEY',  'i+u|OssGX`lUPc>zN=&XnVg%{zjy:^D:itbfZt6sJ#8Zvw>TaZ]duLBwV2`B-ao;');
define('LOGGED_IN_KEY',    '|y%S&.8E|;rg%;4{ 6XVxgXbHS5Sm]Lo7L1{3Ec*T}>F6bt;ub]2-?pZ|0+f208o');
define('NONCE_KEY',        'p:+EYD,-u^H1^Zq-!=F>3;NXI P-/Zx^l[R<whR[y>eDg~xfp^-OuT~s}$v9]6Oc');
define('AUTH_SALT',        'eSe-!|@6sou@BOLL{T[ZLd1RU11jkMaqD}4G-$3cZ39MPS3`~C%zf*<=$<;cPqo?');
define('SECURE_AUTH_SALT', '~<+C#h.KWizL_U@GH;3!g#(E#c.l}>?UJcM?%$|H1{potxgZaYQ&[[H.#P+v/gFL');
define('LOGGED_IN_SALT',   'ges?]BpaxMJ3VAAi 2n+4nes>% ,CVc2mB#h8$+UYI5$xc>nqp=z3 5#]0`l:+;o');
define('NONCE_SALT',       '-S,Dy+jREOANQ3i.jP6TuJ;fcJ{ZD8AryfaOIUn,W9ZhC&?vX`A|X/;tE#Y2y?*2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'olr_';

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
