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
define( 'DB_NAME', 'Assignment' );

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
define( 'AUTH_KEY',         '+4hT:ds,U16rfkB(V,45ql4^=Mw;s={:iG=:k%zZ~XEW,)%FGUQ>R&0tp]Kz9mKH' );
define( 'SECURE_AUTH_KEY',  'tmAF6(RxTOFz_G_PDUc-ATsk?)H1TI}rr-8L&rkBb9&A1=;-h)iO&SxrT8F^i9oX' );
define( 'LOGGED_IN_KEY',    'Xz*L(v5az~EOn.[g@Ns4?2m@)45O?Ny,{pls(Y{Cj%x`}RA7a&^AbCDyS7 -UaEl' );
define( 'NONCE_KEY',        'bim?vIlI:5GV[~4mQS^[ob7fH1&U3Fh]EM~u}T$cVy>|F<7ct9}UDy.# irCFpv[' );
define( 'AUTH_SALT',        '1k!xt@#>X{] Tl-3m6qVsb, -E5%XM{fyB_bB3D^1[}A6[to>gjg[X&XI}t9;JC+' );
define( 'SECURE_AUTH_SALT', '`h8l[k<V8|qPCEyvd>mP_q9!B|d470mY.@m^0mW6%ofoLZkc@JXM<b(P9T.AHm$K' );
define( 'LOGGED_IN_SALT',   'e1a(sCE.y3>o}hAo2.+NBbZkaXM*|s!3{eTDJwwYqIQ<ds{;ob$>,i7yclxRmymF' );
define( 'NONCE_SALT',       'yOqCZj!Mx|x}xmt:QRJ$}|4NZj2UMC^Wl1$isc2$H*,?y/[T=9$@|1NoAS,W5)n;' );

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
