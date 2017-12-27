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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         'u2Z}hKb;jud!TR1XePRAciz!:5.^Q/y8MT`[JY%gaL>+Ra_}72[b>b]j~Kp_s>tz');
define('SECURE_AUTH_KEY',  '.e*_tr.jJ1Q%~&`fjO.sERW=.vud)Jdp~JMKuy$,gam=DekVU$A9nSHRM*go-:i#');
define('LOGGED_IN_KEY',    'vmV6NL%DN5q?@LIGJg/,%)j~@Gz[2P2,Ppe`e:?I=6`91O}xwP&(vuKb<iX_jB5Q');
define('NONCE_KEY',        '2R$Shd>]FxGR4gHRy#*_+eShY[{d|w/#Fk}T{OM>9s+du<5@4g/KD8yn>UY{0#Pe');
define('AUTH_SALT',        '{Z<(5^)kfQhr$o8F*w l~B>2=v$?JF99cFS%5]Gtw9o1E8wHuoCx<zKOTr2&?mIv');
define('SECURE_AUTH_SALT', 'lU_E7}GGdRendjVN$m{Iid}=Ka*7V}?2=axAo.=.z0T2d`YKeK:9]q1D1?]x&7`I');
define('LOGGED_IN_SALT',   'tj=Uxvh--cc<hAJ11I_/8pmH2_i3Fj{hd.y*b[S.emj0X/%.>j x0gkT_C_Vsq(b');
define('NONCE_SALT',       '5F|V* 3RnX*CD]r)[o6|+IxFlY@24=Bgv(eYZEO#>]WM61ZI<OGs;gv$.KL:*uUd');

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
