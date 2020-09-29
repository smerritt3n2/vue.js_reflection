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
define( 'DB_NAME', 'wordpress_database' );

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
define( 'AUTH_KEY',         'lzdD0TDR>BU d&/A5[huWReAiyLUv(sjXo^T<&[=b|mL:av][>S&<^v[gATH-2.<' );
define( 'SECURE_AUTH_KEY',  'A}3%aLk;&Et<TaRz6`]DRk#+)^+DwCvZbblGK`8pq_%ikhH}qi_?0Wg}d)J<`^>x' );
define( 'LOGGED_IN_KEY',    'W##;gRWr_1Y~E$-bQ0%c5h>{pU**4nS~^vl$:w&E]n0495E_^T>7[$A+yx}Kyh{A' );
define( 'NONCE_KEY',        'K-re8dag@seAB& Bvu:/]#%t=hZVSAy4eNs14C %sAGY>H)Uk$0#B?sqH4x`8zmA' );
define( 'AUTH_SALT',        'E)EF.0;R$%>_wO3~~2D[<oQ,[;Q3vvt7K)lz[3:7]Bxf[v>cbF|ja7Wy~BjS0Zu4' );
define( 'SECURE_AUTH_SALT', '=e)4F9b#RZ}p3HtSi`9 x/8M)P?$/rg,vf_Bkr7I]P}vx^zaPJ>KH1q|A5nXB0?M' );
define( 'LOGGED_IN_SALT',   'qf{w?Y=fS)Jn +V*ay%Eq7rMpn((5Uksb2DuveoJX%5?){8]?oZTqNx$Mt;j/:#3' );
define( 'NONCE_SALT',       '|Q#%l&l WV$c;*;zWhmw 8WWSEkjsBPR <%=(aNHn[[$Ql:jNn3.oa^Fb<{sz(22' );

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
