<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db754583557' );

/** MySQL database username */
define( 'DB_USER', 'dbo754583557' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kamQTAqHtKKuKFSHMCAG' );

/** MySQL hostname */
define( 'DB_HOST', 'db754583557.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X+:|xb}=%-UR_X=qp O}+E[xjfm<0+/Y$9W-Zk &X`2q:C/!YG?SC<exymjfwbIi');
define('SECURE_AUTH_KEY',  '.TiFJ_JO<`_W#|4?n341WM^ ~|,91B]bmZ.%lNck&L&C=~V#V--Zr46!j-RRe9ra');
define('LOGGED_IN_KEY',    ':KI|O[U^&iWYWS #c+1SW1(RryHHPQ@=-Bo6|a}Sb2u+x(<;N.ZM;<aC;|vc6Q:#');
define('NONCE_KEY',        '}NJ^bT;#FmU()TOP&6_G`JnZ7_V_E;-SVUb=xw!r*#W/!5$Ap$@}BrJI[q oKB5M');
define('AUTH_SALT',        'C+LP{~Cx,9G_ILj+5Mqf@<gx5#f?5tvkI3y0|{CMwwt9Bh1jreaUM6o2Vkg/|h*E');
define('SECURE_AUTH_SALT', 'c?au,r:g(7thlo_bbL+CE!+>[?,ry^oO+;$BP94kIQFpeY;`_gkia{ZF.4$*9i&<');
define('LOGGED_IN_SALT',   'G.`=E$^P|>RT_, *T %*]azJ6Ja~)2(VZXCvb6_>mp^F1z+}mf(x+42h}@KX0t=I');
define('NONCE_SALT',       '2+2p`AV]kVouRwkTlwHd%H>)OT/vKmftlV[2c:sH|n8r)NH>!vm6~:ig|G_B7J7f');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'HJZRJJrt';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
