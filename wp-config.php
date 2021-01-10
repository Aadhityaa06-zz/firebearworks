<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'firebearworks_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`*1Hn0(ujYaY=(T*y#w[*5WtHj&w<fekY48MOeNn&hmG}_E{3^Bgu6CsU:$C&^NM' );
define( 'SECURE_AUTH_KEY',  '2]pWu3h=}Y^iFO}wJl/,Z#{SIm~iw!k >$(r/Wl.4Kx,DIoagpjc9#@/iiTP5R!9' );
define( 'LOGGED_IN_KEY',    '!t%pufXub<URVI[=^z-2X=CeS)5#`jh./HfczOv&~.GPS^(z(d_-~z_7]0~.C>r8' );
define( 'NONCE_KEY',        '_QQBpZD@Q-nL9Pq$%B~SSiq.W?^40?PyV*e!~Y;/3Scnn<jY=2go.T|DT2ICR7>%' );
define( 'AUTH_SALT',        '9__3vM]Aum$JV)~kEju@l+J22;C9JHsvH) a*}&V)Xw!zQH9ilexsIEpX` $z7]M' );
define( 'SECURE_AUTH_SALT', 'Mt11mtgM7up5GNInuq+*lIDW,.X#><<ki!kV~w{FJ!xz)2ZA@QR|>cgYAEisY@~?' );
define( 'LOGGED_IN_SALT',   'OnQUcMaIi[UCd+mo~s}1v_SHrnr-8nis?/PlM(q3^Rg{~a[a/$2qpLf5g@AM?h}`' );
define( 'NONCE_SALT',       'm?ucPFG@QW2@YTnXW]CRWXOSDO#sCYg]XCVbJp9*_8@,e4I3KRSyVInudxE%bn}r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
