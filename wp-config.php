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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopping' ); 

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ia_D,q3]Yi:+dKYK!}BE$L$do xB]hc=g+g_},G|PF6]#;8C#B+(:4[ua]tW.YA%' );
define( 'SECURE_AUTH_KEY',  'lE)8Cl;@FQ.u!wCd0nIFAQ3y>4b;}gMZ5`KKwqxsScVHEr>,Rq(r]HXs`M&UFbAV' );
define( 'LOGGED_IN_KEY',    '>fzD.OIw5Rh([/X/LNAq%&=5lm~[2?R}Jr@a+l/e,`cj._;g+97@Sn?TzWmT/yyU' );
define( 'NONCE_KEY',        '}?aqq(M5`#YyW%O(JpM,dmRBc.d;|nEeaoQ{8~RM9wKuR~~k[n62qiMU6C}V3q}X' );
define( 'AUTH_SALT',        '#2rT6*Pkpr*W-$fh[3aROq~}XQ3U[qDtm/El?R! bG`C4lM+Sm)dTO&Ui%CP-C9q' );
define( 'SECURE_AUTH_SALT', '7i/V.@|qQ|>J;{;b~xK)U0efGuNASPO+tHi;]F4F.UiE:3]#tVVr<Lj8bF_>WPl`' );
define( 'LOGGED_IN_SALT',   'A/a w,]J&ZPP71XP)z-~HAc3j`7HqX?G85sa1gQ]ebvn`{}i0n?pFc/r|>8`c>V#' );
define( 'NONCE_SALT',       'AVJ!T${q4}V!Z,m@zsR5I=i$2ysn$qGz$PX1H#+aP>sSd,Ei!qHrX=$<wLYYUOdO' );

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
