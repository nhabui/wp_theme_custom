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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'rootpass' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'r3c]nJx+-4a>^Gt]>=k`uHlEDR3umYVa&d]Y%VLECS<|W`1q<52(X]YDry+M~Bq^' );
define( 'SECURE_AUTH_KEY',  ':xt_-52D< 3|~KN@_;MuqR![XcbnxGAOKR~;;`p;;,#KF[S]]I[2^E:}`n9l.MD?' );
define( 'LOGGED_IN_KEY',    '0gqeO9g&R6A.^1#DBS*T)Q]-I|(%Tcz]Y&MIGw!)j$}ie]6msKZ6n^OxK!9U(ZdT' );
define( 'NONCE_KEY',        'Q26wZ^!GZAA+p_}*%RB2CEp{zL5}gVc}QOCzpLY:Us[Yk5,#GsBMx^3*r.f;%IVa' );
define( 'AUTH_SALT',        'mo<e%vDn/so1A+>TVIC>Rn=BTk_M+60Fxn$4jiQ7o@P$<QkfXIeAy}TBMV|X`,@g' );
define( 'SECURE_AUTH_SALT', '=6h<C}(EDuXn`PiFfRKJub,<T%VDD0g%bPblHbUec@cF]!<ZO~8,o5SopbG *Bq=' );
define( 'LOGGED_IN_SALT',   'r<*vycJNJHcdZhPN,/2-mp(h2|QF)wrKG V:0*1js]_-S3GRD3]<Z2Z3tK>{<9vw' );
define( 'NONCE_SALT',       'walkX;PTs0~CA*B1B9&;`>mDD>WLso&QC&u?U<U~KGANn^@I.[(<O&dz@nP6)@3}' );

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

// Fix filesystem on Docker
if ( ! defined( 'FS_METHOD' ) ) {
    define( 'FS_METHOD', 'direct' );
}