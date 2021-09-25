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
define( 'DB_NAME', 'companyprofile' );

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
define( 'AUTH_KEY',         'Vl!#Vu( 2;;oOK9$j;aK33%SIjv@9Jzda!^~ myhl,sn.Q6o 0%na5*A$v~::f5E' );
define( 'SECURE_AUTH_KEY',  ') U$o}WdeZYu46{R-&KsRPZ6sG&um>9_/;{Faaw[+Pb4r|;PDlGGmU5{dpD^|qdU' );
define( 'LOGGED_IN_KEY',    'F[M?+Xlg<oSoe@v?`EHna<.F2NMx>M4eUB>;Tz.n,<k{Vjg*Qzte%wxmd. #/1h!' );
define( 'NONCE_KEY',        '<j!ZBUZu&m3U-;&Vt<ko*x+,rGe*}hBHke:O[:<JO2X>-Hu~IYG9bLE{Noxa[,1e' );
define( 'AUTH_SALT',        'CTmd0i(~FI-+(h{zhNG/yvLQ7MwXdV(<4NB(!%xOV] K3V+<~>)bQk)*kvmMgD.B' );
define( 'SECURE_AUTH_SALT', 'HX):U5kvn]S)>yi(c!g)s@K%;d7H&3#67f~)W,3:mV5H*l-+J8K;la2?_4+o^4V ' );
define( 'LOGGED_IN_SALT',   '+?}oYK=])W(>w+QT(|bP HN*X9<lxAD3n*1&q42&QjXw,1ZW*;|8h0V~s([)3Ct`' );
define( 'NONCE_SALT',       'X>3nD>3h^:dn^Z1{y$Ye 9Gx,?Wueoi O,!@GKm^5?)u_..L5Fb{HGQtP;d[ 0;j' );

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
