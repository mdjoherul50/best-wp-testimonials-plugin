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
define( 'DB_NAME', 'jahirul' );

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
define( 'AUTH_KEY',         '!>v}kmLDra;>H&2]aIkpbvn;l=UNc0Hye_ih=gn1Z=m[>&MOhk:mciRfZEJwfs]N' );
define( 'SECURE_AUTH_KEY',  ' @slXgklK?wUnR-o_Uu/g97KVb[P&}vC g/{U7?wYFui^V[c~dB}fb: C*pVtfiI' );
define( 'LOGGED_IN_KEY',    'uYV[)&JQ}1<Nk]qyRsP;]1OBRTjc5Y1]>g%YqibQRH;C}#1<W^;q8W!)/</?Npta' );
define( 'NONCE_KEY',        'QD20jBO eyI0/?R!8N1hqLpn[`U`]<{a;(zT!w3$wV0B>|uj}_ XAu(@Cr|p$>#x' );
define( 'AUTH_SALT',        '+|*LCbWhV)&jiM^lmjI;Ar]K.qNve?Us2 vLMxhR~{m8@{FOX(cdngB~SOCiv.~6' );
define( 'SECURE_AUTH_SALT', 'YKl7)P|OSh@l<-;6uN~P&Z<Z<bh)PZX&YAXILL exDh;-x>T4l> RpUF13REv#Un' );
define( 'LOGGED_IN_SALT',   '~a6@V9FBZR@98]drQc]F1-:t)Xmg=PX!$AI7XoD=LTfl$UifzArfwzt$/)TF=W;^' );
define( 'NONCE_SALT',       '(HHkxEp+Y|e=Ez#XC<hR`#%$(fl|@|qo>}qJ<W3K!r1~,RV.kz(dvKw)>XRL*Y1>' );

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
