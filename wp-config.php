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
define('DB_NAME', 'wpss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'S3rv1pq01');

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
define('AUTH_KEY',         '?1qxg}=CaC,[ou@1*~uxFqa!O+pgVC9k>+H%XAP9zl4@S(4T3DH9P+~`Y*PL2Uc#');
define('SECURE_AUTH_KEY',  'Z9{rxBf9OVTNU|pT}?5DDhS50tCgkw&E[=n#xD8}S><-dsu+FHNqfB#i,9|{Q+TO');
define('LOGGED_IN_KEY',    'g:|YFrVE6U-@Ckpt;hKy.)zPIj2&%~3eTXj|*@MY-;/NpZ{zE^S+FP;.-}~DQdK5');
define('NONCE_KEY',        'e{t|C:ACh7x$*/.I5T|Q!-rNv@~*VQAen@4rJJZ3rtfp^gVx.x  Y<{GgbT]6p0B');
define('AUTH_SALT',        'xs4J<s0KHAJ$k$FG}86V6k#` CWia}a^^@ysO;0Xr=67m$d<xPI/ $_h&rh45O0-');
define('SECURE_AUTH_SALT', 'KvK+2TC %2Kf+^J:{a;,hN:YtMK]=-s{^/]8pZp|8ds!Lkqj$sCp21Z/7KTcH`}(');
define('LOGGED_IN_SALT',   'L>oAZbqr*cLOe0MWVZ4^+D({Tb_a<$:Sg[J|!cBbn>:|OvXFKIC3tYQ0/gA,-yA`');
define('NONCE_SALT',       '+r>~+S`8AIW-p!5|,/S`{B/Av4FdiXtqK].]&^(S^k7mF2/ZU!UzzHNj -D!hjOf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ss_';

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
