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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cgeek');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cgeek');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WC *r#7zF2D1Slf}fi)Pr>@k?tELwO^R)!1)phC?nwupV>5<U1_P_#@XC<Yiolh)');
define('SECURE_AUTH_KEY',  'T6(bbd-YQ&4R2;-bWp9m,I2aJHoShR..eV+TzgLs5iK^ [!EKm l#A=c[KxVD^f3');
define('LOGGED_IN_KEY',    '*F~n/h*}sn?](zb;Si3@t>^W:p{ qNXJR P0D.)@1tj2T!ky5T(1os6ar@D$um>$');
define('NONCE_KEY',        '`GuM(#[(?X&z5bZ~r<6&}#m?zne;2r5.5Eu[#*s$p$- =#YV-yo$xH8.A#aTb9R`');
define('AUTH_SALT',        'cT1HJyX=UAMJw7Teq&,.FWisl_(,|&EAHrVzNdeU4pu=C]vqs.MV1<LXHDX=](n%');
define('SECURE_AUTH_SALT', 'P)uVYMfUTI9sB=sIlIU/Z|`6Cgl`^losQI!$?zZdB$5y-IY9DN`RT+BWUTT3<:mH');
define('LOGGED_IN_SALT',   'frm#h -Uyz)<a7&w7/e>BM~&b{[K;50{]+]_uyg]#IG:m;Bt$a;89T&/<Msrk*B0');
define('NONCE_SALT',       'Jxa+6*roHmZsF!Hp5igLXIV5R%+![DU(6nET5UK->%ts>OOK(ROvzS+Ifjb@pAQb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
