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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dreamphotography_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DXK?90??*;GT4MG?+QC;JK]#)PW2dKaO)b@@a,meBzKqe_t@B!Il[_pJzW{Y3&je' );
define( 'SECURE_AUTH_KEY',  ']ogVi~Rm~b<^YLBcZjXf$|k&p+&c+QO|o3e8G.<K`cm<|h;lQDcOo2I+4yx|)fNp' );
define( 'LOGGED_IN_KEY',    '/S}oAWE0FQ%;2yX Zkk2<%uw-{^,Bl1&->ba]h|7d(QJ25{q[l,E{MjmW5a-gltS' );
define( 'NONCE_KEY',        'r]/]7&tXxo>epDf-3&:cJUZo+G %69>3;@y}BGr(N$bsC-%tY;MKeWTkCYj&4X}O' );
define( 'AUTH_SALT',        '~+!7XFkNGtR,f83`Mlyi9ZuT)fZDRvPf5Y]i[#/O{4A$o &PR,r)/RIK60Z~uoE~' );
define( 'SECURE_AUTH_SALT', 'P,71JN=e`Ss$h^D$wI}x_t,Z{DX-=5X0p%vl>HU[A%LaIwWnE6sqViG|mP,=ZCZs' );
define( 'LOGGED_IN_SALT',   'el_m`=_ ZQZ:@0dQcX>W.f=0Uc>w7<Dt-*~EQ+n5UV(X@/F{}^TEGBx !CvdWtYC' );
define( 'NONCE_SALT',       'xkqApOf}vyot<7.L::-ZPF6xP.A,QvOAkCr0&[?s_itpAw#Sz!.?;r3:)85>S%Z_' );

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
