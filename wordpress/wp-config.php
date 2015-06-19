<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'andrewduff1');

/** MySQL database username */
define('DB_USER', 'andrewduff1');

/** MySQL database password */
define('DB_PASSWORD', 'mm991hE7G2Ms');

/** MySQL hostname */
define('DB_HOST', '217.174.253.159');

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
define('AUTH_KEY',         '.ep|&T-wxSa2murwH_{#QX*?f>q:eJ&nEu`Njl&^Y#2a`KVS6-v%,K$}<e-ipmPb');
define('SECURE_AUTH_KEY',  '%5+A+=G~W%~DyGK3g9Y|Zb6@su?([g}cD+S3XF=9>sA&wx=a|J,$RrJ{#qA[%c!g');
define('LOGGED_IN_KEY',    'xK2/I0k;(l~chwXY$p-.`CH^v-C|c9aWD:Q_E!<mrI[mJrX6Np+J{I?^QdJ?$Thg');
define('NONCE_KEY',        '5Y=V||OYQ-8_riy]nTe+,XF?%R?`bLbx9rPQgaf9_REzpdUbQS1LfYbV/Ycw{q V');
define('AUTH_SALT',        'JL^+-3h7za!7Z8DDF%zgDt.Hu*;LDX3p<`P`VX+usm-[)5J!-*,|h6~?I7OJNGp,');
define('SECURE_AUTH_SALT', ',zV+s:S$E/wiIc/bwEo{y`R^ip|:%^ArY& ~l4BVU>Z+lv=@7El>ffWO>OJHEAOk');
define('LOGGED_IN_SALT',   '~l,c[e#iD])mgR=Yd2=rf+dM~#rN,3;-8+OlwE,hTQYWvBg(c3cp)zP sj[mSvLK');
define('NONCE_SALT',       'a[*C$2wfu_N>MDk+<EhS2xR#q)#<GJzs2tY+)B0=ofK|NH{FV#? cBPS2v[[#tli');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
