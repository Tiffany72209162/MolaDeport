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
define( 'DB_NAME', 'moladepor' );

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
define( 'AUTH_KEY',         '}4EOScV$,LsZ*}qNYWX#O&n<Rft@xmz/TO)us,|Tt>4^)`aEbi(T&@iR-EmrO<IB' );
define( 'SECURE_AUTH_KEY',  'i1Z4$FvVE8oPC7k vOQX9-%,Gi^*ErFP5|_S:1pl4W}ySb/?ZFDp?-+$1B+WCQ3g' );
define( 'LOGGED_IN_KEY',    'iIr=tlAF.u2/6)zL-xE]h#P1ght?|EzeRX*aSBa,01l~dU1iLP1XkPZ G[.5IN4]' );
define( 'NONCE_KEY',        '>q&xn[4Gw[?6D-)A:$*6EyT:`ZeJ7x|u<&I{,m^}CryI.7$;@/rn9m-+mQBAutu-' );
define( 'AUTH_SALT',        'GJ9#uBorqxeVB9%y9a-;f3$XhPl)uE}Asv. {{6?YV40/pvW@UmHw>*8Kp(y?rB>' );
define( 'SECURE_AUTH_SALT', ';d2;[[&a`k:IPLzjFr(kmyDY_:tebVk9lNLxnGz$?%f(kfp7$_K#Nb^M_uUbJD%j' );
define( 'LOGGED_IN_SALT',   'bQ_2iG2hOu>)/Pt<)m:d,>e`F8Ed8~M$jA<K_V]S=!/Le{8F@>XzZ4yV~9B&DbO,' );
define( 'NONCE_SALT',       '0,Ehj06f)#HKkQf5%B~NrLj<3R9K8,9>=B, TEgYG4xEURUg5JvY/PmVPe;q!~(i' );

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
