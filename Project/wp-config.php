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
define( 'DB_NAME', 'tech_store_db' );

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
define( 'AUTH_KEY',         'R77@Ok&$B%9~@L~cNlYm-u_O5V0{6|yrVPU~Go4<r`+k7k,Q|SD|+x{:0T)4b:`$' );
define( 'SECURE_AUTH_KEY',  'Fx}BKlglIZQM/9io8W%.g:H>80R?&/iAq-z+?iZ6oI/zRLS*6L>&dc.T3tp)1>nU' );
define( 'LOGGED_IN_KEY',    '(~cTC]kmxJ/Y?/a`er39zJ/i_d*| U/<2DKDd%Z3_-tLNuRsWkIC^-hyI[Le4ez@' );
define( 'NONCE_KEY',        '3(L5w,<5$~Sp%Bh{R%Qvha:/c$BEvzl@8:EMb_BiQ[+#VyAqF`FF5pGTy]o;,VH{' );
define( 'AUTH_SALT',        'X,6!4C&:CEL<&`*c9EijNQ~dJmRu?uy`lKza.^@+(>f;~)hA8YLSnyDODP3RoJsy' );
define( 'SECURE_AUTH_SALT', 'TyC~^D~D?Yh1Rvj69MtmfhW4pPW0<@J~2[(c7}VS+#9)j2f_we=)zCcdaY^slG>V' );
define( 'LOGGED_IN_SALT',   '2G^eUebW)Biy(s:tTy3f09a.[l+|zSIHV5,cwFyny_gkqI)E-5[qyliW+Jd;>TIG' );
define( 'NONCE_SALT',       '#D;?$9HwKBVDowbI/q+1HDGE$uTVtkmx0N,(be3N@1&%:E01S`=m>9$)ov3Yik-y' );

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
