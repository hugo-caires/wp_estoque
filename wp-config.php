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
define('DB_NAME', 'wp_estoque');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysqlroot');

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
define('AUTH_KEY',         'w*da?]6SSDV|m/:#F/}G?2vE~8<3kWr^{=9+X/W@JY=P32RXdAq):%|:oGP5+,nn');
define('SECURE_AUTH_KEY',  '#1Svqj[Ic-nW%rJ!hS%<-Nv+!EV1MT#GA>c0y&h@|>7WKu`E;[y|QZ1WI crH/I$');
define('LOGGED_IN_KEY',    'Q+/,_o[;!*.en@rO*n}%]Da0$.OUf<i+g1Vd-gRoUTSi@aSY#jFu;{14vaLH-K(9');
define('NONCE_KEY',        'M}A8I[!`/w%Ul!MvQaBJ4NU2p/TGjxoz1EMIOt=lV&_?n>o%{zpLvl+.4 S^cLg5');
define('AUTH_SALT',        'BS=?K?A|SB})fa0nIY,KR*c`t+,M4>S9Y7G&&1$u2>48{2|o7;umk[OW+~Nb[B(G');
define('SECURE_AUTH_SALT', 'u9$/w`%Q+Kaa:C_])kPb-RMXfrSXoF[y+Pf*w|J9+rx$aarZnVrW@0mYM48`pP*s');
define('LOGGED_IN_SALT',   'vBO,.0Su|m^mm.RDxeb[i${>~d+IKj)D(3i{mG}zAFuKS!LT#,f-& ,PjWkihj#v');
define('NONCE_SALT',       '(_Y-]hrY(UyoV{vdS6{4GVFTaec764O%oN$)q#1/DK x&.bx!mhWk{U +E~)4USd');

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
