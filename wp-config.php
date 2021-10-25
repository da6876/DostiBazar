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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '2jl,5HF2@T@~MmMQu`;%EgR0g1v+xN9;guT..gcBjjr[k_G*kQ&v~8mN #d5h+[g' );
define( 'SECURE_AUTH_KEY',  '+ophpvrL{dxOi[:XY4i(43,Cg`X-iJ9 yZz-AKK1-9NKx_%jkyJ9cXj|k5[M[ 7G' );
define( 'LOGGED_IN_KEY',    'Dd5m3]RdP[D=p4);6iG9zBi8{4J+~5Vz)GLneCf5cNY]V9!~d9X<P8+grEk=Gk-6' );
define( 'NONCE_KEY',        'oL.i&ngT!.gG:;>}8vN6F5,>2u;-j)*!j?KnTr,:Lu#@OBUU3 *kpl7=Z-Jn.G3,' );
define( 'AUTH_SALT',        'L_8~?1Yo5]RKNNAK5xZ(V9F1#m+:|]N)~KHVe+saP!x-.Cv>b#[qamE6y?Ng=~Nm' );
define( 'SECURE_AUTH_SALT', '+$:v^N@Z,b{28cKDLjri`7~JVDPfq+x(K62Hq7Xd/k7pN@f+f>9^67_P;*U*6ovz' );
define( 'LOGGED_IN_SALT',   ')YUeSi6!E3!t,TXi&|V#+5E6m1A09wsQni;{CcNobJ=f!B.^l g&D~^[Q*QhUCE?' );
define( 'NONCE_SALT',       '-eX-U3H9Lj?i:-&M zamql(pqCGLgjEeaj~Oq{^cj<GFok$9F>%m8W9()a5x46e:' );

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
