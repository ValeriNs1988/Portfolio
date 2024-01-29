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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'bBy3hi9bh^E3?spdH#nq.35uXM#r.m.5_{^!^%?TnzoT6~SfQn~4*-Wg33&s3q2m' );
define( 'SECURE_AUTH_KEY',  ':<dfP$9Y<E:<J?9du(A{9pv*gH(7;o[~t0Y(0Y{ !PuNp2X(S2=b:@y;&Q AXN3+' );
define( 'LOGGED_IN_KEY',    '+6a;lpdt`&i&&T&O.*u <mECN_Y19?hvRF64W18|RzP Yry emJB8w.,aQaDl$/+' );
define( 'NONCE_KEY',        'C|T(T1rJ`;<-qQU+ .[un)0d8Jv1AlxmX#Qyj~;So*DUFhw*ISj+tz<.!q QGoj;' );
define( 'AUTH_SALT',        'm@#d`:|tPFL}JQ]2.7lQj:W// k&o1=Tfgw0,Ku.S{<`9<v~sBKgQ}3o%teO/:V~' );
define( 'SECURE_AUTH_SALT', '}mDv%gHb@(Z{Cr/D-]@3/C!tjo{E(S@#0U4D6A,3fLr`Rfn=p4J^|/tkeDK1zL@2' );
define( 'LOGGED_IN_SALT',   'eANSXDkvv6k?=%Co*xrsExvz1h67B1YkcnR^[O{gl;.JxEGSr%KhA89(,j-Rx_&l' );
define( 'NONCE_SALT',       '-k&|=C5qth+vz$r~<&yZtDHHdq3ah*2^)8Or^l/6q=nu)#`*.ItbBv&i8*KyKE0>' );

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
