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
define( 'DB_NAME', 'velomag1' );

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
define( 'AUTH_KEY',         '#mj0dk@>p1ys7&(_(~(R?H5xATh#X#Cv{ rJW+)=CtLO_Z_5.O~MtYf6g?}I;0F|' );
define( 'SECURE_AUTH_KEY',  'M/,Y@*~<*AV9D3CyIC/z0(gUa5wRT cUpT~Lt%L{zJ7~UhVlMEBgyiv|3IsOOj7k' );
define( 'LOGGED_IN_KEY',    '0:F#Y2foLI`4j@BP=y$d^E3!~)+C4IPuV;:-nC3OQ^M/?/i@J1=MK.Mm74y/[nc5' );
define( 'NONCE_KEY',        '&`d7@F.ny_A/>OuS+lVOv?E#NBjOcjcv/~$Q_<!iYt(w[:$KuG6`eo^qqF[pco7P' );
define( 'AUTH_SALT',        '~c~(BCXm9Jd0>oA-_EA*O#!`;>~%dyv7J0fPGNxje(.k/ **Q|6IfJdu1#Qfu5^G' );
define( 'SECURE_AUTH_SALT', 'kXej8u?j(=BZI{r:m(A6bC2vFp^4oQ*+Yj:9< ^NNcpyY{~ _t(Iw*!4tJ9#?h?R' );
define( 'LOGGED_IN_SALT',   'C)GvT926$cj-vb1Hhk!B9G(07%Myyj:I#0rIQkh7dp;U,nox*aL^sm0rbOM,/!sA' );
define( 'NONCE_SALT',       'axd45^FmVejq@4?xHVxZX=NKgxB{IuDv15||x`fX Je;}aZ4P+(vOM P<>zor~3+' );

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
