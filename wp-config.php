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
define( 'DB_NAME', 'woocom_theme_development' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '#F&)0GscP#~<`eX]2gx3szxN,_XB>6xaLooIM`OiC97=$qrJC|a_%1N^e{pCv3r|' );
define( 'SECURE_AUTH_KEY',  '1>S(=Cl`70*rcJ`eD?P%k;T xYrEVo8WU}>_ho<cTFn_V{Bc&.1?<UF>@aRy!JJ-' );
define( 'LOGGED_IN_KEY',    'Ej>K mgrc)96zyt8wesi{<>~+B,6%;fxWWK <G~[>Wwr63PXV7!9*!>AM]AVIyMu' );
define( 'NONCE_KEY',        '+jt!u|bzn1rDl,hTXjL(PIZ_YY#cYN)9PWte|tlrYM|JW+;@/iS# j!w>b1#U6gC' );
define( 'AUTH_SALT',        'fuQp-}U%U#V1EeKRw}vM$aD @gy+2XFh,+IqU.0g6YM!#_@pXt0|@M`GfyrP?UO*' );
define( 'SECURE_AUTH_SALT', 'Hq5AWI;C) 64e$DPHg t<_I]7]{tjN)$MC#=Ma{LX84@6!eJp<P;VyiC!df*wTx9' );
define( 'LOGGED_IN_SALT',   ';5%|4i7[Rs:kaY+~Csix(ByQl8l)yg1KU}q9bzg]GY^1jk3;avj%Wz7=O3[7d}OX' );
define( 'NONCE_SALT',       'HFhpz>zBmzRq$*`T@m%Vy3-djc/CfuwQ$Y&%KqJC38?I<$4wC7Hyu)u&M;lN.jH{' );

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
