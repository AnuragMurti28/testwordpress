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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         'kq{#zv^Hm7L?DrunB>= cLi$SV*1,| e~[; ~T@urSa{[I>px1Np:{5*,PY2buq%' );
define( 'SECURE_AUTH_KEY',  'Tm2,JOWEy1U>xW2K2wA%8P7bPD}G{.q.Go9G0UvfKwlX}8B|qA+a=W[u/_m[OGB~' );
define( 'LOGGED_IN_KEY',    '{HUtpo@wOFm:4tNLrlP-w)3J:hZ,q972]dgdgN[xh{yxZmtsvt}{SHY{W`@O7GOi' );
define( 'NONCE_KEY',        'p|Uhka%<~1R?N#9u8deM^A.q)A;@R<TC^uB@YP5]//r|w)=1hA=~.)NOioHLiO8+' );
define( 'AUTH_SALT',        'Tj$WLdHLQD;H2H.bH !IXswSO+aQ{CzjB Z*!?B87pAbz!j]G,RmY-T+`<?Y z.p' );
define( 'SECURE_AUTH_SALT', 'V-yr @T(n[m)W?*^Nw}<.Wo9j/?^_Y3o$JgRZLs(Wmd^1;@oeuRb~d-sVX;O2|:b' );
define( 'LOGGED_IN_SALT',   'MDKu^- -8hLfvW^(Clh?rh9-k~$l%xZ4xf,,Wn;T@R_p)3(w,}F!)}oWyM6bQs1f' );
define( 'NONCE_SALT',       '3F%X2XQ!:N})i{yak&oT]/g|#YI6dM>,Xj0eu#Ezn(gp;Z^e$B_0hXKi=8}`kX4t' );

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
