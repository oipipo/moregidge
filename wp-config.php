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
define('DB_NAME', 'moregidge');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '#%?WVJbwu;Dq$U<{]9^WXETq1cOXTo[6eR$*MF:,5l/9_t1pq.R.LD,=G4nj;L<}');
define('SECURE_AUTH_KEY',  '+Wk@+XI(UxQ4LL{w~.n(&k#-:.i~V?U(3QUOhv.6q5@7Go 7`1T,cF:U_0fBPdS/');
define('LOGGED_IN_KEY',    'o;k b]RwnFBYeBRp%T>EGg.@sPq-~J-PNMtQY.sKG(ek`8@,OxU&-AAJ[}|`=FSs');
define('NONCE_KEY',        'KX~iN!{ ZUeOCQ|74AP2wWq*^a?YtoKT`22UvYGD7vTfO|N mJ|JXrItcl* mY%x');
define('AUTH_SALT',        '.5ER&t~<Mg50QQGO82{!.FrUyyVJ^z[fuS~]s6u<tJl.zT)~?V399uD3aY wk?c~');
define('SECURE_AUTH_SALT', 'e]_1@6$nPk7.@g}(Ep={h>j%r?=%BKQ6B+l?~Ag9TyQSyPY4$_[;MjHfVK=7dGQ:');
define('LOGGED_IN_SALT',   '5bX7&kPHI00IM;D_FI]aq<XW0ns@hZ.RCX7e ZZ+7if)EWHC<xrB|ujuL>`A[WHA');
define('NONCE_SALT',       'B]q:<7e=Fqx0$>`jss(|IsFy`QyV1lFEou|VT*M_mNN.$=;{O-/![TsSv0/=F4Fi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mg_';

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
