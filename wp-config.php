<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'smhg4.(P0r1xSKFc8;Y7!30EG93(5sy#>8tZE[ob6nJ@Gb(tRTP0$4n6ZSi?M~[.' );
define( 'SECURE_AUTH_KEY',  'sO.aN-_]6dT_$/7) [[ hRSyk@1<e)wm5 h/69pz=:5o|F`/PWN_Xu:-.[.a<}M_' );
define( 'LOGGED_IN_KEY',    '!i)49,vI%nm^z*KyRUvH<<V+`>5ynCH8l}![N$-uN_kll53au<P{3[_/j(IcJukf' );
define( 'NONCE_KEY',        'Bl%(m{>Er:`5U}hH 0s;cnta0E|zXb=pe};0YLX{z=[kFS[J+ckQ@`RAjL<c1GX5' );
define( 'AUTH_SALT',        'aK!`rt!>G8UnEjgi3P8EcUbpSnSjmuv# yBRd.>udH[>5.^U/+_o!T{yge(Sw%2#' );
define( 'SECURE_AUTH_SALT', 'nU!&+1GS`d*l4x8N04c9=RryR:1$sAzNP#U#LfKUVYWZ7enN=*]MC$:N|MplJ[;Z' );
define( 'LOGGED_IN_SALT',   '>lf^D%J0Cu@VVOm[B5&;Z]D*1[7,^xjSiX~9]G%#0-LMK:Mea2{V8qe9tKkNhYX|' );
define( 'NONCE_SALT',       '|6IBL{c=L}_bLDYoFI[,=79~sR>]@`0,al#XJg6.(Hy9?{z4U.r9%Ke<~p1X.w!<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
