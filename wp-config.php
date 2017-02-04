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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '4dbee8e8493a9bdc3c6c8a22e09b4a9c86de04176f42d7d7');

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
define('AUTH_KEY',         '[Z9M}Uh>3n690^.O?iOjB[[^<1*_c8P0nU{;1XyAyxQ7rgnsGWWcB[~-V/EiD1<O');
define('SECURE_AUTH_KEY',  'cW&W-bOW.$8w7XwFf&,#qoD,Ph3-+T5%]!K^,z6HHf. lH ;*{Fg>j4se/&2<{+2');
define('LOGGED_IN_KEY',    'f8$m!7$mc$I7CCDBJnWp,5:Yo{Y40[;&U{q|mtGq0,oQ^E$t/* 5R9FEdi#nr!4i');
define('NONCE_KEY',        '+4R]~~E_U+Oimvw~.N ;,wdsR%tOhEBg>>!Bhx}u[ZU#d#.H9OP1]I%58[z&,{{v');
define('AUTH_SALT',        '7gyP5}M6X pq.(9n,u=?,X-~UKqB9!-~zHsPyW!0Ot?-_2Ub%CEE}~6yZbw)t9p+');
define('SECURE_AUTH_SALT', 'x0RlHQK?N{[^O~{#foxY0 MRu^vG`[>0@_iXN]@VOP}H8SiVDVY`cy@GdM:|hVZR');
define('LOGGED_IN_SALT',   'osI:<+6GBXtH_Iv14x=$C#pf%LnEl(H-A.6lg98@a}Ju`ya+8FT?{Z4]J$Ie5gxH');
define('NONCE_SALT',       'h-MxsrmN+A,CsHOC>%;/v_#nHC,4(^tOOGNo>p#vu7[-oOuP.XU=[g`]7[O%J7aJ');

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
