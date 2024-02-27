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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lavishsi_wp476' );

/** Database username */
define( 'DB_USER', 'lavishsi_wp476' );

/** Database password */
define( 'DB_PASSWORD', '7Zp8T)7(pS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0qyyodb10ofhtb2z9o5eglg8gtsfw15hxyvusdac4en1glzkzy1ez0p0jllffbro' );
define( 'SECURE_AUTH_KEY',  'syjirjpr1m8q2aofs7tdfvo4b4xivoe94w9y7zdb1pb1tctbpgbpp0xbna1cyyhm' );
define( 'LOGGED_IN_KEY',    'fryircfzm3srlspd1yrm4zqsay8h4d4oc8ghclfjgtl5hhlfh8q6djibr7wbarfb' );
define( 'NONCE_KEY',        'eykisfh3uaxoxhl4g0lidkxbnkotrrqexld0s6qkugivxmyvaiurbgkhqfgu8z5s' );
define( 'AUTH_SALT',        'bkfexpx9qcccjvriz67nia1qkucmoth0us8wtzug5alh79j3xt7c2kly4q8az4cs' );
define( 'SECURE_AUTH_SALT', 'dmghcdqfbmzj4sqh9np8h3wia8kcvbxvkg7me43q8d9dxmf2gvx8xjpsc5ofqxqy' );
define( 'LOGGED_IN_SALT',   'd4hslporrswubyqjcjmfrqi6lzlvpq4nulzato9kyrekgo1rgcro14uu1wbfiot1' );
define( 'NONCE_SALT',       'tdstaa74i98brbdwmzfabctjtqeqvr2wbuvd3s5ticns74ufax6undfubwhbgzei' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbk_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
