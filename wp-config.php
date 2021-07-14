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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'JJJ4cUe#2]md_.3f:O.xz)k#dDn1Uqd$e<PY9w~9><1saWC=(08Xgs@7mF)?x_yL' );
define( 'SECURE_AUTH_KEY',  '|p;HogBK85PrP-LLmKzVagos);7@xtMD}7-y(5!dFcZww-1hEY`+mJ/&CQW5(BDq' );
define( 'LOGGED_IN_KEY',    '~dcyb$S]3euFHDK-D8OGAviU**dDt{Vu4kf=8}!{52TQ-^rnaGa6^$<<:Mf.9H-$' );
define( 'NONCE_KEY',        'Wt~lh_F]R|#-zbh,vYB<+`]6~wQUNO`8&=A]I!;0/M~nHRu.uawYYc)2a9ckWWhA' );
define( 'AUTH_SALT',        'L.msiNHGD)LJ5FjE~m%F9o,gb8s)9+=WyqzN&ix_dg2k16_VD|Q;R@Pipely`aY>' );
define( 'SECURE_AUTH_SALT', '2&[?hwf!B?9Azevw/&{(9t^Bt+Jf0yxHXBnEv5oK1[-kZKi^RHN#g}67F9O|a(`f' );
define( 'LOGGED_IN_SALT',   'VkUF]a$]x>O?=csk+,fOzzIvY-k)=}qO9:|d&;p>qw$RJY^#3iATpR<o)1OPn-[o' );
define( 'NONCE_SALT',       'HV/b}UHwDB( !F.M9j{/dCl}jCaxesdU-fuOhmr&>Ee.Z|%{%N_qlh}dXAv%^,)$' );

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
