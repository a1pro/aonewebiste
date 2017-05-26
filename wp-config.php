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
define('DB_NAME', 'a7a1prof_live');

/** MySQL database username */
define('DB_USER', 'a7a1prof_live-a1');

/** MySQL database password */
define('DB_PASSWORD', '~As0k~ErQ%HG');

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
define('AUTH_KEY',         '<&[)W;aHFNj|CshQ)G:| Vq9gGK&UunV.D3.?&5W}+mLL>1CJI+a|LXAyH$,&^`P');
define('SECURE_AUTH_KEY',  '6~7|uOwq!H-XgJ.Lm|gV+{ lR}I+Qq=--y6Uanav|U]}1w1(n@&+TJH-[0.dFm@?');
define('LOGGED_IN_KEY',    '@Ta1q#<5&Z83f;/|+r>,+eSnZ#;5WA[7~&f6.{b!4ng(uW4S&gt>=qV&rT8H,8C7');
define('NONCE_KEY',        'e ]38,Br1+xoBGybcTyDV|~<;uMD(k t7|=mI>_Iy>Qjy_6Bz>TAnQvR)H/Pjq]q');
define('AUTH_SALT',        'HdGreI?hRf/e>av-c$o/>QGU}8ih@VOu,r-6&*j _rT,JHR-1CTN|ClQpm3=kmx2');
define('SECURE_AUTH_SALT', 'hHp]/$G`I|Y% vf|Cv/gIQCTtpjG(b~x|~(oSqM/r{i:!/!Mbq,{/lMr}+~O`J@Q');
define('LOGGED_IN_SALT',   ':5jeF<} aX1K_KB6lUve39zX ;VH ]-|<#-sq##E/|oG;@PPgzFE++QU.s*nWBAo');
define('NONCE_SALT',       'm/aDdc-09t}--T7qbQBTAv&q[U2R0oS-PLS^)Ry?~-S+lP4n7*`vNb~$j&B(f@5p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'a1_';

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
