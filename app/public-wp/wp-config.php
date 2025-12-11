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
define( 'AUTH_KEY',          ']8I;j)xZVEN,h8D1P{<%si0/vNFf|*]Q[}MG*TKR8D.X/0 Adc^D]s`gB<5)v;$C' );
define( 'SECURE_AUTH_KEY',   'T0p9;7hT+-d1rQLYGv!&bu=hX1!Y#5e^9E>6|%lTM+Y=!iB@,!t%9D}_vhgKxr=&' );
define( 'LOGGED_IN_KEY',     'Kt cN?c}eje$`qROj9Z76Ng?S21h33TzynpU?~Vl1 QV+}$]oFXd(]g%5erviHUV' );
define( 'NONCE_KEY',         '66_}W9wq0pTA6L:yy1N$,wr4iVz!^%Y*4P!+fn[3KIK2c5abfLG{YjZX?z_= ztF' );
define( 'AUTH_SALT',         'Kd~L(XW?Lc%x=0)TDa?NN;bLvCvenc`vanY<i,14 /0Zw*{khZOvq= p%qK%e4c ' );
define( 'SECURE_AUTH_SALT',  '?w|E{n<k!leI>@f^<Ida(**-MnRl2v[t)Fe`|#mX+G|*Z0}gI^eMFp,B]igg_@I^' );
define( 'LOGGED_IN_SALT',    'yxTKW2>jjjTbgYxP#/@FZ!,ncI*K4Dz`#~dDy4,7Q2R>TS+FfSy.(O<WrgdPDb^6' );
define( 'NONCE_SALT',        'gM9Qt]li*5_ u8x@WzA@P$!a{D  6T#fd`U_!b).7K{&@KuE}5%;g@G=:t~Gx&$z' );
define( 'WP_CACHE_KEY_SALT', 'E+>u:-|}FgQ0/%X(y?pZ/l~a%3$9zp?3WNLF{?[JCL@B$){Ow>{UT[^RSr_N_nlE' );


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
