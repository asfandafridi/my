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
define( 'DB_NAME', 'ali_express' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         'xsp8{?2%FKQxEVSEq0b9pd<vrs).>D+SrE~8A$}>5WyhKG3DH}M_rF}Z,88u[gRJ' );
define( 'SECURE_AUTH_KEY',  '%UI8.wc6_6,)3[iFkfvpbz _9Zt!MIzF62},w!^R>sR<6.`VC99:b@ @=L_fj>XO' );
define( 'LOGGED_IN_KEY',    '%`$*`@kpw:C!Z1F)#2VZb1f>6_ig?drFOl u(6?7`}~Pb|GIy1,4J:B,w3GrVe=t' );
define( 'NONCE_KEY',        'rvOtsdf zK+(0;R#II~20J2$Oq)}x#rChXkY>{?JS?<Z$d^([#$z}BF|;A8c8GXF' );
define( 'AUTH_SALT',        'xtI!~.VzQLS30Y2tDR9Qu);IMdp|g%~=A2hX~<RlY5L&>F[&DZ>ZfQ1R1eN3Gc X' );
define( 'SECURE_AUTH_SALT', 'H(Oa%gw~kJT/a!lk(*2z!xAG0J3n$]CFK7GiwZhQ3GB<<@q-??!zh5C(%<rp}dU)' );
define( 'LOGGED_IN_SALT',   '/J?n3fqA=pDpqDZ~u(&Q._ATo@WH#Du7E99%5F6@A$V.0T7h*aJt1w3icdRSUIpE' );
define( 'NONCE_SALT',       'f_)_!>/U^r]qO~ydzl_K_{h!Y<uM=$.{&R+:tnKV-R3/RVRUH*6XGu#!f]+[;xjO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
