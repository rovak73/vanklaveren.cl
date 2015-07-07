<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vanklaveren.cl');

/** MySQL database username */
define('DB_USER', 'rovak');

/** MySQL database password */
define('DB_PASSWORD', 'mosca2013');

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
define('AUTH_KEY',         'zho`9+{f`ve%GM}{5rAZnVOD/=,|u^j:2x$&=%<nU%#$JB 0O;y=oNX6kMT>(R@i');
define('SECURE_AUTH_KEY',  'f8_DBdUWjt@} PZ-|1WU^b$:M7IU^m}*ps@a1luci-IHr#(#.IA`+J|J5ZkhrdHr');
define('LOGGED_IN_KEY',    'VP[=$? (w#Rqd?oJi?h[|<Bw{V@-6D`[*vGVL(VOvqfzYb;Ja9SvAR{_}+7{fB-D');
define('NONCE_KEY',        'F6LC_hH];lht4c<+ihW>0xyw{R5xq3dm+MNK ){Uvr9u7.qB8<z96eE|`fDFIcZQ');
define('AUTH_SALT',        's$/s`PPUC-]+{y:t+b*)>]cay<nA.NchG<6cy(#}BAp;I)Sh82|JB=(@s;qZnw]7');
define('SECURE_AUTH_SALT', 'Q,cR7i}0^t<S6<J/WLs -s[T>imHhj5iMMw -I[AA#]Ve!0gg1q!OCNDPk]5&QJM');
define('LOGGED_IN_SALT',   '*xz.| CXb8|XI7$Vc_C~!PRuXqtU}-EN/l3FU^}!v{+4No_KC-c-?LI.KSAb|-n)');
define('NONCE_SALT',       'q*A)$B 5~Oofrura8VmRNja$RpHb]^F(-de+v]0z:W<Q][W8*H4OMA05J1vz^_QV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
