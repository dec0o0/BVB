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
define('DB_NAME', 'wp');



/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '*wf~Oq@hI*L4qI`c~P8JqLqsjYy%zzj.[BmAoPon3u7THjPir@pYKe4 G1tjSKmY');
define('SECURE_AUTH_KEY',  's%`3@nP|2pF[Sx*Q@ q:O=E%X~Kkf+)y0h2jNSdeB=^8|twX9kGZLjnsGp=9^E-/');
define('LOGGED_IN_KEY',    'dfmw*C,BxUp!ON7KcO`w1r|-,jyH-S=1W(z)jTL,Um;!C>.16j$!+^x$E0DiQURL');
define('NONCE_KEY',        'Sg3:SGNPshZq`Ra&anqHJe;.@{FK%I]cn]ic=~v5XAyCSl}=H;f-tPb-wDFn{UAt');
define('AUTH_SALT',        'GA*5+5]Y k:G]~[O?1k78^6XtnJvdnnhsTsxMy<)GP4rY{Wq89p#k?+;gB7%vLBW');
define('SECURE_AUTH_SALT', ' S=i:{:{Lk<U3E2`,l`jbv?R:Ntn<+;2tH?+-IU-Pjv@/h[.}B4c2M< v.G)8#&R');
define('LOGGED_IN_SALT',   ',&L[&uI8Z^&7>X^]U<e25?{&3@]eIL*Q4uGfz]U-dSD`RI+W9OK|u?]?-ND85)i5');
define('NONCE_SALT',       '6KvxScjwzypV59QT4o%6<kudm}Qf+]NAh*xV-a(,DgI,.~SMW}lQZ^61ile1akG}');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
