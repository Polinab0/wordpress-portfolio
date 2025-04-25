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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't$+( 0idJb Mijlx(9r40Vq/@AEDrN96n)l/lb7-;ZF&(g}57o6uAA$wL;tT`/U-' );
define( 'SECURE_AUTH_KEY',   '76=<^esgP$mF}<n5C<xG65CcORUQKNNv==mx /JapRZdh>aep)?|#3&%Jhs<f+9I' );
define( 'LOGGED_IN_KEY',     'SChx3;(I(WX/KM7ZMzMagMgaLr PC1I]qdX+#OJgF=9+:+^`E?>I5;V0yVFMNk/j' );
define( 'NONCE_KEY',         'GxQGl(7HmT$SNAG^Rms]<g6pcK$q5r:F~7PlS!zuyd1XaN$a$q/!2cOm7]|q7:PN' );
define( 'AUTH_SALT',         'IQ|q?aKP(yb:/qs Z,n-v*MM^&)uh$1s(jZ/wl>y1m%PfxRx=,LgU[&zy5 /`j=}' );
define( 'SECURE_AUTH_SALT',  '*RC.kJ&tYFG)!T0ia)#MS*:#+7sJ}rh)))<xn._v1}#.lk7gmr6x4A~:#jH5O( g' );
define( 'LOGGED_IN_SALT',    'v-4ty)Nd*z9x(rlBoamGf?^l$c=M?LINV5w~@[daT:MS`L( ;u(uHzDSqzRrC{ V' );
define( 'NONCE_SALT',        '6G0M^vnmtFEpC~guT]u`N`A)|w_&a KpHP#+A5K%P7~4>JQre3L5@$V#~IhU4oh?' );
define( 'WP_CACHE_KEY_SALT', 'M#:kB1[[m|+26fCa7{9yg! FlOZa<L:@kJYT1m}:EjCfce9.FE;FlmX0-di91t.f' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
