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
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

/** MySQL hostname */
define('DB_HOST', '{{ wp_db_hostname }}');

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

 define('AUTH_KEY',         'T_!PB[#SXQVA4N[;E&1tb>Xq1]T3LOtfpouyY$ktON%zz66j/0>)#}fCYna1oa@8');
 define('SECURE_AUTH_KEY',  '-dp[f#/0<=Bc0{4*Gv,QkYZi=^j&mL%[# ZMYH8+ R%K9*|g_ -`44?-=DN,m~?r');
 define('LOGGED_IN_KEY',    'U Z9^vjYpFdCT+C.W*5uCIt6M&#b7iXBqn!6S;A5)g4svN!Ms$e?%v(zUI qGNzp');
 define('NONCE_KEY',        '/8NBClmgP5 dpn];aBjo?i`^S}`W33Nkn+W<Id]kHCq25]foVZkTV?bVP=^ar)&W');
 define('AUTH_SALT',        '[+}lv-v]Mx<c3/^g-Mq>3LnlQWjpk7LWgQ4t8P~uN{!5TE$@cs<vF9,BOxXlYROw');
 define('SECURE_AUTH_SALT', 'NfP k.-zExJIZU+yO7 XUD-`|0++OUi.}>|FG.8|tpQCKQC9;Z)_6z{sjSrvWDZ-');
 define('LOGGED_IN_SALT',   'j)^Q@R:1DVZ8?jj%F@xvX85=^[>R-1owUSESJl+7d/A6KS(>#Wt1x+gx$7e7ayzn');
 define('NONCE_SALT',       '4+-ihGao*BU+944-<7fD+0Q,v*{1ySp)K!hQ#-c.}U5q+U?di-)SCKCl*t>Kp5w6');

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

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', {{wp_auto_up_disable}} );

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', {{wp_core_update_level}} );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
