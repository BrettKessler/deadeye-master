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
define('DB_NAME', 'deadeyebbq');

/** MySQL database username */
define('DB_USER', 'brett');

/** MySQL database password */
define('DB_PASSWORD', '122688bm');

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
define('AUTH_KEY',         '[.9*oI:[(d|A_14U8qJ9r:sJ=Q:_j#GnQ-r5@=?d&Q=ngOdx{iZSj_ MKnTPz(/{');
define('SECURE_AUTH_KEY',  'e$e{Gad|fd&!>jPuRx2FUUx^]f;QXo(L<TB4;`{ZWM%}_[ZL.pHSy3C1*<-DEC/g');
define('LOGGED_IN_KEY',    ')*K=*A _!V]O^!0&!#ehIr3%XIs[x2<8:iN*|wC8)zMgm!L@N_#J&mWOk`S~*X|G');
define('NONCE_KEY',        'QhujA=gtX{vVGdY^x vhmD;D`)ZF]Z.ztz9f{PZ+dn]q0`hw{051@HJwO&U6TAzw');
define('AUTH_SALT',        'O~9;^d-t[uo(Vs4~OYEV)Rt48edJdk-.8E-@=qsN^=O%-+!7[fD.aQm$a;hyl)W ');
define('SECURE_AUTH_SALT', '**O{m6f|Qte/>DAjv*%,Gq%w}B=)NU8,+W!agHr?J2L#ED3[p%K:o[W{49Pz,3Az');
define('LOGGED_IN_SALT',   'IML@h#k4wZF%hSqX68o${Tml/~qhOZUx54QJt2eCgt;4;<7(znfB|EfGUjy09aD:');
define('NONCE_SALT',       'u!,AWi}qF~0pYB^!S`|PSWM+,sG|]|eP.|{x/Q$tgPZSQ2cB(f*6%g|U<F5lc#l;');

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
