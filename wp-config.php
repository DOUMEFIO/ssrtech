<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ssrtech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R.P,w=^!2ec@ov)]B&V)5=2=vx1lBq[e@6k+g-<O;3&0AHwp`ibays`-xq*Hp/fQ' );
define( 'SECURE_AUTH_KEY',  'TVP{+i~G*.`xVWlm2tz:ge3>8{zED,$+jF)s.;!g=h:8$e_&`vcMdqhX#NsH-x0T' );
define( 'LOGGED_IN_KEY',    'fVT+etv24?B0JGRZ_BFu[dFGS4QMCY(bmQYZ;>LCt~Fw%<Xf`a4k33yS.c)T&?F$' );
define( 'NONCE_KEY',        'n5H7M4^=x?-Er8SA-22cq%2MhV+Gn f0`ND+!_+OhV`1adUm2=5R-]/]db`q=OXh' );
define( 'AUTH_SALT',        '>=RUv>e(J{pb.Zi)L%%lP_BlW)tInY@jtE^c,01tb/5uq>!S]`-)+/!cBmDAOE?s' );
define( 'SECURE_AUTH_SALT', '[wuVcyEc2`}]&n((wn%<NFCq}7+Lu^X1+q?avdNb[g,+2%2zX]KxerEKybpB]#D_' );
define( 'LOGGED_IN_SALT',   '7XXka]~Zk;IjjkTQ9C5as[G:CEI+xm@^G8N?{(^UaXV=a6fEz6xM0<uj1^N{%1|F' );
define( 'NONCE_SALT',       '!=mnQlZZ3<xip,6j=YGh]G.RL@TO)_orp!;< nQO~oC|Gt8yo^(`a[ui0_$gHxrs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
