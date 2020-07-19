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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ultimater' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpass78' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VxZiRJ|V4Iia4AkDl bA2Y71bSu6_Be<G9P5;uP!cA}o?A}e#j:`*qSj_gOc-sj0' );
define( 'SECURE_AUTH_KEY',  '(Md.pA/}{Q63Pn}8-=YqJ4%I)<k*]rU-Ct9^]p$suuK%R@lZS434.gg5v`3(c FU' );
define( 'LOGGED_IN_KEY',    'ywmv@5gMh/H3~dF;5x$nmA3Bah+-|^5QodCW#j*m7< 52X*+y^!L2bHuceI6Zh{c' );
define( 'NONCE_KEY',        'MrRluu];2U?63$baeU&N|!dg{D1U!N@4j(rB83=j_*m`x0GjwPQNxPMNLmS&/yh8' );
define( 'AUTH_SALT',        'cTCRIOw]riHr6[A[:UR|Y{$G!$Tf8OJ?PgnmL8v.i`>4L AYU;zxq%[^TvQhIRYs' );
define( 'SECURE_AUTH_SALT', '`=7{&e,|1ut!d^vSZ-^nxv>Yy?BUY}8R]BiQ<%%6xg<Tk]_0!2TXtudYQ3Z4-(+=' );
define( 'LOGGED_IN_SALT',   ']O~&dq@2vW&!QI UN=bow!|-uD$,>Z5zMY}oTb8C2OnhI5B52VnG_YHz-jjH-TqQ' );
define( 'NONCE_SALT',       '.TiUHgQwKBv97|*>k=ULUd=Esd/)<@n[{rmE,CV+]odd4FRpk(niSkn[DNi(kVei' );

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

