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
define('DB_NAME', 'worldglove');

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
define('AUTH_KEY',         'X6LhaI(0k{gJzs+::qO=yHsd4r*b;ET_<$4<,p_pVAXW**|p5T$HqZdaAkR8E;+{');
define('SECURE_AUTH_KEY',  '_Yp,bY3!-uN(rDRGD} I[<w+llr)~-il5-v1_T5-iM%4<<}7}umH}DhJ{$hT)$;$');
define('LOGGED_IN_KEY',    'D OE8a60eMzbfJz06+T-l~-fDqjeQ;s!K#zy77^TtUOYaRa!`3yS}oS?M.xSyE?u');
define('NONCE_KEY',        'D-<;t0X<iA/;c$J( #p2|oIT{[@O$kMwC-*L3/Up^oW8^kfUt|F|fUx,$Ymt +?$');
define('AUTH_SALT',        '4!4}<@)[l}a) rDDpD965DXqCC:8~SBT,i8`JHU:YhkQTLDYzC~9Ws:Gs@!-+frn');
define('SECURE_AUTH_SALT', 'b0=U00?M*NtKN#Dk+YJ+_u5@7*{]W.O4W*tVQci0Pg&-L[SM{K{_peH}XpU:@q`(');
define('LOGGED_IN_SALT',   'oZ]^Y!M$Cp)wQtKo<:1No3x@irTo?v_]fc|pDy&`tp+qh+tkT aDFmeeShPwRjWj');
define('NONCE_SALT',       '+SdXUq:I})[:[%9]gd=ik/;s|>47&f=@4=m=)B1,+=:t~&w`I,,8^9?|S?(fL)X`');

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
