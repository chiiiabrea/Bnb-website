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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'w{Eeu{36Eo)fOOP>?(NRkP ty1<gAfyce~Kk)-7I5R~+8>]@x_c$U)Aer9QT[uCy' );
define( 'SECURE_AUTH_KEY',  'u8AMpQi9*I]_6p6@n`B-ik&%sv^3ds0r]po;UyN3eOUlZ-Wm)2b}L3KD0|49uHm4' );
define( 'LOGGED_IN_KEY',    'MI[}/xN9`-tL5y4#=![eUO{zf,+?XEs*09@Emd$d!qsgs#IOIS[^lNVwQ+(4Z$QO' );
define( 'NONCE_KEY',        'L<4M)-uMdko}t[>A ,WqHmzd.XZ<n1*x/*w2JiO0R4CDiLhhB5Y<(|#UTloK-yuU' );
define( 'AUTH_SALT',        'Vt6/CFB`DNRGlIfXkE8%9+{,kK~iI/J&r%Mcn,vTrS9bh!E~Be1i`52lGeYJ,S2[' );
define( 'SECURE_AUTH_SALT', '*)zp|7+)ZI.^Z)+k]?}N)eRe[0w.%}Px[/(f&Kl2b(,*d^B*1a>{QktbcYW_X8HO' );
define( 'LOGGED_IN_SALT',   'FB[8)3<VSM`}P9)PyeA`FoqU>Bz{;fjv01/tUT^y-D,ruIK^D_h[~2fU>A^90zem' );
define( 'NONCE_SALT',       '5YYL$ZgL$]2}FOQyo-Jb1@q$+($GB];Bq&HTaePF!-pvZRcWag};TM@;=[l9]Mip' );

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
