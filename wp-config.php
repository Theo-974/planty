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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         ' JcWrs~/ms>5x/,9Id8go@I$2+A]18.&78L|6cd;d:EvSc[@g&e&ZfG$v0DBfeq`' );
define( 'SECURE_AUTH_KEY',  '2x%e5c]em|6HP;rOI5JA^wQcs#E=E40SyI)#0#,*FiT+(er2)&An>LE[vcO[diFq' );
define( 'LOGGED_IN_KEY',    '.=R],tc,jQ*3Gq~|N*h#0M_ujbKI7*G.8MfE9_ , $5))>d pBLpnxCw4^Zy.SKm' );
define( 'NONCE_KEY',        ')gNnE7#DE6AtU WRMjng-z7dI.Kuep34N{*!]zQqkLH-n C@Au:mbSaY8J3gZ&:Y' );
define( 'AUTH_SALT',        'B58[F|ggye{jIn_e6a`pl8q`+J@SFwz.HUJvu+qI4w2E:oww68mFl:uIDFXy7}Ag' );
define( 'SECURE_AUTH_SALT', 'CORJOf6$v^Y&oKQ4Is8=LkbD)Z5:/l1UXu[b.AQ*LDm,o-$Sv%#rSSC<@$OyervV' );
define( 'LOGGED_IN_SALT',   '0-%{m:#39k*D1X]PNO0^^`MeT`MdT,z~#?CO#z5nHQnTTc]7#1G+<7=nI/TDvdS7' );
define( 'NONCE_SALT',       '9e-;1t2fLp!M|fAm?4.:8v$qHgrkQXLbk!v~8RBQ:fy@%,-zpln1!!%iuu+ZLg9!' );

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
