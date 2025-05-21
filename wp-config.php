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
define('DB_NAME', 'seanmccartney');

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
define('AUTH_KEY',         ']! fJ32Ysz:3lq,D5Cy~%mQf{I^M<.k4_]6p ITMPwdPfdIY1ekiMi3hlplL{_qU');
define('SECURE_AUTH_KEY',  '1}#Ny-E]h@8XHnB|_zj2shBv&16*~s=hH.kuH^(b&sU~ L^EL1 FS_[=3N^@^s^*');
define('LOGGED_IN_KEY',    'b<ayAK99kgn0&qr?~H#(_PBmmxGm+]IT=l1n^#Nmms@OT}>>#&Pz1t`Vx%~A=c:B');
define('NONCE_KEY',        'Ej-z3zD1ifj*F.?:(>x-M@%n55_NH~( u;zLu3c(e)DbL~QQ#xW9#~mdNB)hW@bQ');
define('AUTH_SALT',        'jd|x`t8+7r6Mq2vOs^pM2kT*N69?T:hwEs^N{{8bUJt6UDo_ 795jX,k*sn(Q9-.');
define('SECURE_AUTH_SALT', 'vSPV&]J|hEBg=tk[v$K&Zp~X2D5&+]:XKlV85(]M3M8qJ3zxOG.nV,WA^bV~k$Gp');
define('LOGGED_IN_SALT',   'i_ c&|mwq;b)K(xs^CrvA4.@s<);X3iw4#:j#;QQ4%fEO0aRvZ[lizG`82QS#`%-');
define('NONCE_SALT',       'yMt]2/fdH,i TzH- ;c(?u=jm B_Du!dJUA g~<63_`BgyE?@1~$T!${+w2wB{n.');

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