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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6Cr}BS@kESexI1wWe(|?aSWV*nuU;Lpq*)w;j-HV&[c.7`}Q|2~pHr%.mZ_,r]uV' );
define( 'SECURE_AUTH_KEY',   ':{L6_-3L[qXKv6z,nF)n/K]qXNO#cMj{N;rD$^L|j5r6Z?A&ue7,@]vVvqU/]>Y+' );
define( 'LOGGED_IN_KEY',     'f)/w2:3B)7dpmsCv+eAwd%cRfE>/x].CY9lIWT^HHRwR~Y6(}(r-/qBs>dB+Iq%;' );
define( 'NONCE_KEY',         'Hn_Pz|8wl/Gx%i.dTqA4ndKNDN.lYk,#)^%F?_b>G~x+LCcsN}~BK7Vx5a6mN3m`' );
define( 'AUTH_SALT',         '8Vx{j<N_-er7SBOc6c3(?4A,xA>f{=1$2f90Wc=QlbN[!X5neO>PouMh.(8.fjE.' );
define( 'SECURE_AUTH_SALT',  '=k(nq#c3fIB3Z%TPH?}oFXo{?9&&&j+08Ath0)5HL4p?=*P=KUG#IBRUku41zpz7' );
define( 'LOGGED_IN_SALT',    'EG{#>k_|mCnk6i>k$lJOfg<PJHrQdb8v:uUkcX/_ O#_YbU(0k6|sr_JuZ)-fWD=' );
define( 'NONCE_SALT',        'e&e9u9EpT6rQ@;:{i]$oT%44C M]$Tw-Y#f(f|#MZp0fC<IJ$?U<33mFQWGOYR%8' );
define( 'WP_CACHE_KEY_SALT', 'k.sfEO*Ir;ff$OQ(3t8wh&B&2Z6]l#rLs,~jVbn&hsm![kt0q)I:t(2}R>Le&BXK' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
