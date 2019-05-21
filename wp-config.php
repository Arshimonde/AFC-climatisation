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
define('DB_NAME', 'afc');

/** MySQL database username */
define('DB_USER', 'Arshimonde');

/** MySQL database password */
define('DB_PASSWORD', '753754');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', '753754VF' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3xk( -{HwE,MvDk;Hep [i2aN_%CR9|[f~UgA#-(2u_a`#M8Q;F4v/06QyUp<$#%');
define('SECURE_AUTH_KEY',  'HeD#$e$@7?0q|b-4x|6m>FW.`PLfP@a,d 1rEm0I(bypUmJf/OG0~~4q!`udQnM^');
define('LOGGED_IN_KEY',    '42x-t{TeMs,<BEdzp(n4&`[%=)JW,Qb.?*RWQn&rV[@ZyepZ&ud*(OT#VU.eNX(<');
define('NONCE_KEY',        'McH/R*hb@Q<ySdM[iyI;HCOwI],3*{(8nO_e~0*$W<;pt85P@&./v(QxIklz%x>z');
define('AUTH_SALT',        '(`ZC:x~4wV0lT86nW!RnJap~|eme.>;g4Ug[y%Ex[}r1&$A_!bc2ow{Z=@o4mU0o');
define('SECURE_AUTH_SALT', 'X[qBa0wI<[dvX|I(javN pBJD_: <N%9QVh@PA ,*Ni<^X(~SMW%a*sK2@((2B9c');
define('LOGGED_IN_SALT',   '6z~;Nz0*3+2TVOG4PQ0Q5R:buTT*_hSQWkS/c8$v/ASXZ#_Pt7*?zH^-lA7k)F%W');
define('NONCE_SALT',       's/B7cspT_qvIf!N2q<|~p?j3pv_o:.3}EsvCc7E%_gU&)EGk?5tM:@cV>9Z{5P$:');

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
