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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bakery' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ZFUzV=3Q&%=<V+!@=a/Kw*yj@EfYMI]~9Xdk4]v]Nh)A^c{}=%Mv]};2k<bkCzR>' );
define( 'SECURE_AUTH_KEY',  '[)3mkRL2L-/0/f<c(Yfi0.V{r9!]sm)_W5nBJi|&v1CcCoKhcE(=;R533qe3St^d' );
define( 'LOGGED_IN_KEY',    'bdX{TDP,-$,rCC:y/WvnuW=cb.>m=7shuQiv>p7]4zno,3U,`,P i$M^wJEv![zl' );
define( 'NONCE_KEY',        'S!T^1^H(L3JJ7:yqN#Nror/jzCP5q{}GWw>B{Y|y|fpGfj>I N$L@cBZms%JPSKb' );
define( 'AUTH_SALT',        'y0/F_m=?)5f*pVtn`XcJ5,ot4_L/nG,<=w{L;&-e@ZzY@}#Ayu}.07~f(UCDhb_o' );
define( 'SECURE_AUTH_SALT', 'Ke`~MGVFnc),ghr(5SGx/VB(5iObw{e=71=,27r>ylYZ,|?}T1Q%Jd]wKn2A>ekZ' );
define( 'LOGGED_IN_SALT',   '.+Vq{[0 M;82<E/E6mZ^i}Iw3fqeSCM} Jj.,;14~BI{,>P3wFH*AJ]Yv:h{r65K' );
define( 'NONCE_SALT',       '$$d]Q1g&JXx!-rckx?2JQbmEw}&iBw_ywdM;3w)%((he4KNF^oR_Lb=TknLdw0|:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
