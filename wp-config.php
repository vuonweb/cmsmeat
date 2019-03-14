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
define( 'DB_NAME', 'cmsmeat' );

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
define( 'AUTH_KEY',         'pdFSp UmfTl.oYhBC&e,8>+%Fz:c-w*S&s70{+JykU}fZGz8$W6y$@%s~8>:UC{#' );
define( 'SECURE_AUTH_KEY',  'DO9EjkE1T0d6g%~Rdwod9$=AgeIzCaN8;[%b4DK#=~);bSU8[^WX#+QzOtY.a8G{' );
define( 'LOGGED_IN_KEY',    'o(th35H/LQHz.-PkynU;s&vn[`Mh|H_iqRLjw:1@oXB&A3iS^+IU9fJ&PTs,hmXR' );
define( 'NONCE_KEY',        '7f8 m5,*c0OS@*>/xuWF$gY1f;o+9LXA73S{OqL1!YHmE@2[TlEi`0S@]g$!wP]B' );
define( 'AUTH_SALT',        '1#1$Q,-8-?rYub,D5#`O+T^ET@-6,TVyZfK3l +(=?F{U2AU)|mh;B[Y.h$Qs @D' );
define( 'SECURE_AUTH_SALT', 'Z]2Ug6d$UeMp4l/*KHJ3_5N4kN[=W~3,(<4_MJ(bNuovW~#)I4G8Sy@Y{.88V||F' );
define( 'LOGGED_IN_SALT',   '_`wyaYlVXJx2(B0?sG`<IL4N-*zo#32@}+7w^,]-9jG)Z(8>mX{zymk{Y}yCPWJ3' );
define( 'NONCE_SALT',       'xD$c;b+|8?vWQ?u&TG3TUQo@A$Cj$?k0fKU:V tR^ZF%s?MN)KwsSLhn^0K>WGA<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cms_';

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
