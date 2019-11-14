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
define('DB_NAME', 'hawalife');

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
define('AUTH_KEY',         'v7P}gh(|HD+#W-I_&B~OdAN~lD4*Tea)wGCMn}WmmjMZI/=1^f|{k)bNb~t0D:_#');
define('SECURE_AUTH_KEY',  'Fy#pPYc:VwN?l5g3sBt(@74dwh@_^5:a4Xk<Xc(fBQ!|n:.p_Bo#3BbDW.$KI;vq');
define('LOGGED_IN_KEY',    ':6cY;aR=Nq  j{N+NT-Sq7p4^|@VJl!cQ@WjhWe6ts3/Hv-G)w<TnD*;,]vkTX0R');
define('NONCE_KEY',        '[Y^%WWa|KzUc&R#=CE-`Hn )E7?AjS@gmIQYS8CusDt+BP5B1`eX]lQTsG xLL %');
define('AUTH_SALT',        'P2F&(J.@C~*cMj+>F8=U8e?B3B&okB4oo:poR&c :%pRN#2+sntQ2xO7ShWbcVK_');
define('SECURE_AUTH_SALT', 'Opj OW-#<K0#W(JDL+nh13;2W>Y^zr7G9bk1CpX<t:}sv,lRi`!dP`;0lBV?g=|C');
define('LOGGED_IN_SALT',   '{[ertt.X1.Os!wT[_Y:R4PG%(R@|?5+wCXe%/qarVWBM3n2N4%0NZ[9|#PkB0F:%');
define('NONCE_SALT',       '14vU$RfP)*ujDm-`jGU^:$F^7v|LMs:TsER=1@d@J/T~Is#n ,mx,wb~kxW$5O4&');

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
