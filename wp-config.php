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
define('DB_NAME', 'admin');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin123456');

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
define('AUTH_KEY',         '(QS4JAY$ngmx.wX.Cw|^Lc*(&QM-Bfh(c:U$[SE+(N$&rwAq$`^QSP!jC.s2^)4$');
define('SECURE_AUTH_KEY',  'xuJJc2g[>|G-}c2.g:RJ<TF(Jk0_uI6yd&p~!AV5yhT`Qr}V`,#OB_!;vNF]S5G+');
define('LOGGED_IN_KEY',    'qbwGFrV,I7ciu:oV4d(=(SEBZtZ-Ag#}0i,VkOgs=!ZZr8n 9*)490J3UH!tLE)k');
define('NONCE_KEY',        'WHJOVpjp.3 Kr=3H*_Y)|C@ny2~!h~i ;S,hNekVGs1 jVOy4!W,PFS|Cb/LYl`P');
define('AUTH_SALT',        'p]vJsnL5mq<iblN!nvTia=yUO0Jgrnn[@UC^u4=$|Kj(Y_*YPgoqrN]V:~drX$ek');
define('SECURE_AUTH_SALT', '{px8dvN?`5MjZ}w(vQ4`I^wIQM]xs|$,b93HiKTYgqezKiJ?pUWheflU(QgW$S*=');
define('LOGGED_IN_SALT',   'jL=@=%aB,cUel/!L%hnq<^>)g A[l1>jHAl$DXI,c@$YBQK6kqN_P`}OymY 3{06');
define('NONCE_SALT',       'GNw7;bKsp>~QVz{za0m3a^#]654hT-`C1L/NnX/VhU/7Q2t1X0`@jkEQU z0}BV1');

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
