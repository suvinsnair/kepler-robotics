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
define( 'DB_NAME', 'kepler_robotics' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#zz[zq}6VGfBO,3~z+,|y%rvE8pyo{hz3H?FJ=lENRjt7Cu1[pLmv0*N.rayRJ<S' );
define( 'SECURE_AUTH_KEY',  'gAeBx^6T!{A2ryNOwU..FJ[}[!@&up,diV7EZ6<aB%Ie$=Brn~_[`xxx%E5PbO(O' );
define( 'LOGGED_IN_KEY',    'B);q(+3i @[OvRDG*,I(~g&|^.uD^4F0>H|QWNmbbyRj7,n_MpgiGd9vP?%80Pv^' );
define( 'NONCE_KEY',        'cC:OMGF{Fq*)]L~smp nnUo}W5b921p*% fL#NFK#*PzwG4{6`H?LPw-d.*UU@&x' );
define( 'AUTH_SALT',        'R_G,_G~yw8]C]@p9buA1B^Sm}$)wKk|$G3/w.<A}JZ]xa<70:xmE+Gka-jJ>.rQX' );
define( 'SECURE_AUTH_SALT', '[0*F=>aJ{4bc_p9lQKq!R2b;U6?(o7^G@}D8UmSyW|GzMTw. }u@p%5#eZ_*.tU}' );
define( 'LOGGED_IN_SALT',   '^T(qH#No<*I~.Hu(O`I{2nJTS/msa5MRBc]>>Rs4eE;%=);5a 2Zw47N^X4+EDPe' );
define( 'NONCE_SALT',       'e+Jz7sv 3HsE8=Ny5JZ-?(k0mm.<w6q(Vp(xT%@z,ZP{(#Wovf55/T VHzQ:c>cU' );

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

