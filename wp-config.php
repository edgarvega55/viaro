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
define('DB_NAME', 'viaro');

/** MySQL database username */
define('DB_USER', 'viaro');

/** MySQL database password */
define('DB_PASSWORD', 'cimISJj4uNg6NT9s');

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
define('AUTH_KEY',         '?I/])Q2_VXBN}#j,=Pr]FZx4*O:HeB@{!V}TlC8ift*UC={6>FtT0qs`:Q*,~h -');
define('SECURE_AUTH_KEY',  '?sHxn8_L)+fu=g7u^V_hVzT0?{Kq)7#En},$K1[W/[{v]T@Rni|2f+/WNNdd+Vtp');
define('LOGGED_IN_KEY',    'hx@GWjy!)jx309~]A1[*e>_9*<r7~j/y(vglt*%s>EnwR.)3V8t>gw0h8x+QF_R;');
define('NONCE_KEY',        '.(N+Bv D<O:Z=81=dPEU&S7vM}r@e>] s.7rSMe5ND|>TNDK&sW&.c{kN{zDm:;<');
define('AUTH_SALT',        '/N8JP&o:H_:PrOMnFJD1Ad>tOG6?Zlk8dmC-&z.?6*32$N.^IMpebh|A_5DPtjVu');
define('SECURE_AUTH_SALT', 'U!7m:jB0m@Bu({XM7.9bIk^50A8G.DHYj,j,n:fj2@b-9bU>:VF{8[:.^|W7jsE;');
define('LOGGED_IN_SALT',   'ooOE:J&Bu,jL;,rTdp5kXFpT%5 AFk-Q>5~4bLr6n3LB{[AK; ;{2a]|@#-DB1np');
define('NONCE_SALT',       'sUu~yj; 1K[rwn|+{>P<xG!YKJYu}Ub` H8(e>s,9O2A;q{JdHQM#ejBl35qoe--');
define( 'SMTP_HOST', 'smtp.gmail.com' );  // A2 Hosting server name. For example, "a2ss10.a2hosting.com"
define( 'SMTP_AUTH', true );
define( 'SMTP_PORT', '465' );
define( 'SMTP_SECURE', 'ssl' );
define( 'SMTP_USERNAME', 'edgar.vega@viaro.net' );  // Username for SMTP authentication
define( 'SMTP_PASSWORD', 'DropDead54' );          // Password for SMTP authentication
define( 'SMTP_FROM',     'edgar.vega@viaro.net' );  // SMTP From address
define( 'SMTP_FROMNAME', 'Edgar Vega' );         // SMTP From name
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'DropDead54' );

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
