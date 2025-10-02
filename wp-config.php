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
define( 'DB_NAME', 'bir_tea_house' );

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
define( 'AUTH_KEY',         '[-/my.b`jjc&f$|;[w<tyFEcg+`|hr,b4TJNcWfW]/1)tZM!UK>i^&CGg6K#DW1y' );
define( 'SECURE_AUTH_KEY',  '^b?UOoepEun6(VCp>]r0Zs:p$N,7uypS0Q:hR:Q%UEZ.%#XljZz[6xHvcmkLe1tK' );
define( 'LOGGED_IN_KEY',    'E38O)QX`3{`gU?s)8#}qbpcRh;*+JGI[PI&/`*]LisK7WJH7&,9IXK2Ii^Y;Y*O3' );
define( 'NONCE_KEY',        '[|gGadH_+[OS/yP h ~<p+u$-)IqJ9oQ.-bu%(V8N8m<7nCl*iwOPj9(*[sl>p))' );
define( 'AUTH_SALT',        '3ogCj^041yp Y?RTAn@[P.6Kaz;~w>]|V1zu()$}c]^%g~~!+Y<)sGC ys(GGw=v' );
define( 'SECURE_AUTH_SALT', '(Kx 4TXLnUqVg!cOp7zrVHTW[>~[1Ix>%4+S%6~Guw(NRCs^Q$<#Va(R6w0_i0*z' );
define( 'LOGGED_IN_SALT',   'W(9P-Wo&d<_>ng.+G=;b$,L1iqqKfv#5|o^3^1As28:OPWE59~etu&qw]ZWip.,/' );
define( 'NONCE_SALT',       '=jVHm9N=!w[ut+7%YbxbN(@mL%`T(.68}Y}Gd,Ns62aG?x(7A->RMLFRZUvBIpxo' );

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
