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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WP_DB_NAME'));
//define( 'DB_NAME', 'ft_wordpress');

/** Database username */
define( 'DB_USER', getenv('WP_DB_USER'));
//define( 'DB_USER', 'gilee');

/** Database password */
define( 'DB_PASSWORD', getenv("WP_DB_PW"));
//define( 'DB_PASSWORD', '1234');

/** Database hostname */
define( 'DB_HOST', getenv('WP_DB_HOST'));
//define( 'DB_HOST', 'mariadb');

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
define('AUTH_KEY',         'x->8qO|%55]CUwo^$O&C;/*C-<F:a $R_{)e+0Hj+n[.CAKEgPWH@3=(%]2LJW6N');
define('SECURE_AUTH_KEY',  'f/+<#w]{0_2.zwb}lr7%4reYKZ&0ma%67!JDJ[Z b-]|~#p0I>Rhk4qpcq[#|+q?');
define('LOGGED_IN_KEY',    'jjX|48,!@[z.YH+PsqP(;C-6>c%$#-2-?z+ q7=|>Waf:^yc| R]= @!0Ta3-roc');
define('NONCE_KEY',        '#4-GTel_~JZW:gYlXFJl*bVBB:wG:ElA,*^o3f4R[NwaN1:XX3/VR/e&p)<Cq:yb');
define('AUTH_SALT',        '0!9k?3N~f|#/cXJ^[XC->Fy(6i;O7`VWpBMKH.auYlK@soR+zW-_4,}qUAB^Xq|y');
define('SECURE_AUTH_SALT', 't4jA#rWNl0wm(L/S;^5mS|-hjD@Bl0D:dq>o+{-pZ*~EkbMt`7~3n-LE4[%-CENs');
define('LOGGED_IN_SALT',   'wz<H!C }ZM3fh?/!DUr)&xkk -p`)A-A5;XT^e=-H&xk+SvjQ</[LR(BI4<V1G{?');
define('NONCE_SALT',       '1g#2J#GpKPTa&i^/.#<{-fF}uWd[*==)&ld;Vv./I+N_H2woD*dh-@H-bM4Yf;tx');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
