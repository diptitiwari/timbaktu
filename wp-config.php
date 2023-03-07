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
define( 'DB_NAME', 'timbaktu' );

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
define( 'AUTH_KEY',         'ByVxXLEs4X:SgPi_MTYZ%?E10xVm%0}#>k-R1yX_}),Chn>Nn,>[Fm@fzSjmx%>.' );
define( 'SECURE_AUTH_KEY',  'W$ 6ib`=@+@Tr].|+6zxqz,Ox(l_pg $}3|,$%Q/eVH$XW_V>8hUBA+Y8k$nY{SY' );
define( 'LOGGED_IN_KEY',    'MMeI22o[@1p:Co8?%K31Pz79^^iDgF[aCw^fXeI[:_IRMp@nivwjf%VlHS67W@c@' );
define( 'NONCE_KEY',        'frJDBoF.0Tv~<YD2r:9s@Q-Y0bSb(hGiDZpiWL~4Zs_wo1^W{x3j72rQo`5]9tY7' );
define( 'AUTH_SALT',        'u0o^e|#~s&9c@5g{D.CXm,pY/gLpFu~ZBBssfdy=2j4$FQxzK6GfPZ.`p/ `MMbR' );
define( 'SECURE_AUTH_SALT', 'Qf}p36?BqqS+j-n!fpV#/8D*{lM;fkemD3xL#mBnm.{nhK#p{{-PrNJ>w:39;2_R' );
define( 'LOGGED_IN_SALT',   'sxU_ |&l)CuA%V7]uZB;7ca lqAB/^lpRH~CQmjI :qH+hAlD|4UxV3@l,l=cU38' );
define( 'NONCE_SALT',       'bJuW3B+`e0v4.$gT2-~}x(6v(rD~i=JI|Psy>!(++fTH,-X-O*^1$Rd%erZqNc ~' );

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
