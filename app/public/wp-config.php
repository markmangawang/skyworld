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
define( 'AUTH_KEY',          'im2B4,aU1v@d*kZS<Np+fDfLl-37;4??#A)mnCkKFFD7tL$YnsAyTNW/Nrmi(;j<' );
define( 'SECURE_AUTH_KEY',   'Jf#v<)?)~s))O5+{=+Jh6-|78m2cqPVTy wpx]=}Q=(,<gA7^`R>AaTj4O/]6#Fw' );
define( 'LOGGED_IN_KEY',     'eN;^B/F(i!n?<8=b4,zbq7d7mDDmwBJ%8F%xsOx+&*A`.NIz }$Q0utj6D4YSr,f' );
define( 'NONCE_KEY',         '9}Sv-bx-Z:Nyr`}=,v!PGQ5{R)My5qER[55B1Aa-?-^Ny,P4H^o_x/Epg&2iWW`s' );
define( 'AUTH_SALT',         '@6E3YUq=;.bRw3H5A=BCzf `9ajr2BMgeGCVg. $V5Ew_>1`N[7n%&u[hMn9c%df' );
define( 'SECURE_AUTH_SALT',  '0._g#`uIa1t*zaX}Aj|8vQFw=!lgQ#WGc-2HV.g*2pu1C=f%Fg$R  {<tk>f`ME,' );
define( 'LOGGED_IN_SALT',    '9^fLNWtMl>A~53$p(S@LZ4C1mwIRsoXH<j7E/CuJ~eOS+PNUI-<4 ?q$2OuUH<2D' );
define( 'NONCE_SALT',        'uM&M/&y6]O(UJ;Iiy|F}f`/q[?fYr3^!>2`wq4aR!b8:Q`jrvO`Q>lAopkHL{)0]' );
define( 'WP_CACHE_KEY_SALT', 'VM/v3d{D,}5Cv-bO&(pzE)k-$qL@wyc1=vhg{-gO)@4]fc+5EREff:`C[[3,Znqo' );


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
