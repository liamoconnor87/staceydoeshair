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
define( 'DB_NAME', 'stacey_does_hair' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '{.u{9S~cPdK=Tjds?n*7zuh>n$($7u`8GCHU7|eC>.W!|kPihMk1lID}97l>%Xnb' );
define( 'SECURE_AUTH_KEY',  '`_&M[QFu./7^`}B|(~Hd&D8K_F2]6U/_GhKInO9`%-`HCW+ux8:|&B,:]K.AgjN8' );
define( 'LOGGED_IN_KEY',    'eS(5#Yd=)F_Ry`,$-kKrR7aXv#QW &EQ2$}4sL=X*/%2V`Bw[+cM|TK19n+B3~8)' );
define( 'NONCE_KEY',        'qYT223S5{g+6oL&/U!S+b~^3)}3p@C82,96KKl|s-meGcxPneg5f@$?g?57k)ekH' );
define( 'AUTH_SALT',        '<}(Bs3!`/J:arSnKG^y#1=%[SY.7o3/Ib/)MHcud9%ML*4&w!91MH)|1n|>~r?tf' );
define( 'SECURE_AUTH_SALT', '6)kh%1X|=5Aw<_..K&CN[nM1VR:`A;P=9b%R_g+ZBDUbd+ejU.agjB1rU$<fJ^D)' );
define( 'LOGGED_IN_SALT',   '(Gm-`N0a!oTj(~C]uly:oxxj70he-SSy.Df`N42aMlz+RTY6bP?%r^rx<Me5|>A>' );
define( 'NONCE_SALT',       '+T(V8R7c!}n?Z{Ssq1X-haoXk9[nw;8)aZEtH0){,,l*N`G$!{YD8=N b$)~nOaj' );

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
