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
define( 'DB_NAME', 'stagingbriskon_job-portal' );

/** Database username */
define( 'DB_USER', 'stagingbriskon_jp' );

/** Database password */
define( 'DB_PASSWORD', 'K]D$krbFzo!I' );

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
define( 'AUTH_KEY',         'f!sYeqQEE0VFn|tb=AOWl/aya/gd:wY^wsXP|^/KHD<&WiA`Y2lk!^QYaG#YFA_F' );
define( 'SECURE_AUTH_KEY',  '4(#BCO|yY_/4JA/-R7Y>Hf7W}zit:%)GfTIe[CUCFFG#G* }H+YN36.@a<0q^wpN' );
define( 'LOGGED_IN_KEY',    '8H,1f&{<MI]3?kHb|bPbvgG1`N3]&}TJsg^3jo6iu^7jK$Jo4WtbSumU/;0q:FL%' );
define( 'NONCE_KEY',        'YmM XlIu<l;f>(bF)2`*c>gjC2$Qw9Qp)%^%!pH>~S^q_m]^%n#g,#N@VV<%]uHc' );
define( 'AUTH_SALT',        'R_KM9;l:S|s[Re@CXQFtAtQM;6QvG}I_ddDC,39B]s>%yB)]@:)&d{HF<f6f+LZe' );
define( 'SECURE_AUTH_SALT', 'vTzq$BarqfW]|A),t^B vpv$Db>TR5(LUkmCkWr/Ro3a1P9~F)o5/YPl~g+hMQVB' );
define( 'LOGGED_IN_SALT',   ':`W(:XhoZ;LSX(Bqp^=mKn_yeHI.u3h>?,p38,gKL)AB]p%B%tSA3-R2w4)$6(Du' );
define( 'NONCE_SALT',       'zLzU:kbGUBKY`$1%*M^xt_ztKXYg<L]9KU[0/GdheL^<|C.OD/%>})t#3-c%unA~' );

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
