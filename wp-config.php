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
define( 'DB_NAME', 'PHAMVANLUU' );

/** Database username */
define( 'DB_USER', 'PHAMVANLUU' );

/** Database password */
define( 'DB_PASSWORD', '392004' );

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
define( 'AUTH_KEY',         'bX[d6lr !X+zP%%-b?vJd#wnt35-OYdMjgYanJ:&QCrylhXw*8Re0b?Q6hXfY!~P' );
define( 'SECURE_AUTH_KEY',  '`FFv![~)&5JfW7sK>%o/F}CbYu$;&F@/Tg]H5g>(nEPagDWm=8{A/V~s#T6H1*t@' );
define( 'LOGGED_IN_KEY',    'G1ZBtUgek?fZ3W/t x5*$d) b`a$FRBl+E~~7t!S@W%LI*HhFEH.T[s%x|/hfkx~' );
define( 'NONCE_KEY',        '8ycR{Sk i*Ruf hql8@bv;nw]HX$;tvbKd1<[@iXiD``=$Fh~MHD;1V^BZ-?sy3$' );
define( 'AUTH_SALT',        'hR7:yO!;3nL,Q>=U*+3Fy0ay61AG[zmZhK)c,n} tRi%x$7:R+~H<ZN6-*,WjA{t' );
define( 'SECURE_AUTH_SALT', 'F,-^[<eSB *?mX?2An:nuLkFaw?hOX6$*??!=n(1$D{7$A,| 1L/=Fr.s5-]_mQ^' );
define( 'LOGGED_IN_SALT',   '.Wj$5vGk?4ZCi*go@f4*Fo`41e+`Ep?7A:6YznlzwH(IGizD,v-I?XwB|y|`a,@l' );
define( 'NONCE_SALT',       'yc;m9sz()^3BM~W|>s]du;8=9CWcSAfkdx/r-I1QgwztWhT !Q,9/bt9Va-dE%sY' );

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
