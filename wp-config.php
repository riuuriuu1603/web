<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tfb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F%1wk*j::##:S`mP{!/e1JA4yEr7?&-|L{!0rDT2]&os0svi/.A=nvGP1S6{G3[t' );
define( 'SECURE_AUTH_KEY',  '[HODKeQCOdG(ko~La=ymkpo*T%Ey zdz]eEQzrS !/;@,PsonAa88Di7ykOkOl=-' );
define( 'LOGGED_IN_KEY',    '59iY%=9)Gz]ta@t`*VE6j3x494h:-~_R{Jx+<He`d-|wBLIe1f56J+vBD!ASl@{Y' );
define( 'NONCE_KEY',        'D8`{sE7A&;etad>t[$&{b(g6T]@,?^U5,sr&D ={4#*Z{d,vEw(r2e,SKN~,%=|@' );
define( 'AUTH_SALT',        ' =M<9NxI}e{CAo3<^#_dfX-sn.5[U-$d$jL_/SfW6AGU5v.`!cb)!~7D}0W_j(By' );
define( 'SECURE_AUTH_SALT', 'qnPP5uw~s]PLWqD(sKrqyaAPj:&v#ZqtuGsZyiV+pQ5m6Af+2WLPIaV(_lIho=G:' );
define( 'LOGGED_IN_SALT',   '{G&vNnBL3>kehL`3V|-yuKN|iJ.Mi[CnknMU$2#}e76+~pl32}Q>KhM>ShtcTNg4' );
define( 'NONCE_SALT',       '+D4uD${bS>bL5]OVw;W3U[pvJ}X2qq$aUb7u$Z%dge05%;~Jmmx3FgLAF./Cq$0j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
