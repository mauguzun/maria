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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maria' );

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
define( 'AUTH_KEY',         'Hs9XH,3:qP;,T8,@3gows=sw^[%HOuuzd.[:EV#1a*Wa)q9<U.*NXyOYF$5ZuDSR' );
define( 'SECURE_AUTH_KEY',  'v/FXJV<<C/j_XDn u}Is#,0%(hcs$P[jV*m5{s1& Tk2kX3,u&G=Op~?-!jVMZS$' );
define( 'LOGGED_IN_KEY',    'B&w[T4UfxI=u-i4$h<My;f&R#c$1(LJnR:s,~Y|mP#$Hs>J,dTu:Gq0@N66[K&YY' );
define( 'NONCE_KEY',        'CEI{Zhtc#E/i.Xa<Uqy2+aeGVz>udD{^i1&iHdNVAN$Tx6g1AVP!G [=G/q4LE>M' );
define( 'AUTH_SALT',        're6A-!dz>TI<g/hz?;rfz)9:SPro=C2wuA:/DUS+mC{4K8VwPN`;xa/vh[4&,U7]' );
define( 'SECURE_AUTH_SALT', '&i26Y}5nO7M5X2~.EpAMWlWkF!-ZdBXR+_{OlzmaeU.(/w=nu1?8`x?v$6=,g=1<' );
define( 'LOGGED_IN_SALT',   'e093.sp ,t/-MR0TTXQqMSeHX)v/mC}t$Yc.ow`rpxF3r/OSX6_bw*ktb0hbWd7I' );
define( 'NONCE_SALT',       'R6F#Fck$$Rbf`)7{!H73#o(@pqgHK/P]4kw=zy@<-3It>F]U-CtHI)riXbAqrY(W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
