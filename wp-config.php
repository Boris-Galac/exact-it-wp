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
define( 'AUTH_KEY',          '(TvRkd53IwQS)>$I!* `U|i{[N(AdFuLiJmgL<s2{%zZbT8q^eYW<ce(hMQL)A@|' );
define( 'SECURE_AUTH_KEY',   '/!0*b<0bK8U.R#7u*_BGjNu*9LW|Rv`nB{P+zPqL%Jo.l.?$@s1FM|/m}V4/qU4x' );
define( 'LOGGED_IN_KEY',     'H&DG!K~JTTiaG@~G?Ybs!T-]+<WJ3DKM~ii)J)U;.,#Faw6akZ4.*}T(IO[JEMA;' );
define( 'NONCE_KEY',         'H~r`_|W`/HT>0c4vP+~OiLmY$SIaZM]![EfW2@cDZt4iWLP;6oM%4;m9&h53{5}Z' );
define( 'AUTH_SALT',         '%AmG]~b)]?2lvv1Wr9=; hzu9sf5xxSbdT2O]6P<;h(8yZ(Jw/,|Ks.]^6?]+5_U' );
define( 'SECURE_AUTH_SALT',  '_%d!Fn!V9+Q.8HU&,a/mW !G!q1hj>zD%>!Dt_0MYtzOc,:A6p[pnvlF>iNU=_`W' );
define( 'LOGGED_IN_SALT',    '1gMPY5Ti)=`nf=Cv6]9%pB6Sp-A4D<SJ/ vZW2{:[5 ]-*)({~N6n{|7/^/rD-m;' );
define( 'NONCE_SALT',        '~t0Zyx9~}Nu:CK@6,vP#Z>{1uXXo)Bpt:v/QWuI6|_Zo9`IK8v3g=;?+%9Y<I]r5' );
define( 'WP_CACHE_KEY_SALT', 'zCv;z6yCu^y<=M2>GTYS{Qo6*k;3lyY9VpEU@t-b>x{u41,mO6HsE:{,N%wMiY+<' );


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
