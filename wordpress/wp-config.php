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
define('DB_NAME', 'pa2_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'StudentA');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define("DISALLOW_FILE_EDIT","true");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&ln.9i!+jOmUTv=(obUh@pKXSr]xXP9s{6K(%6q;Q ~+m.=;`+-&jk}^4!mM)Zt&');
define('SECURE_AUTH_KEY',  'N+s%<3z@/vOC-0/,wXr0>IX*t;],_#r.LNr(cmJ`U@C8y<k`<utrMh06lK(k>/au');
define('LOGGED_IN_KEY',    '/*(]5=]czq4qNi:Q* t.T86d @w^J|wZua@#{FNZ<,:SWkQd1{e-ssmX{05Ym|G|');
define('NONCE_KEY',        'Q?z?5B=Q(kOR)D/^eGWS|_0!smd:>oZPFURvmAql|c9N;qjf_7ivx<ufV;gJ5=+U');
define('AUTH_SALT',        'xwVR^_u]JN?a@$Y*QSl1s+x){nos8 O1k?3#39.9<F4,7!kiWV.[3fFlFQ*J=_5y');
define('SECURE_AUTH_SALT', 'c.7.rDwbW&5~.%pu-,dj[V]!r(wB2r<cjn*u*N&$prs`<XEl)KitqBqaQN(f}{C1');
define('LOGGED_IN_SALT',   'dc{Ui^NKtpMhmvn5!y?`.]GrTZT>-kzFemB@.qQ~31%L{9x:SnOMZQ:|F:&p:Z)Q');
define('NONCE_SALT',       'pM=rlFzl[gi[B:|PT_}=/xtY%z4*8WGcZgaQwK#OwPElBXw{Fo>+rjnHo)<Q13%l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pa2_';

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
define('DISALLOW_FILE_EDIT', true);
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
