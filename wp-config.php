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
define( 'DB_NAME', 'mbashas' );

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
define( 'AUTH_KEY',         '<:W:om9Dq$wN0X.9]9]FDh~eE4Ip-k6fkZ70[4_Sm3&vo>7tOSdKE?=6m2w@YodL' );
define( 'SECURE_AUTH_KEY',  'Ii!g}=zbQrm!e4;~:^0[a<l{c&/{F4nhBAHM&(%;UYO3>OK_!b,`-Jk]%[Uwjp}P' );
define( 'LOGGED_IN_KEY',    '&:W|eSh`bq$G/3^58.T,d=)E<_#YU<- 6sLq,(BH0v3>8QEh9Jg.v$=|$FBtq-Cb' );
define( 'NONCE_KEY',        'TOK0kIHZZiP2F^y_bxFXn5?n#MAAdpDS.]IC2IQk51%RqM,U.Ir!W/ZV.eE52m(<' );
define( 'AUTH_SALT',        ':LXUJ16knPyxxMSQ8=@~.J8zDz{7uccl0[o}EppIu$j=.EcqfqM0GnGZ1-_aI-0-' );
define( 'SECURE_AUTH_SALT', '!^s:0:DJmO`&(!qTY{S::{#M$cJmjvD*<6lt4@{0k$I:,};pf*pW?LVuz)q -L>7' );
define( 'LOGGED_IN_SALT',   'dR0=ai:IC%~1;t=_u$04AybNbrUzlKXmHP|[$rJ*a#Ihahx`GQZK7|.v%Ct*3cIG' );
define( 'NONCE_SALT',       'F()g%If3,MB.<.q&EZSOxT_/yGrYra%4Db7y@ar%;E~C[xzIT}N!Z]Tz`E5=zmM2' );

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
