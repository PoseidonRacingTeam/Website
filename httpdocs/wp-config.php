<?php
define('WP_TOOLKIT_API_TOKEN', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzUxMiJ9.eyJpc3MiOiI3YjY4OWRmMS00YThiLTRkMDAtODJlMS1iYTMxYmY3ZTUzMTkiLCJuYmYiOjE3ODg0ODU1MzguODgxNzg0LCJleHAiOjE3ODg1NzE5MzguODgxNzg0LCJqdGkiOiI0ZTU2Zjk1ZS1hYTE2LTQ0ZTgtYjY2Yy1iYTc3MGE5NWQ0OGIiLCJpbnN0YWxsYXRpb25JZCI6MjYxLCJhcGlVcmwiOiJodHRwczovLzEyNy4wLjAuMTo4NDQzL2FwaS9tb2R1bGVzL3dwLXRvb2xraXQiLCJ1c2VyR3VpZCI6ImE4YzcyNTIzLTk1YTQtNDQ1OS1iNWJjLWU3M2Q4MGU3YjM3YyIsImFuYWx5dGljc0lkIjoiNmJkYmUxOGFmZmQzN2QxYTM0OWU1OTY3YmIzZTlhMjA1ODc1MjlmMiJ9.MOP7Lpw1Y_7GV27O1dC2IgeSZ5OKOl-i7rFPRbwYbUlWPOmsO96_21OEQVQftflLtnLdjeDpNjYQfGFjtVFVAH1lQuGKzEeiV6b0meQrdThjzMwGdHFXm6QwljYCdS5iCZtnFSIAyTklp84X0NQN2ooxtpJdR5nuv4AA_LO86CX4HdeK4rypRdLqmgxZbGdpsMTt65_wegyLuRmiJvPlv_DHnmBQEQIuC4DcABXuf5U0qrcFdkRTETBbeS7pHimU4tYKmaYT8TkSTBqlr5tSMpImnJnyzJKnQT23soIM411AwUuyDtivqtdv47zqikLT0UwhKHpFOiXpD1m7rQRUffTdupVW92PaxE6E7MjZZGSAOtbcbRIV-SAjrgQiNy7Pbz9kELNzHz9FD7HHeyqpOyWzdbrfT3H90snzkgFG5oao5VZLODuiimRDiWJfsVAjcfEzaBT7twi46fpeuefB36tIzBkq8envd-asjbhXQhUc3xvC1QU5zUqtizTExezVsIXT_FTJK1FanYRFgfQ5U-Ar3os6uKFxD1gWvX3G5Nf_X_q4MQZFoVfMt5GN4Al2qqWEu3dAkqwYR5vWOL6T6PbDIDKD5oG0VK6a3lBojko1jzS_I7wUErXfP4c75MO-puWx69W1-LukMxv-bAU2vcW62_UwN8egqVq73l6u4F0');
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_f70du' );

/** Database username */
define( 'DB_USER', 'wp_hetiv' );

/** Database password */
define( 'DB_PASSWORD', 'r_F$6*1G1ESFEjTx' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '&Z#C0gY(/B)&t|%|!qd5m(l*|ZO5v0:7);!3~(vn+9z(v)K75E+91(I6H+7Q6Le1');
define('SECURE_AUTH_KEY', '-a7M~_C7Dw2*6(1~#/6bn35N9GzXg]sl|+W%S2t1RBt|K96/V~L~hh7F3|8*)~3e');
define('LOGGED_IN_KEY', '2F)fl/Ho7Gy)|1]7Ws:C:Q]Db0[Hr%fc4Tg+]J_4-_wF711!1CYlu22C!8@6w_u4');
define('NONCE_KEY', 'T8#z2iww+[4a54-*|]k#_I2g00zU2EMiS0J]H(sMaF1V7;7]zr*!b5wz%wEtFZM&');
define('AUTH_SALT', '#3K3Wbc6J9lh89QHp7XBl5%wgNI;Wp7m!Ky&;u0@tt%cI&lHk)pd|MphH~Et]Y[0');
define('SECURE_AUTH_SALT', '(LZ7%Bp0|8(0hc&)pPj(1je/ih9#TP&aj1C|:%je+4Kc/GhN8uCFb9kN:I8s*ixf');
define('LOGGED_IN_SALT', '89p22U7NuP~J&X_LgDk(F%93E]tQ~_(O623~8555~o4[_V1kNRI7p542DX6M]S)~');
define('NONCE_SALT', '7x4)9;om9KCA1(7kH51;Z-25cJJ~B68s6877)8)aV~u7z!6yFAvr3&5BH&Fc0pfw');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XB7zR5_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
