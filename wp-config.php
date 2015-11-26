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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*@]9KCl39$[AS90CDf(jz>X`v0 )+|}~RwU-:OEogJ[dAA;kTdmCz5rfnkxO{51#');
define('SECURE_AUTH_KEY',  'm{^m`CsR f})A/n]A9@PFt2v|yF|.>@s{(4N9*HV-?l_D&+U}C@F}?S;+eWMiHKF');
define('LOGGED_IN_KEY',    'uTt$z6*6cDd(pzD?>e--V,8QOj%qvO80;ZO9)pZ}0>aMk{#E`uZO-4&mjt@j#|k:');
define('NONCE_KEY',        '.ofO%(l~KoDDLs!eg9T$x H2[i/9-Y+/Q)p`Lm,o^Z*:PxlT,ymeSe+~|]VEaA.l');
define('AUTH_SALT',        ',[QQ)[&28hy5t]+s(+|v^1H_-jZkr!7NN8RdMT;%0UJd[_:[n4X3dp^g-/@PUKZ@');
define('SECURE_AUTH_SALT', 'wg1sh%dPk+/jivfDp_:(?Q+$x>)S=O{O:Y)cR,KI_<l+ri;YPw<4U(iZ$Cke(|xS');
define('LOGGED_IN_SALT',   'czC->E>+kTr7?g}w^00Zv@{D}S4MKAgR1ub<m,X|,S=RjPym~)_l9{tH$9]bU8m`');
define('NONCE_SALT',       'eLF*+fsE#(WZB7(o<1O0a{LzTV0WDS7uYn=aZGk4)1SnuK=B-1x-|B>slpIv1V6i');

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
$domain = $_SERVER['SERVER_NAME'];
$scheme = isset($_SERVER['HTTPS']);
$home = ($scheme ? 'https://' : 'http://') . $domain;

if($domain == 'nagnames.dev')
{
	define( 'WP_DEBUG', true);
	define( 'WP_DEBUG_LOG', true );
}
else
{
	define('WP_DEBUG', false);
	define( 'WP_DEBUG_LOG', false );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define( 'UPLOADS', 'img' );



define( 'WP_SITEURL', $home );
define( 'WP_HOME', $home );
define( 'WP_PLUGIN_URL', $home . '/wp-content/' . 'plugins/' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
