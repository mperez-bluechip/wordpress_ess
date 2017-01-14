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
define('DB_NAME', 'wp_ess');

/** MySQL database username */
define('DB_USER', 'mperez');

/** MySQL database password */
define('DB_PASSWORD', 'admin0112@');

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
define('AUTH_KEY',         'W=^]/d_UzTI C}JSw?SnrCS-$dpqRz$9^1Q61uVy5)fu{mU`@X9KdwV0-GRB8tKI');
define('SECURE_AUTH_KEY',  '3~`x:]s`*2CrQX$v!!DmX2f{iS1qE`iFK((]tD[FE?l<C1+jJS/Sm0V4:ldHU]!X');
define('LOGGED_IN_KEY',    'S>n?1^*t!6=A}y!|.x(R* 6lY$,PG{/F{Z$yh[u* 1[NuZK]z4uPvLOO9I5LqRVN');
define('NONCE_KEY',        'xi~l* jk1P|Sl?EMRC(P,b#NaN?x@*~;J1>L8CB0$7@j+*=WZc^qc=EgoS&+`C&H');
define('AUTH_SALT',        'C_Sv;Z/$HbFv851|!~|6.bI!4:.&:6X3v0v*hyc;0CV<$hWMI[SN3mQG4*e|GC d');
define('SECURE_AUTH_SALT', 'Tjd6GrUvl7<8Y)QY U+h5<Dp,K=b-|HwJmz88:3ZV?oj{1%Eyv_&z0?sB?oP!G13');
define('LOGGED_IN_SALT',   'x:A]0a</PTHAZ+P:okE8!hIQx3<D,g:3R@.C ](9}9W@el&ZH(+}=&y|n1,^#6KA');
define('NONCE_SALT',       '6T^j FkQ1|{gYsfs>hv!#e3..=8D QVsKm@?ci:w$.-V_tGEnV5Rw/Qg/uqzHg/_');

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
