<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_43aat' );

/** MySQL database username */
define( 'DB_USER', 'wp_f8ulh' );

/** MySQL database password */
define( 'DB_PASSWORD', '3k5rot5iBsP?XV$f' );

/** MySQL hostname */
define( 'DB_HOST', '167.99.220.230:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%!2m;zOs6s6J!/2(3lLvqWHe:3)-h[#12qIv(oRl0S!8)v3(2:b2-UD15Z)70s7;');
define('SECURE_AUTH_KEY', 'CobW&h+;d%P000B]r|H15X]UEr3l&*:FK2fg(68PlF|&]yTRex30sKi59(/x0[DE');
define('LOGGED_IN_KEY', 'IfY*9XAAKNPz9*Tmb&q%fFE--79yCe6w**]6g&EjOS(l6kbQGF2)Tb#v8UDS;t%-');
define('NONCE_KEY', '9~:6UiOrOB_XX]g%EIT3kAl0I2(8ZD|WA#J1t[nFxdc*nQS#51HawjR7!e7%izw~');
define('AUTH_SALT', 'h3**cyT0Q[B)~twb5oH;7jd#%AoLW4A8CxA!SFW6XW3sAnCB&T4schfQ:fN7!/l/');
define('SECURE_AUTH_SALT', '8YS0R0b|W5LqZ6ugA@i;t4q%HB&z(99b64;8(AontHNjMhatL#7ki_sb:a-r5&D!');
define('LOGGED_IN_SALT', '4pvi5)BiBn7)+78*L2RkA2KZj6561-a+Khs;ul%78FEs+66/N6_v~4Zt_+5Ai~n2');
define('NONCE_SALT', 'x1#-578:f7f9371+mr:#FcDG9UdD3R1|0hfQ4n0W21e+*:rqFyOTp)0]69G&(/J5');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'WUPkj_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
