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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         'JKYw*/n0m]dMb.<a1=@-&D[Nrdn%m>-Hj>vqTGrSIJYn4U.r(^9-*TZ5E._+9A4K' );
define( 'SECURE_AUTH_KEY',  'w[]X>mHfGB!8?r<BG`bBY:},wB:oTA*xc$7jGhA+}LYb!QN4iKz~zB_0 L@20 }A' );
define( 'LOGGED_IN_KEY',    '@}q4T&m6mt`Z4L]QN|D&URwvENu;Km7Wcfp5~<K+v)LnZ#Zua:M/4f7AFgz3rn$b' );
define( 'NONCE_KEY',        'Qb7 $?vsZ:])5in;n}),wPz_-Qw<Ctqe]6@-}3.AvL#QC2yM2,;4+m)b{7|TF^BB' );
define( 'AUTH_SALT',        '?{^f}a;NFw^L#-_T?D_fdl0,$H!kI(~o;y.l<YT>+~,2;C$E|Ikm&BPGU=~_(3T!' );
define( 'SECURE_AUTH_SALT', 'eHY5S)<+eN291o&>1;tv+ D4zt+{CzyB[|>+6M!~T] ($TW>C/z|?pdj]d#g:kal' );
define( 'LOGGED_IN_SALT',   '=_|15iym|LCdp>$l#G2&rE]x[m@uPEsZ{%iy;;jVjCTR}-]agiNeq:QoPv!U{q39' );
define( 'NONCE_SALT',       'eiGGiplsJ,r[Dx`;&c$yy^9g6D4r2^A*%!ZPk{gzylV4.CKzTMbD]kU<?))]LRGd' );

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
