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
define('DB_NAME', 'mythem');

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
define('AUTH_KEY',         '+nO]TSMXR2f.M1eg8T^aV[ey1v:lSU07Xj3AsS]+r-a]zf?vg*QV5 v8`POMu`aZ');
define('SECURE_AUTH_KEY',  'JA_y?0;1e*TN0|~B(&8oEd2LE<$ZL$8c.k!bx+;)@}Tkl)UE.$%DSo!J&K/;tT}z');
define('LOGGED_IN_KEY',    '_7F%k#FI6BfnjZRXrn{!TG(4-hq_=)F^9|Ji3L*A+_m|T6xDqnXPBlk$EB?F32c2');
define('NONCE_KEY',        'S6psNv g.Gupwu#::BPMg+AY&B +^$]!MJ13G|zL/E87<w&9O~!Ng_W/#DiC3-f|');
define('AUTH_SALT',        'L_W#|G,oF.+Q=0>1wv9f.TwcC=|Tn]%!QHY$e|U|t[/lhDtB8l*TpbsLF(my~%.l');
define('SECURE_AUTH_SALT', 'Wi^MlmQ0}_Q$Y:/g?;V+2o-fcUB9yp<E~n9=?~<ISO/gd(-f;o!_7YAGuK9--nxA');
define('LOGGED_IN_SALT',   'P=j|Abu-M%<7?|l?s2oMS!**2`_#h!DdK]e>Nd@N_>],Hj`|G- q;(#qQ9;e%G(5');
define('NONCE_SALT',       'Yf9]=<,]JnkZs#G*V69ss8L6>.>~V^QHB;HtGM.CYnc}4#Qm+9j^WL~i7j,iBi.E');

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
