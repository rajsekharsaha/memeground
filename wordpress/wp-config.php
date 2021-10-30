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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^*}O-EC/9NtYG.o(+;C+.qJ.,s6>/Bc[<!KE@upT)RsSpvJB5pwzx~j/W}dS@e4z' );
define( 'SECURE_AUTH_KEY',  '7tqhk>w:h$e.m&u-6R3``7kN4_yDdY>_(Da_C4JoDmO:8>sLqg}0gDI|Ml~ymrNJ' );
define( 'LOGGED_IN_KEY',    'G0I0b%]V*U>r^`R(V#KMVh!0&`prDXn.@^+c3TxNChBU%;k!uXbQf4d*Igzvn5E`' );
define( 'NONCE_KEY',        '80NQAC/3#GVmrTscJq<~5V*CU kwFK?|rUJvyY~Rfx68[~3Zz?K^6q3[fSYd|7mm' );
define( 'AUTH_SALT',        '`hL$rvVM*_9!9cW?k3z5RH<,aCmpd[XPlb3YhC3+0*On=BxmzL#y(ejn]D&BQ62$' );
define( 'SECURE_AUTH_SALT', '$,<lR!}f,|*<Grr)^RYXz*ME]R}WD1p)+UY4~m>3jrC9Q4TT0?n!/M %Qwsk0Bp%' );
define( 'LOGGED_IN_SALT',   '{ncIPnI@ZS0a1rr/OrV1QcH1>C+[.Z/;=::kB9k|@Ppo:suJoZwYG#p8R441D39O' );
define( 'NONCE_SALT',       'zj0qO6+[O)6k/8aog7$VlQ`w(8VE6$0_ravO[mzjG5sHY>g~suOf2</8Yr/c]mZW' );

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
