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
define('DB_NAME', 'hanifmianjee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'E@V2aWc$qbwU$d-V7LM.:w.33GT|Wce#^Va2b1}66UgQwwkZ8>]oeH<qr+Ua{BV6');
define('SECURE_AUTH_KEY',  '9O$Z[*4j-K[tvv$nMWmILJ[h{1m9&?,IGG,Xay.WUx9]6yzw^Rh+6P$>Ji}uvSxQ');
define('LOGGED_IN_KEY',    'T>Bv>JO{NrRB1pn7,SRA8v|L[J5sC`Z~|doMjb^%RmkKZafA85ayC#{O!icG_+S#');
define('NONCE_KEY',        '%/=:r,>pTf_h_vEx@/?(329.@xqEY fq`:Wa_}0VB_H7=OO M^H/4PabofVWXP[n');
define('AUTH_SALT',        'd_kezZo7I6gE]t~(tAg+8<Rd;/1<TijLg[MI6=+RO]K@oTPR+/0D4iWX}DFpsh<(');
define('SECURE_AUTH_SALT', '|UvgrEs(C!+L(sny?_^z$@;8Rths43jj^M}QJWC2:*M-yXPa>$HJ<&iV~sslR4!0');
define('LOGGED_IN_SALT',   ':<pJzvX&Hs9$9I7#tB$[E5QQ?[!`UZ7jF.w2I(VSKA347>T&@rks^PouhgFlfW/O');
define('NONCE_SALT',       'IdY)/$ljeGRBq-4+wE++I?QNlx&t,=~xLF7$/KsfY!b[G6ae<t_/cX:jebVXvEs.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hm_';

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
