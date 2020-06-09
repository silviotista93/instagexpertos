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
define( 'DB_NAME', 'instagexpertos' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MalISmNADCRP1YtdcmNO' );

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
define( 'AUTH_KEY',         'qu@BY.H(=88>NRtYSv@r^~e5{rnQoF0gU2St&RQ_9&CexyTToX@BZN[<2~XqCX,_' );
define( 'SECURE_AUTH_KEY',  '|hTni>:%c>+v?uD&Q=ATSs+|Y&}7v;:}]fuTp14YR) iA m~%B@nsmzH{H2$7H{V' );
define( 'LOGGED_IN_KEY',    'dBO%;Z2e)2k]p$xnBq;W*OZl0`o8_2T1gAb5htrq0d6dN<ciIC K1}82fG*F]y_{' );
define( 'NONCE_KEY',        'SSR9-{O0:Qugh1VP~--GCn<V?{sUoQ%I3P/5/5q=X^^_u&;iYjb^oJp6-?x.wP>m' );
define( 'AUTH_SALT',        '4FAX*^5x @X-V}AwS.]kY%jWDu:(Vv3(gGmw0.)%_>(Axl>v06H&%H+db6)gAq$T' );
define( 'SECURE_AUTH_SALT', 'nHqP@Ve|zq@JK5myxX$NH)vz*)S/C?zuXH)eWiTp{/13BB~!mTPU%ihY*^.$aXJx' );
define( 'LOGGED_IN_SALT',   '|pO}GefnR~HD^S%$o3d8ow;Ux}($qj6 :@#e0w%_%yR:#l[%/SQr_9Vlyv2$-aKu' );
define( 'NONCE_SALT',       '9*JF3rAt-J5}HdwwodGeWmxY]9@OwBpee2NzeapcNydiL7*!T8)>:HQ|^g^Uu|iI' );

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
