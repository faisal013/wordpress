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
define('DB_NAME', 'faisalwordpress');

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
define('AUTH_KEY',         'gUS8rHhCt,C[:w@`mP<j+iUul#XEM0uURRO!A#0*|.=C1r1D<|4$P5Vg9&u0]<?)');
define('SECURE_AUTH_KEY',  '4sL{%&>!vT,SvBX}H_o8D{=axi!Cf[-6/d(x9EhC(~T>:]iH1-6#rUu[tZ2#v)fH');
define('LOGGED_IN_KEY',    'Y>uA$<0?A/9rip5e#k`y,Gdvr8C`O*bi!DpU#]nN~p+=E%Wt^05$Mhoi{q#DN8aF');
define('NONCE_KEY',        '`LE4LH_#xOi*5(Tb*^2yu8]My/|}f;_aYX?QF2F]4FcY_[X}O_]LQpK$c5@o=R<R');
define('AUTH_SALT',        '5@GdejVC.Eki%2:I:K5[<*f[8ubbJ~+AhHTB5uzq`yf=ED)W]`j(D-qIk)RLR>91');
define('SECURE_AUTH_SALT', ':yB:WK,6kJJ7su{WLN/Mqp+ma^Zu`06`^)UI^+KZP]fM~A&s{fOq9NCTw=>/3!qa');
define('LOGGED_IN_SALT',   '4w`W)Ca9R}bn (,;2V,jj9mpQ_2B<%@aI<mW;/5|1<O_K,<f2-(e_pz#Rpl2^}xT');
define('NONCE_SALT',       '1NEuFAWJxDJjbOW)^SeNhoT{32i8VSngaqzLm+pbMJ LIB4Aej]Y^A0 F#p(az>`');

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
