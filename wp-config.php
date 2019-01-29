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
define('DB_NAME', 'freedom');

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
define('AUTH_KEY',         '2 l{/v0q_5%OUBPeTHaA9`[j/={^)z.+b ,ygBNT2/Q#{&nhiojmnq%og;L+5[}g');
define('SECURE_AUTH_KEY',  '>@8mAuI>FD6=*#y@l?+{EIn]c@-:e3R/_GAgHMD,Fwe~`(^/Bc)t4oJs!6KY9TP3');
define('LOGGED_IN_KEY',    '4BC=Fk%`QWf3Nv!jYN_,+?[bIt9Zm<f!PvpD=+!)mfu``<r*lAnxa)B#h+3U,ia4');
define('NONCE_KEY',        '.gAVS:S:;SL}Bj}5e0LiIse%cbQ(!&j/&*FiDd(BN1gx$;=[fUP1a^BW<oZ5OWv|');
define('AUTH_SALT',        'wS@Nrd]kk9$-c/p{3LX#8>2MyI>($_cJ<$TZa;ctO_<6qjGE/7#Ib^VyR6oN-A u');
define('SECURE_AUTH_SALT', 'G#LtntkT3d=6nj*89!(Sjf]8/:sJ*RY7.rO!r?,wthlck@t7FwmQg_DG:!qP0QEs');
define('LOGGED_IN_SALT',   '_WqaZqKqIXpZ^E87/c7=6n+gk2C[u;Yjw*o^7a2,<*{yA=Fy/<v9(-zYB5fh.B^%');
define('NONCE_SALT',       '8wzs1&|%v!BkB>a2e%u;Nx3pkf1x_#VgtmIy;Hd(vN`x?iB`oqmA8injsf#Q7w(V');

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
