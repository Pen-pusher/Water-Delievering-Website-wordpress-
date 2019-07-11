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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' &9zyh3RH(?0GhNQU*~If$*;%s}Y-:.3h71#25fi_VQh4I|/G*|)9X0|n/+16]=T' );
define( 'SECURE_AUTH_KEY',  'P_CQxNS:dbZ#@jNZwPRl1OfV#V<K-VZ}@-YlZ^N4d.4BA. uLX-)4XWX`3=O;(E}' );
define( 'LOGGED_IN_KEY',    ',MpGhhmO`5:(+@YRo{L$Ptt.a|CsB%}(0/sMSCP/lVdMQ( NHbr>2V?c?8-f}d9K' );
define( 'NONCE_KEY',        '1YKA+u[C>2]UCU^qXEWgx_VM({<8.jS[!TFjeccINm%}|WIJp3t/rft< $T*X1VO' );
define( 'AUTH_SALT',        '8:8)Xc^+E^Qk<XwJyBkp2]b_zTloL^nDZ%J7U.]0h# W+Q)33ySpzYBLTc?Tj`Y ' );
define( 'SECURE_AUTH_SALT', 'L*K;S.Mi[#R*rVU0}5W:elmCP#rh%!5SqJ=}A@JpLY&I?&~=>?;no]*I$hepdmmH' );
define( 'LOGGED_IN_SALT',   '5V)RgdY-Qd#n/k*7Y~duJZ]vZ@4[;acd|II|9,dNXl)UY.k9QP!m;!XP[l~wIDcz' );
define( 'NONCE_SALT',       ' p`(C<I;|y?ju-WyFIAlNJK{C<EumGvr0O4p:;Y8L>;v6tR1A?qw2*{1d(jTo@1`' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
