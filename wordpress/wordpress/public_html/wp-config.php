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
define('DB_NAME', 'ci16179_0');

/** MySQL database username */
define('DB_USER', 'ci16179_0');

/** MySQL database password */
define('DB_PASSWORD', 'QXRL7MV4');

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
define('AUTH_KEY',         '-Tf#ijCg&y#,I8&82p; n)^-v-!tPOXM@HNHTlG;=+hrcCNp {NZXzt~XUf -!5u');
define('SECURE_AUTH_KEY',  '=cmVG^$:<urB58_8U]yp%9HA!Pz4[W *eiiJn%D OSczj j<+zL=A]UL/2Ka (*?');
define('LOGGED_IN_KEY',    'oKb6[Aw~m7iFIcP{q8M6v]M90uwKHWkN+hN%1R%oz6dX6xnkiG o,ce6z-QfGoxU');
define('NONCE_KEY',        '|k`49lPJsjoY2Dnw/](8<gTPjk9InAu{>F]DxnX$F!FX-ElUpi<&Z.<cOs5if.SI');
define('AUTH_SALT',        'O!3t/B[nrF5Gu,coY6:[p>s!dQ_h2Uw*xeQDJy_M>FDNk8i=2_w;q-R1aH[aJi6R');
define('SECURE_AUTH_SALT', 'DO{sXV%C8>`Li9IeqG~-f7[q;/w[mQvit}8-DopRk3[{<rYPyd,dF*/UyTT 4wyj');
define('LOGGED_IN_SALT',   '1CZyN{+m4@[+&)Nx{R?HfJSGw,P~KQ3@Sq8c8$.WP!^Ab5YMcVdP&LyTiL$vI(%0');
define('NONCE_SALT',       '(pa>Jl`1.n-}+(eaew-=<f7`>m<S?KI6N`*sjeXK N~3k&T^!X;w@E}y~q<Pp7hj');

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
