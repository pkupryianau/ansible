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
define( 'DB_NAME', 'db1' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define('AUTH_KEY',         '8DWKK~M3I M*]o.kk5_/`Iz$.5d:P%zA*dM`ErJ3z$EO2G : YiqP00}H*.#wG:k');
define('SECURE_AUTH_KEY',  '0{WnyULRi<;&Ujc=|z8Df2?>ep7qbu#|{~9ftr:(]P/pL_2@,}2c-DIoGv*{]Pft');
define('LOGGED_IN_KEY',    '|Y|uI|?[J+=|Q|2Rx1=o@jVc}2P!M:RpyNU-|0#D)30W[onEs(48}t7<a;gPW5S:');
define('NONCE_KEY',        '0^zV}}*12nBZ`qU]EP-q--[v{lR>;o!cjw/ODZVo7uFi6Bwy3[P$3=y(gqwQ(Mi.');
define('AUTH_SALT',        'N*nr*xNMS86Q#q1=hqVQH[Ga0d?xqCt]+/ilcxj+-~UCSRo22#$a)s&U*b-P.!jB');
define('SECURE_AUTH_SALT', '@E@rtw:l,GF_>Q^tL=|ivyjr1LU/,iY,brf+=QYM)Xjh{aCB+I!pQtk6J%N#yFmU');
define('LOGGED_IN_SALT',   'aZ6Bj*l+k>d<xf ,cw_/CvvxgFz3V3:>wG9Q,ep~26J=Ya9+zQQo]-t_:a1=H?YX');
define('NONCE_SALT',       'WHYa~)^${@S%($qOB%H@58YOw|?$Do2+J![9f9?:Y_$4~bB[/FvPkAjrph40.-e)');

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
