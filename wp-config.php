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
define('DB_NAME', 'reb');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         't8eAHz1CA=hs5,&aH8OP3vWl]E7&!F;uQt,Zvtz&TX*f$vu[u:uwk?ixFD.8t{T-');
define('SECURE_AUTH_KEY',  'Y7gZk[m=[v6Y-{ammDBC3U5? {xN>@W;LB~f,xCE:mb7lAoU{qC2n(F;tSs7v9gE');
define('LOGGED_IN_KEY',    'T$wtSj9bdIB;dYM,Uz{=$?yKKl9wUP^=K<!MqP5qODe]kVooL+DxeINqVr$c57mw');
define('NONCE_KEY',        'aywrGj2!t}9b?*6M P>9UTW$Jw<XYx#!4;i9%w2x$n(_-Q7Z$_:[dKLHe4;,f&UO');
define('AUTH_SALT',        '+egbu-{76_;]?{6b)usq4KN_k:Ho=}TK3EF$S;l96Sp~*$`{Sai;!bvqa.IGY/2#');
define('SECURE_AUTH_SALT', 'si>NQ=JtUL XhSmS_n!:6wek)dp%PO=)3vy0 Wc.xZ!n%E-D`Z IXbee^giX,=d{');
define('LOGGED_IN_SALT',   'X:dnMvgeB[mt;y;H?5z[I8u!;3(K6X|e[mEBA@#DJ)Vf{`*eMJS%E:( Th,k(sz@');
define('NONCE_SALT',       'jIB#;<m_whi+XAy XCxI;uBI@OC(p+r<S%O|HkYarIf^Jz$r*<>jrf*zIQ~V1/cW');

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
