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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'Dg;FSnKDp)H@dvIfJFETNhV9Z-{2 ~!$v}|gqsp}h`[fl S$W8([#`_k)r|!UQx,' );
define( 'SECURE_AUTH_KEY',  'T XFQZ#1|DbL)JKJ8-7qv]yiRT<+U(QF,z]ay}ytJ |F>A}rx<B^tMSWrjP`vIO3' );
define( 'LOGGED_IN_KEY',    'v8kS;K&4Os3!)M$A8c Efh;=)G,&/1u|[x`T$>@RGNdo;G|L?<? OJqjQwo3rM#}' );
define( 'NONCE_KEY',        '~.G<?E<sYDtwc#3I^^ii>z/YTqQr&*#yuu[W#ExHB}|s,1+V|0Ad;RYd5 Wzbw=M' );
define( 'AUTH_SALT',        'kDq)gPH1hRNQp&{&D99A!ufO;l>Bf0W66mfm=2N{5^$YZZ2tLus|iR9`S5o}r2n_' );
define( 'SECURE_AUTH_SALT', 'C:LN  oSSBt=E/a@.?pZ#?3y?(n@R[Jn},8^lcX0?Py?wTWbk=*t:kT%$heSQ9{z' );
define( 'LOGGED_IN_SALT',   '4V*v={%T9#Dseavug4pes2`ps{q3f9*^H*dPFq+1(zyGhq89m>-)a[K@f=~S0*fk' );
define( 'NONCE_SALT',       '4b0JDHLn;JU+dPqP-#FMFP$]JdXszJ3qk>^3]5X.gIFPXLT(CQ$f<zlKS+DUIN<7' );

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
