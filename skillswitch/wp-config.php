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
define( 'DB_NAME', 'u945096551_EbTqo' );

/** Database username */
define( 'DB_USER', 'u945096551_YXJb6' );

/** Database password */
define( 'DB_PASSWORD', '0o4bzMIuoe' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'EI.M+&$T]ehd6G>BpT~}cn{)dy*^?cY~oEMv8)Igg8zn&,Z{IKZZpP} Doe$]rUz' );
define( 'SECURE_AUTH_KEY',   '8EMWZq*APB.LOr~r:G$))>FMcAw]66>cL@#h|`r:$8Y&c:GiH Z;h(`a+)1=x*)}' );
define( 'LOGGED_IN_KEY',     '}+-en|7:~ktu77=<y/)(&*EIUXd$C!p1SA8.!JH{B=tmjoO(@IuajB!wX%q,Bk^O' );
define( 'NONCE_KEY',         '}F?k<T[~VY,!v]-+FKvFfx~>y,p$XDM.d.zL.D8 x^T{eh=KN866Ue$kvovixb=t' );
define( 'AUTH_SALT',         '/%.=i t<hKydh9}pcaM`}0u8=(?c=EvX/ih<yhH!_eBd49*xV1aYcP@_-N Yt?7D' );
define( 'SECURE_AUTH_SALT',  'j|CVzN4dxQ</x;aL+EmM9T/FG^it&2|cNX?LCxE,e[2ijGBI})!VB,W[{Rxm]cWD' );
define( 'LOGGED_IN_SALT',    'Ne7+FbPCH]st5Y@:GZ=30h{xr0O.YbGTah^I|4O{x&_ra|)@I-Tv~6IOR=;Go&TO' );
define( 'NONCE_SALT',        '>q(6H.q}-buZ^M32,6{}<L+4Y[LR,TOMtvUNYKr0RUC%B~keKor Njh/N/=y2{L~' );
define( 'WP_CACHE_KEY_SALT', 'M/@94LihFlO D<W5):~^LUk*%aUcLpnNvz(,KmA)D04o-2nAZC.T)(Z#6BtiZ#HB' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
