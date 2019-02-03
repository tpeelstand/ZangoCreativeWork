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
define('DB_NAME', 'onboarding_women');

/** MySQL database username */
define('DB_USER', 'nellingson');

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
define('AUTH_KEY',         '7SngIV<gvz9}#9m7yq+,_m!/4Z*qzt3?^7]4<%sRy|3m;s 8R*Hh}QMo.$25i5sT');
define('SECURE_AUTH_KEY',  'UK}v|g9dP)i-x]GX!{mBnKhy|}{E#g0->_zw9Ovw-C3cG*&;8b.AQFXI-Q?.6iK[');
define('LOGGED_IN_KEY',    'Krm|65[N3IVQq=po,?ZVOuJ~d1z1LrCSB9SlbXZQT~{kI8%I1/IQYD&R=.|9BiTw');
define('NONCE_KEY',        '|$<CQeJ^9u_K9zG 45M_(8O`]2#-_Egj:)aYE_Xz+LZ[I:ncj[pUlSr:/To1CQn7');
define('AUTH_SALT',        'B(Fyz8I{{? %_Z{gQM6+&yN R.|WLQKfmW5>YT()[]~c{XP!C3a%s +-/+pF9N&A');
define('SECURE_AUTH_SALT', 'q+A*:|lf&/}ln/Zw#_iK(G<78<!>RoUnDt&p0E0y+Ga.+|JNB]b2#v4YL*|QngWw');
define('LOGGED_IN_SALT',   '-sC_(J]UijDI%X%Kzi6@3uZ_U7~/rY.I#U<f78.(Tn;d{J|^nvGytlH1s^` 7vy&');
define('NONCE_SALT',       '7 ZnY]@%w 0el$BLSD,!-O_B2Pr$8%h#IWv][|pQ|>i_lZK-$mH[nfIH^%BOxbF^');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
