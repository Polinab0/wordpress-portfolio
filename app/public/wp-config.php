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
define( 'AUTH_KEY',          ')|aJy^($%-TY <>Mu*scVZEL,jEx,h.kD3D27_|j3iGU)M+I2Z?|IN8S=VCwBEaL' );
define( 'SECURE_AUTH_KEY',   'ZDeJOV*9rTmz)5T_sz(cUX&^e X/7Z)>(M)F E2n;-vSP  80C:9eEq2Ry;5ZGmH' );
define( 'LOGGED_IN_KEY',     'B!|.;C*[QW!m8>T7!EnF1FS F(587[aT*=[829I_`WE#&q_Dmje/6XH4t(&j|*7=' );
define( 'NONCE_KEY',         '`mu`9KB_]c2M:DqQ=]3[DIrNZC=kRqqf8qKQqu/p8F2>%iiG&Feww:Zyl$ AOP5F' );
define( 'AUTH_SALT',         ':eQ?w%+7)+lyk2Pb=M=1Or3V>Bwi.$4VmCO-}^|p!3E?<q f}}bACF=j7h=u433H' );
define( 'SECURE_AUTH_SALT',  '0G47|vQ8y@ij/^i1Ur]|XVH<`4jML^^ojgc@F|ngT&GO)2kXW0Z70C&.=._Yy [K' );
define( 'LOGGED_IN_SALT',    'Tx3(d!<jGEwh{]kI^olE];{Ma=I1 1V$${.?TynGPGzf:r@)q!mPqmq #4:!`J~D' );
define( 'NONCE_SALT',        'C2K5<l;^C`<|n4YFS)[_*}DKR LpJv6d53YBzXTc[@M4P2Kje1u*jHJ[i&z#[b0a' );
define( 'WP_CACHE_KEY_SALT', 'JoWm7<UFVlSPPtSj:8A}eZD/xPb>4S02,MlmA_#DGJ]qg)Rtbr I}fH_fL]v7 iI' );


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
