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
define('DB_NAME', 'academym_mshtarii');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']>DZ;g?*Y2(Y%r-Uq+8dOy7f]%D44`m>=OBWt8A@{2Ax9la,,Kqze0<ED~KEVD>J');
define('SECURE_AUTH_KEY',  'uGIiN5=!<I;#mP}H.>f>h=I:As)F&e1`=tD>%@=F;Q$NX>l%Ornk5H4+iz!DDTc5');
define('LOGGED_IN_KEY',    'DZ6i]VXa$!DFWUGBm[PG} @A!Mdo9}CJMQ7?%MyYl%Zu{GA!wfDa?} (=Sq{oAJY');
define('NONCE_KEY',        'H<VhK{9wOYYmhR1I[)@?ghK?E}*Rt^&R_IO/qlP3BzcRJ+vODSGW,]QE!n$p8Jv@');
define('AUTH_SALT',        ':7(f6%]94c!!2Ef|d9|(gYK+/LKv,Ky6WLYvTszbI l_?!(o@IT/(U%svgFh!hu|');
define('SECURE_AUTH_SALT', '_+qR>jhU{=Y`l&z2m;3dK,b3s/!sA#l` 4E^& #-A%+hb:VMfB;/ ^|oI_$(~|-N');
define('LOGGED_IN_SALT',   ',&?C0;,*qjKaCTa,k^ 3CV1`>/w#U5+XVbA-5q0^Fc92|i{yumdQ](Vd?mTsehaX');
define('NONCE_SALT',       'CAHa%[igur9c%VVv+L~:sz20hWk;(/NLpjnbuO)+8,inpLG/TNQdXo6N&w{9>ws?');

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
