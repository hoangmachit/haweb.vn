<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'haweb_vn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=U)(r(>LTKyjk?&RIajUAeW!F@d?vM^4ZY[a[72>0}Z?EJ8zj(FU*cSHyIU`!#b!' );
define( 'SECURE_AUTH_KEY',  'v3=bn()<o0<3Qc}-?m$A9KRiycsDg)c:Nde%b#fPW&o y$_<miJL1mTNu`,96[S>' );
define( 'LOGGED_IN_KEY',    'x gtPU6Z}iyjB~/E5K~#Y4rYrG}id)tP9)XlOcP{g3Iz(2-lE,2ONr]GBql+YjqQ' );
define( 'NONCE_KEY',        'Car|I}(`Bl3}7F9]NA4L*7fL)oMNc%RXK^Ggl[&i@{{o@h]E*gytIO5`N 6BId@(' );
define( 'AUTH_SALT',        '&z%i6yYX,7]u0?tQa=4I65hROr(WjWJ_5s)rC0]N8-~94sLjP!Q{^0`cI ]bKBY@' );
define( 'SECURE_AUTH_SALT', 'khQNI, A+&m~}Cwt=F5bYp4!GU`ms@M7mvCE4o8IMIiOo)7})/Hfeiu`%%+?BS$$' );
define( 'LOGGED_IN_SALT',   '?w#jKEu%DDpm_+>xQl.t%1fyU/=9b!vUyer15G%[x2p7zN2k_8{?zpj(LM5|18ij' );
define( 'NONCE_SALT',       '!#.YFKp?ZGV~FGF^uKr#XhW:gx&;Te?9k12Xkic<GAk7ZEgNu-[>1ar@@7W/S. h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', false ); // turn off auto save



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
