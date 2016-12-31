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
define('DB_NAME', 'jessicapDBnowoq');

/** MySQL database username */
define('DB_USER', 'jessicapDBnowoq');

/** MySQL database password */
define('DB_PASSWORD', 'N3w3FeqktK');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '$n7IQ7I$B>uf;9#t+i+.pWDPlSaH;9P5H;+<2*mTeyeLTAeLXD]EPA<xO5_:~1');
define('SECURE_AUTH_KEY',  '}8>zg^rYjUnUB}7mTE{6P6.u*A]xe+<ubLXjQA<BM7,q{$<ubyfqXI+iSeLeP6H;]');
define('LOGGED_IN_KEY',    'frYE{7iPaD]6P2D#t*9#;+ep_lxaiOXeL2A<;I;*mu]6*mxixiqXAL1~[sZh-_oSd');
define('NONCE_KEY',        '@~[woVCKkRZGN0KR8|:-!Q707,}zck,}zcjQYnUcFQ3BN08|}v[0z|oVcz,oUcFRg');
define('AUTH_SALT',        '7.q{2+<qyeu$iqTbIt-hpSaGWeKS5D]GO5C|:-[1~#pWdmtaiL29PWDL;+_DL;5_');
define('SECURE_AUTH_SALT', '+]x*it.qxamPWjMT6I{2I6*{u;6*<u+ey*iuXfI19_:w~l-_pwZGOlsZhO18SZCK');
define('LOGGED_IN_SALT',   'L;E+m*q$mTxeP6HeL2.SdO5_9#w_s:~lRo-lS8O5#1_5#te~p-lSlWD:9wdJ4N8K');
define('NONCE_SALT',       '{EQcJQ7^}F>4@jr>3$jrYfzcnU7JtaiLXATbHP2*<HP6*]t#;+.qTamubIP6MTAI');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
