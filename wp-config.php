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
define( 'DB_NAME', 'jhevmalldb2' );

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
define( 'AUTH_KEY',         '7FkAX;XFVaf#3++j<80;k5Sq9r?~8f+3UJ*Yfae+,!lU@{Fmu43]-)819;[e6|{[' );
define( 'SECURE_AUTH_KEY',  '5PZc.,su^1/D ,M}ZZp92muxVPDP*v=1y8i>-$p/Db<]1&*{$kvayHNS{b)9tzTX' );
define( 'LOGGED_IN_KEY',    '{ygt3k9Hd=h><0>6Eyjb0YN8m,v>O`b`W%Sba>&s.p /Nw7:d9nI#t.VIGDy?BKL' );
define( 'NONCE_KEY',        '*d{=t_NN3C=CcM:gbg~`mln{RwBy@>:6y7.cJ!GncF7E7Frt]J!v4in<5t5.42,E' );
define( 'AUTH_SALT',        'M&By/]_fvfe{3#;x#%A%o:{2.0@<p:n@HlOAUugqFy;T//?tG9rja, +:AGy)@h/' );
define( 'SECURE_AUTH_SALT', 'c;LgCBWI|d1@QP$+gim4g??|?dbf#1<rT->>DB-CSyeAVP%%T6RbW+xM./z:m:k&' );
define( 'LOGGED_IN_SALT',   '>410Gup#mOC8N m?DMJ!e+z<!2=aP6K}`muN0NdP;8YuD&sF=,sioj+1/Q/H.?P7' );
define( 'NONCE_SALT',       'Fw9*(cyQsam%>l`q@E[F Nx+,kLTXN;eZBsgn~/k lJ[)AG-b{g=SCg$k&V|&K@S' );

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
