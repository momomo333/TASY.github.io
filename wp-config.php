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
define( 'DB_NAME', '1' );

/** Database username */
define( 'DB_USER', '1' );

/** Database password */
define( 'DB_PASSWORD', 'Dl5O5UBSoy[2Yhqs' );

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
define( 'AUTH_KEY',         'j^(1>Of~WR-8wZC1NF8[VuQWh+<(`e-Xyj~x+2J-/.3[*)3j$uH?OS!hpKou11Y}' );
define( 'SECURE_AUTH_KEY',  'e`yL>tP8WPGHtj+!*49:]p9`{u$DHPy=x?i$RX+!.}}F}EVjAY#1wQ)g#`|}NACJ' );
define( 'LOGGED_IN_KEY',    ';]k^t3^r/aKdR#0t[W*+bR:+`{C2J`cCqGx4!/+CHvE{/j+^U3  $t_e?(8|)Y#V' );
define( 'NONCE_KEY',        '>4odL]DX?`ce[^o~7##SW Np5CA&w$D_qyq@5fg87h!`TS(i06vy+c=YDFfyvc,A' );
define( 'AUTH_SALT',        'v!eq1= bP.BRQNDbR!XR%.B!@[l7n?N0S#lo==UpyGbM`f#zF;a>5/|}y}CUJz?j' );
define( 'SECURE_AUTH_SALT', 'Xi]!-i(`A9]r/_s!/0wz4`.`w5[Azx^V!W2Op4KN?`XGZAY6^N([sxsSM Av<3a1' );
define( 'LOGGED_IN_SALT',   '!_GL8q^JS!$]^40u|a?<%*UNu:^+~6H_0{mM`[R4&qY[+/ig*@##|`DM]L~TzLwA' );
define( 'NONCE_SALT',       'vlR#[ui5]U}oozu 717j8},Eb&Wkkyior+>iKxgZ4Lqw`<,<yl^CM!N5xElv2qD6' );

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
