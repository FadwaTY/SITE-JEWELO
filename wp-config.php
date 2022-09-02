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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '$Xus.e(djWl=%dsu}4AW^aI$zVWk2A@+ldyMkr?hw07V RX`}p3qED8jUe5Ju;aV' );
define( 'SECURE_AUTH_KEY',  'D,u,Pvhf0`eCU5X=n^l5Yl02]M@7X%]C8e, I|W._!%<0rH(wC4#pLzZ~@VB$Xy_' );
define( 'LOGGED_IN_KEY',    'Y;qIwf5tl{;^0P~MZIW6erY.JE-NvVWI/juO76j@@FT*RD_S>Wd^!,OrHb`U*},5' );
define( 'NONCE_KEY',        '8RI` VWFNZeHYSX6e3vbc/Ob}SQ:Toa%`+Va0R^z#_,Ie*d3W@7moMRy>Zey|)]w' );
define( 'AUTH_SALT',        'U3*%#@(&ut[sg]_PC4wHuLs_f|Do8,cM-,6@:zhc-1Q)VR=6U0u*}%V pL>?5-O.' );
define( 'SECURE_AUTH_SALT', '&N}~o*H{ bjQY0tgI+2b]L~d.9*NmDQAlq|{]6&`9c>c5>df*)8h^MY^cle&2Br|' );
define( 'LOGGED_IN_SALT',   'f%sZhdvhar2.Oc$xH{7%y>N3%Lq4CK9:J_Su4(Cz6i,f1aI5VJ!I~LT|&RNG^C^I' );
define( 'NONCE_SALT',       '7)VN{l&m-wa@Y&W@:M{JR@N][1+^Ojtg/zCCSyNQ$;M{0t# UO+4Ij>C96>8^Ql%' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
