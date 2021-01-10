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

define('FS_METHOD','direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'news_two');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Root@123');

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
define('AUTH_KEY',         'rAvD$In-,JNzbPwt_HXJjC;>=vQt@72 P>@+=quBb(Z!~T_o<ESI8hF5uZhsVFy:');
define('SECURE_AUTH_KEY',  '!`p<zVzX9ny{zBp)Saw%SGkh@tbE1B}j7l2[+qnUZ,}cEKgufY0jEsCp8JO}L?6f');
define('LOGGED_IN_KEY',    'Y4R.2(rJjsZ(V@:2@))77^9:&)_iE+gL,mntg>*U3G`2kB:IeJ9]%?JdO@UxbCbk');
define('NONCE_KEY',        'c,8Dw(F !z1N)t~Pf7U^a-{p%0Vb`VV@pmKBEJ Z&G-NF)4HL8KF ?2ALomlm[SU');
define('AUTH_SALT',        '6phC9Vzya)9,5zelYkWT{+H[o.XbIJ=KZo,KToV<*-jP:j&3H[<Wf-0:yuq#gDVQ');
define('SECURE_AUTH_SALT', 'R ~ucb*`D`ByZ J#8[52H%3F=8r=6F3alN%8l*hu/x`K4}pKfCJB4Nc4;:wD]vFn');
define('LOGGED_IN_SALT',   'S#-[b]Aj,GE;0!~e657ugw&}i8WZkz6*o/Xb=LramPGp?o4%@V`/4S_s0A}042KZ');
define('NONCE_SALT',       'gb+wnai=s=l$GHK:DQb=cU#5A.( oLH}!dB<b*h~MR/8EiR1A3x2yN!k7Q{*~t9=');

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
