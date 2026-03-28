<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'HsfR#A8O#>|x]9Pd={Y:PGyWKG:h?1k(t&uL!s)uL3=&5DU;PlgmuUiHECV.La*,');
define('SECURE_AUTH_KEY', '/mEKr=;zbO.Kvr2o%hzQb`3zkACT2O?Zq9]f&Ey?C_h3y [e[o_QkR7|Y^a|W{MZ');
define('LOGGED_IN_KEY', '/H0nWQ$hwC[`_FS+fT<^Mlib?e^gN/9g2,r@%b-g$oMc fG6}Gz7`MNH=jO-_NmC');
define('NONCE_KEY', 'UleE:.MAXQxlm,Kh(zrspR~MTbFIB)l>ix14BR>Qj[<i^nyhN+vp3*O.) {:[hqI');
define('AUTH_SALT', '6MFM6BwcwW98Rc=*MG}5UOGlD`LK_4*QOk}JEcLq)2(1UoN?o1$ow]:N#r#t!Q@A');
define('SECURE_AUTH_SALT', ' xUF4)GZPhylB%!E7 D5VD1rF9wx}IymWC!WLO-R~]ts6[yxA^vbL?qr@ZQ6.Cd6');
define('LOGGED_IN_SALT', '?&7b_*fm>Laon18s>zeW`:SyM&;-z~T)bWIL3VnvX+I-,Z+5{{LuPh&ooKAe03o<');
define('NONCE_SALT', 'P]b>2^`@M)*5$()*ej~L.OH+E?A1l.lq&uXC?qY5!*AzxR|7qwO-?Ho7PNf<6qU8');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

