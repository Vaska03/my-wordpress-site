<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'EAt?77fc/H)%Bsi{N4u~7 ;s|>{40$g6|>7B+!Il<ebk6y8>,p8?C&G91l}g+/QX' );
define( 'SECURE_AUTH_KEY',  'ofQXMfvz^>>mDsg#r-R8bt6y9Te^=)$83^y+[%GFKYw`=O]`N[a[U-/qa`n&Y#Y}' );
define( 'LOGGED_IN_KEY',    '&b@u<P-^I N0TZIcd3Rd,)@cLGzI;E3gyh0L-&xQ]#y^%%KJlc|tV$mSD+b05`3)' );
define( 'NONCE_KEY',        'u7*R@3%[chpACN3vY,q.RAzwH&E2v#dV,2gk14%Foh?@6q6#Szr+kEgKm Bp{EaV' );
define( 'AUTH_SALT',        'HK&L`2fQWu10S5(I<w~lT!m5ViYyR?2RsD;DpZrF^bQt~.F.SLC~E)7>7{~4pAn|' );
define( 'SECURE_AUTH_SALT', '2jowTa]9Je~5)dCW3GFgBmMd),rc?I*G$471y[:Jt?zh`_|7dQmfanM_NE%|(|*;' );
define( 'LOGGED_IN_SALT',   ' QKrpB;BCvjXPM6E~st0=LZ)-d922OWFUMU*Y34evdOV{M^R6L&qFU!D|E!(OI$+' );
define( 'NONCE_SALT',       'uzu0L,X6mUpK`OTuXJs<bvR=#{Fj6`6SnNs1tx$ %TjGPQkAz`9Qa.}7[3B]J9C@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
