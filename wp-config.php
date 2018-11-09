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
define('DB_NAME', 'dpws_godis');

/** MySQL database username */
define('DB_USER', 'dpws_godisuser');

/** MySQL database password */
define('DB_PASSWORD', 'Godis@123');

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
define('AUTH_KEY',         'D?F!Y1B?OU[yDA7cK1&f#>Gz1<cz5;$x$r(3^Lk=m r,tiv;)y(mD276$8+VWgW@');
define('SECURE_AUTH_KEY',  'Q:7_ifG8^~h}uci:/W7uR+o>3-DxQ@3c9CW]D3A%1Rhp2J3u.fTs~PPrU8D91M{4');
define('LOGGED_IN_KEY',    'n~:qBtA*q&Cp=~Y)>m3M^Gghk{ZgYo}x9*cQD[P@&^pmc|8W/SM*Buw,4.T~[p3 ');
define('NONCE_KEY',        'arr_{*tf<!rA!x0RE-y*Y&jA?3SgfY>dxNRsok&7vtL~3f8BhOpA#+q YTcM=@D?');
define('AUTH_SALT',        'nN$fIbksh}?6n2Qy?MD-0[[q1M5.K=stPvWtq$1cGl{/9z8a8LW;d.<PUIH-*98>');
define('SECURE_AUTH_SALT', 'A2l?)$%Hnp.^IP09RW|/kwd{IK&>%/S`KR}7*>7}(Qa7/1tlrZEg~utnx@B(%Xpa');
define('LOGGED_IN_SALT',   'dksys0<P;4%(a&b+Xl]!lU3oW9x@I?WBJ4$$1kc[0>7!dXhd~sbE-&e7ia{iQ :F');
define('NONCE_SALT',       '/WP[S/A~R7-{iV-g0$3OB+cY6kE?8Xb^u#b)>6bUd?`%W_VFJ(Sn34O%Q)i:gzMJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_go_';

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
