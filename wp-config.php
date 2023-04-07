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
define( 'DB_NAME', 'feedback' );

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
define( 'AUTH_KEY',         'yUWYPjmehDegYm}*,s$*q~0SC IinuDv#F8l6-vyW>tF(y-6g!d(OZW$`Tiw5<pB' );
define( 'SECURE_AUTH_KEY',  'y$aEq/v+mdz)ec}b-9pv,~5CFD[={y8tiT9<Xw7hx;Vf$qAwme$(~|+kQMhRqi*(' );
define( 'LOGGED_IN_KEY',    '`j0=-_g/Qr^Eev7/A[ntG6;`x}KfB>g9Q{%D;7<>oTO}|@A%Dkz6h=vVv`) Tg)v' );
define( 'NONCE_KEY',        'A%+][mir#q[sb}1#dOO1[@RMC$2g,1:JL0b[&n@.AuivAZ-G_D0+Wp%m9-{Dc{^N' );
define( 'AUTH_SALT',        '_k{*gM-9R3hqxwY-Qs`v|$)#s(]UU=1i@%GRDQX=BHpvXen?]~K1fp@E&W3jkhLH' );
define( 'SECURE_AUTH_SALT', '*)EYg=~n_J9Mkj`|TztXp2(Z9&QA{BYrtr.V.eLEY?}WJKif.P&.;Qem#d?5_2%Y' );
define( 'LOGGED_IN_SALT',   'oxT~(UaegS7_l zAcg0Q,1:e &Vy-D{y%OR|fdUL}33,dj>M95tZR$tiH&Gl_u|D' );
define( 'NONCE_SALT',       'DUg2x_.@f3@8MGAL4}w,WQ7!p_W$UlDrO4%@8l}c[hI:wPAqAqavOfj/rPvXJuS[' );

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
