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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '[S(P/a/fjryC9_i|09;t<Eb<bZmTW5iG.nRDF.k-[]b*mVWaiByH_8mMI[PpZ7iC');
define('SECURE_AUTH_KEY',  '6O8|3d1pzt46v4xQ*[Bl%HlQ|<*p}UqQynXq tK?6eK+^n+0tuw!/DNUcOO^rx=j');
define('LOGGED_IN_KEY',    '9?)6;c2F!:va{G|m GKk?{S4E~nDa7H$kY>%U}WPV h,&spC4.P#V#)ufSsk-&vr');
define('NONCE_KEY',        '{o|**LO;WZto.qQd;Mfkz!~hNtW1}}cIXQW-7%GpJ6?}BWWqox]$]&]}C@t}lR=i');
define('AUTH_SALT',        '0?I-KdjcD:dBtJ&WF;h8$U4V_%=3)B_t+-K*5RvJ$X4U+wT#l*Pqhi 1y>$dD[5u');
define('SECURE_AUTH_SALT', 'L`HJtLm`#3?YgN{#Nc5;$Y5omc2wi^Gu(msLBiz%6!Z4kE+0uk}?3BroX?}=A43b');
define('LOGGED_IN_SALT',   '%u>V7Olm5`;S32,{)[GI J)w!fxa1=ui%xR pbvTjqRt//KurTa9?dvYUDrwrag,');
define('NONCE_SALT',       'mO[D(K=j)G:~ZMob-j/&_W}@Rl1}JjT][wJ-983tO*L~TnNo[N1]>32`;:ds.O>%');

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
