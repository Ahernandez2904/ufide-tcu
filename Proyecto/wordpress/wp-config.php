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
define( 'DB_NAME', 'fundacion_carmen_naranjo' );

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
define( 'AUTH_KEY',         's$G!swL+|n5B8/9~,BgC^/eb.)<iGAbj0U3Z7BJA8sVpE5#8J@O0UMri^&}?WAOL' );
define( 'SECURE_AUTH_KEY',  'j~j}{Y@7N^d1*[J~vW):Xo$U^SN]2`Y2y!i@s%).VXU/l&#cn:?9h||YL_C1=pKT' );
define( 'LOGGED_IN_KEY',    'pQH2LkY3X+f /fE.U8_[H3+tl?9NiDJKHGJ;CRxcR/O;!(Yqw(mf5.?-PW<7<|MY' );
define( 'NONCE_KEY',        'yLa`&OoO[IaiTXn4oDtHoEe=2|%5j1HTh1uLhsX6M|lGx{bUGC1=srkbB<BXKR=1' );
define( 'AUTH_SALT',        '?r0|(Tmxp:u/(wVBaEX5fa_8uQ?`fZI%ys6yotaRC+Q`sS6<nQ]3(#l%{%XcK1Xn' );
define( 'SECURE_AUTH_SALT', 'z:)w:!``~x=CSle}(H##Hq,wR;3YX&;h=N9Bh|* qyZv=;U-%rDz-Y~yL%ZH& )6' );
define( 'LOGGED_IN_SALT',   '+?)NX%#c}FoU_$eH~{X#10vj_AE0,&}`2mC 45fCv6#FsZ#udxTvi-[2TIuM|%W/' );
define( 'NONCE_SALT',       '@A?wWatNs#yCbW!w[c0h,KU`yJ++UDNdYe+xA}&CQ~<?G_d~neQg40PqG6zCK$ 8' );

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
