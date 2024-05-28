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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin_dev' );

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
define( 'AUTH_KEY',         '/.UjE<y*B?DP6EG!T0mGX$(%R<@Y^`{5wR>VyY>zHZUGf~&l.(&,w|pCCQXA)@>1' );
define( 'SECURE_AUTH_KEY',  'T~!Ljl%;G9wq?x};!0}91Y%0h@k7ezfI]N*_8lQ{5Gr(jI8mv7x_`w95>d+7, DY' );
define( 'LOGGED_IN_KEY',    '!PV*|?J05nEb  4oE2OQ~/l)YVTm8cP?8#~ZP1mX}x:mSBT%J3szF^A={8-yG*kX' );
define( 'NONCE_KEY',        'pxpm&,4ctWz(n-&}#kP3Nuk5WM.H25;j/giw4,5F)[RdVm(Bg,M#,*<e =>cRY+k' );
define( 'AUTH_SALT',        ',@Ur,7l10Xz5kQv-XnkmG=A0NYpLWDhL^N[EU8L?LPA7 d[R._)uz-qjb #,uRiF' );
define( 'SECURE_AUTH_SALT', '62}5L MiKe6_ C%dc Zgx[U6}rQ#m1Xt[w!+,Xhuw_K/^{wP!0jqLG_t|py #|o&' );
define( 'LOGGED_IN_SALT',   '@5E{,%;F.BiDMt/t7+wBnJKJAwnfi8d.L`.>SW_ar`Y_=XFk*yjtw:QYnQoJ/r!S' );
define( 'NONCE_SALT',       '50dVj&Bm{D9/ qe=cSD&n9G-z 3^)9IM$}Kt+N2aLG*}7ZlB Az1Xl6Q<fqsz]TZ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
