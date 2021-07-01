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
define( 'DB_NAME', 'prafulsanalkumar_db' );

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
define( 'AUTH_KEY',         'c1Ld&COHOUh3J{3?+R6I=c2%nF=k@/6y9&QyQMV=miCWz;;L>WGSQPZJhmEd0]s ' );
define( 'SECURE_AUTH_KEY',  ',JJVD<3xYa>s~|6Pb~Gzl`lXqHFhhe`kB&|c,p&_NJp]H$h1AgU41/V@{R2k qQx' );
define( 'LOGGED_IN_KEY',    'ey0<+NYgtk<5[l59cg{p!7B}gu^ DN5=F{0k.Po/HZw?oI++n|:g`vj~-pr}nTmu' );
define( 'NONCE_KEY',        '8mmD^La9)[!yx/kE:I--e3YCzfzU|0ayC_a/OB~8z,|W5:E4[;:@s{ahQaFAbgC|' );
define( 'AUTH_SALT',        'jUyZ,Fs%?|ay|WJ0qp(e*c$@-5[&1E/HgF%OYZcR?HjB-{pmz.>L+cju9|@_/u%(' );
define( 'SECURE_AUTH_SALT', 'a4;7+vyBV#TIVaK(S$d6n8DkRxb&S=rhRNyosr|(eFW9Qnwczx=W%4-:tGQUjrrE' );
define( 'LOGGED_IN_SALT',   'SXSBmYu;5N<sr?3~`s[>*x|!i6-m%r} =sx$bnUO!pKIl@WAx63vHke0{7j_tX,R' );
define( 'NONCE_SALT',       'H_93.h_uq8)meZa0|+(MYxYDPc^qN.qo]+eis<]Li_HIDRMYh@4?>.65F|6lh:Vc' );

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
