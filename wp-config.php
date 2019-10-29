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
define( 'DB_NAME', 'wordpress2019' );

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
define( 'AUTH_KEY',         '(v1Az#hT4[@|[>kT]dRVPv#-8PY4o.Ak!^~WY<e-}/xJ<9F vIN;mMzbdmbtQ,2m' );
define( 'SECURE_AUTH_KEY',  'nEK|^x9,r!|0<g)ueuA]q;TlbKfo;BugVb,oF;NX3@b*RhOUDj~2Q.e#.E3S$%0o' );
define( 'LOGGED_IN_KEY',    'vn{lRO1Ok vjhwgv4{Y25W<yJ;w_ HIFgmM_5)`Fb6?Jw`2/tcT~>SfIr!ZE=b=^' );
define( 'NONCE_KEY',        '}%L<w^m!KSixAOE4qWrbM+Iybk:|FkI({:<_XAA|[@=l3cr)@G3&+Q%FQ,Nv&wZ(' );
define( 'AUTH_SALT',        'i5U.`n}WA`V4t]=^voL&(|<`)^L!pfWQaXzX!b|XRnz=XS:xn6K$2}?lN?5FZ*i>' );
define( 'SECURE_AUTH_SALT', '~xW@71~L!68<5|p&YHaIi30]w%i /dm0{WW;+YOO8,#:b9=xuGS;6.~h(G9`3_4<' );
define( 'LOGGED_IN_SALT',   '#5Op`50N)05?2Qe0z&mFdbrF*(Id^CFmk,ytrlFT2R :I`9/Z3;`Xe}fqm,T{qGy' );
define( 'NONCE_SALT',       '$C!`Gs,r8wBB^DQ-`Dz9ZGF9zF9_iGRhA`(Un9p%|+d[fcC/]BN8?DDO27e6A2:H' );

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
