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
define('DB_NAME', 'aesacop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '303seminarian');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'rU[7p+qBLuGL@Y]JoZV}Rp5Z1*epYH$YVXJ~c]gwi_)7.Y)AvzuCQ+nl!#)vR?i{');
define('SECURE_AUTH_KEY',  'PNV<VW%0(UU~j7a/&B &=h5$uv3+|c1{B=%/+srTrTAu1PaMf|G!Xf^id,lKM>|S');
define('LOGGED_IN_KEY',    'xIfrs@g5*ss!S4XwdR2s`,4W[>~c[1g0PtG(Gm_(DLf[E^-dbRvNuV6]jUf6j +b');
define('NONCE_KEY',        '|bgoRT`BH:Ua#Q;-y9~XdZjWtjpo21fiP+/!9X{@tk*#^`5N|;A,voK-Hv!gN;1w');
define('AUTH_SALT',        'Lb$&Bh&DfS8q [sak?zx a*D?X18my<a*O^0|dBso)q4ugZLtkSGP~/g]lx}+qM@');
define('SECURE_AUTH_SALT', '<=B?O:c-[krbO)I_TM3L6Cjr4Zxn>(QvQ_vz5|Q/VJ#j{g@z8TM4:l{TIRCJ$9kr');
define('LOGGED_IN_SALT',   '4!W1(^8iU-~]6F+mb?u74VM}ZUg$qRlMjpl1Fk~N:-SW@qYxU|F8x}S8A_BG;dd+');
define('NONCE_SALT',       '/29k)Xm/XfxYqGVPK1<obb:^]J`P+,Qhob0!e^s&N!qg%<gV/GHu]+9^j.*UGQ+{');

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
