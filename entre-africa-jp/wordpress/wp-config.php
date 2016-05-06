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
define('DB_NAME', 'entre-africa-jp');

/** MySQL database username */
define('DB_USER', 'entre-africa-jp');

/** MySQL database password */
define('DB_PASSWORD', '8Lv629W34JVHeDJS');

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
define('AUTH_KEY',         'Tj]]zG6CmV~^ 5S4UHbgB!DmUtA_@Q<n!b5J8-LVdYXeIwVYzW[(W[sY=d!0r,B)');
define('SECURE_AUTH_KEY',  '%=r@!cX:u_nG?*$-:OnybP{S0{lpAcJXBv!O q.[[{Ky 0sL#ldtw8!*/6vX]2.#');
define('LOGGED_IN_KEY',    '4V&!w4ms)b8s&jr#3@:>Ve-lEhodI##a@,y8(YR<8oY,~_i{,c*R96v<<#89$J(D');
define('NONCE_KEY',        '|KwDBQZ:okolZ=xze<#mA$/JTvwCUh#zjk}z:GMRq}JV<h+RA){?>Sv|CFlBoe+g');
define('AUTH_SALT',        'w:0w(<I10omm-|B8o#1&=!SUIl?>bH?1O)5Bz42:_Ie3Z3]1=R)>^/B}6gdVN{_U');
define('SECURE_AUTH_SALT', 'MAGHjJ]O|K;mOZ]p9rx1/Bq/<RLp4u gGxR1?goZ.:(x2>M-{V|ovs{PEX5|99Nr');
define('LOGGED_IN_SALT',   'v2xDNDkRJilQqrjlj(}`~1Yw?^6g&.wR*#[M0-r5rL^Zc]z>d9#`q%~ryhN`-/m?');
define('NONCE_SALT',       ']}KO> PoWirQ`q&bS3jvieL/P>/lzSf]]_ ^AboY;zu{{b]pdATql3=]T!W@GH3W');

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
