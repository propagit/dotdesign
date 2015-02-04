<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dotdesign_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'A1|7BzD%d.0aB8l}KU}!1m*@)*p>[W]U,@[[tMkd8!gFznm9r(]7(y<L{-}o552h');
define('SECURE_AUTH_KEY',  'l;WMwnxC2rrImZ.G@9^(+7 ]Cx@YQ#o#/G[F::Ujz{,|p&p<H>=uu*xSF$nU-^1>');
define('LOGGED_IN_KEY',    'cz^gLVi|KQ|_N={%zKb_^]~o7q(bFa4Ie,lB92MW#HN+L8wsKm*=@:no#9AQ(5|D');
define('NONCE_KEY',        '6AyhnA2AUi@N-Ltkg<U*qO@Cz5/H;CU)iy0F`N&vhR*U5!I-fi7nS|M(-@a4_Vaq');
define('AUTH_SALT',        '5J@$OI0}*QBX,j]pU,Wfmfi9|gB&5)>}sU.oz-d .BZ{a7&?-y+FnlxHLZG|0<0C');
define('SECURE_AUTH_SALT', '2#jT1@C2}ABY>[@K-?|f 7!Sfn0!+}jmel$ycNz#0x-4E`G9l`Bj|3K@/a<Z4k+)');
define('LOGGED_IN_SALT',   'hq;G<#T@PwL6CgZ85Y+nVW{X)OC8S&`jvrY>+=^[@sq/bF;zzP=f!;|&%Q6jT%kn');
define('NONCE_SALT',       'o$jmG-x${0u2DRA-8z9c{wE.}U`H@C&n&~mbK2{1#{=V-w_?yYc4X@Kyo|-_N<;p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
