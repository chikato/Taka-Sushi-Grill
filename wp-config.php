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
define('DB_NAME', 'taka_sushi_grill');

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
define('AUTH_KEY',         'u%E;p1iEbD/L!A!%]:P&swJ1uq?6ON/Honl+#~lJ8,EM2>];-^[+zDlj&o*T*v7^');
define('SECURE_AUTH_KEY',  '(M1{kC+k5H`?Oa&5[,HxEXosfp*t[qwpjmxY.>6fr#08GsU` )5 i,c~k,*!m7s ');
define('LOGGED_IN_KEY',    '+P%9DC{$CVO:lq6N]`vD!8G|x:(Xdpo]p,A6yB-V.PXXaFK`Mk)(~ev8*+YnHSs>');
define('NONCE_KEY',        '0w]}ov2u_3~qJ#@i5^sK9?.^+6sT]saO|)J8)x}P]y).6YI :`61(=qpyg5}JV5:');
define('AUTH_SALT',        '?yeXYt2nN0MRr0Z8A6[frs1P(j}DB$i{O#w1,Cg=IRzM]kg:n;Qa!>}*XoUMH*/P');
define('SECURE_AUTH_SALT', 'by63xqdj/~s-R$FQ]RI]u)kex4Z!OS3ylE1J/^1*GPmsYBl>Pumy8w_.P.=AjXSz');
define('LOGGED_IN_SALT',   '&U8ycUA:vyx%R1`1{TG[fh-~ZsV|UPN5VD^:iBwERvVM Zq&uGpP^iry%r0U($a7');
define('NONCE_SALT',       '.t7skX^~xbeZMF)>?G7d `fh[BUJ.Rd,.UNc{Z2 Tp9~1VNxBTD0(2y80nBl 4}/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tsg_';

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
