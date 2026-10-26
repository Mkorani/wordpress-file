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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'fe!VS9JRa2`_6QLPR{t*-nn^zyKke-O3][[Pw+[W)i h)-.]7i<ca!Z6xd|vxxCM' );
define( 'SECURE_AUTH_KEY',   ')ZU}?zw!DFD{_N@IxKrZ^q`}VT3(u:~GcVn:Xe&?6U6O>FZnXE>SB{O]WSgM}G~4' );
define( 'LOGGED_IN_KEY',     '%n$:bY+D1E9Q/RbQP),);s4M=cYOrkC_g{? ?ilP- 4bVJi68LDSe>s2]?/;;]SL' );
define( 'NONCE_KEY',         'K-#Yj]Cq2L6vQX@pF`~NtODjEtNO4^#Z7EZom&32]X]ZLn2EfKwvHYORsvE/+`k.' );
define( 'AUTH_SALT',         'cUP3$AY]V%0EenGJl?)S:?:LFWnDx[I1y#q)w.I6a$2BOeNoCp+]hz4[Zqm_`4{.' );
define( 'SECURE_AUTH_SALT',  'i(2B`zl/3^E+&I0(lr>Q$A2PWPooc+kh~o?b k1Bd%Pe$4CHM)$bv=zQ=:~{n2]+' );
define( 'LOGGED_IN_SALT',    'lZqL!w5r %xi/jeirCezPr4?`NTH!k%)D=SooEfLk_woH2i|k_mlK{*g&cW/R0&~' );
define( 'NONCE_SALT',        'r3RKG96Xp_T6@,Q`SNqg`8|fyie[uP(& ,`rKF7Pg{@Af~xrXUv#;bL?9|R<(r)d' );
define( 'WP_CACHE_KEY_SALT', 'pCL0wH#PiR1dtXip|}ca6wYzzA 7pNV|^qCb3_uF:u/&1B^vG3`iRP$KeK#i;bi^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
